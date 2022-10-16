<?php

namespace App\Controller;

use App\Entity\RegistrationToken;
use App\Entity\User;
use App\Form\UserType;
use App\Form\ResendRegistrationTokenType;
use App\Mailer\MyMailer;
use App\Repository\RegistrationTokenRepository;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Exception\RfcComplianceException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route(path: '/user/sign-in', name: 'sign-in')]
    public function sign_in(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser() ) {
            $this->addFlash('error', 'You are already logged '.$this->getUser()->getUsername().'!');
            return $this->redirectToRoute('home');
        }

       // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        if($error) {
            $this->addFlash('error', $error->getMessage());
        }
       // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('user/sign-in.twig', ['last_username' => $lastUsername]);

    }

    #[Route(path: '/user/sign-up', name: 'sign-up')]
    public function sign_up(UserRepository $userRepository, RegistrationTokenRepository $registrationTokenRepository, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        if ($this->getUser() ) {
            $this->addFlash('error', 'You are already logged '.$this->getUser()->getUsername().'!');
            return $this->redirectToRoute('home');
        }
        $user = new User();
        $userForm = $this->createForm(UserType::class, $user);
        
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $registrationToken = Uuid::v4();
            try {
                new MyMailer(
                    new Address($user->getEmail()),
                    "Snowtrick Registration validation",
                    $this->render('mail/registrationLink.html.twig', [
                        'user' => $user,
                        'registrationToken' => $registrationToken,
                    ]));
                    
            } catch(RfcComplianceException $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('sign-up');
            }
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()))
            ->setIsValidated(false);
            
            $userRepository->save($user, true);
            $this->createRegistrationToken($registrationToken, $registrationTokenRepository, $user);


            return $this->redirectToRoute('home');
        } else {
            return $this->render('user/sign-up.twig', [
                'controller_name' => 'UserController',
                'userForm' => $userForm->createView(),
            ]);
        }
    }

    #[Route(path: '/user/validation/{token}', name: 'registration_validation')]
    public function validateAccount(RegistrationTokenRepository $registrationTokenRepository, UserRepository $userRepository, string $token): Response
    {
        if ($this->getUser() ) {

            return $this->redirectToRoute('home');
        }
        $registrationToken = $registrationTokenRepository->findOneBy(['token' => $token]);
        $user = $userRepository->findOneBy(['id' => $registrationToken->getUserId()]);
        
        $user->setIsValidated(true);
        $registrationTokenRepository->remove($registrationToken);
        $userRepository->save($user, true);

        return $this->redirectToRoute('home');
    }

    #[Route(path: '/user/resendToken/', name: 'resend_registration_token')]
    public function resendRegistrationToken(Request $request, RegistrationTokenRepository $registrationTokenRepository, UserRepository $userRepository): Response
    {
        if ($this->getUser()) {
            $this->addFlash('error', 'You are already logged '.$this->getUser()->getUsername().'!');
            return $this->redirectToRoute('home');
        }

        $resendRegistrationTokenForm = $this->createForm(ResendRegistrationTokenType::class);
        $resendRegistrationTokenForm->handleRequest($request);
        if ($resendRegistrationTokenForm->isSubmitted() && $resendRegistrationTokenForm->isValid()) {
            $registrationToken = Uuid::v4();
            $user = $userRepository->findOneBy(['email' => $resendRegistrationTokenForm->getData()]);
            if($user === null) {
                $this->addFlash('error', 'This email adress is not registered, please <a href="/user/sign-up">create an account!</a>');
                return $this->redirectToRoute('home');
            }
            $this->createRegistrationToken($registrationToken, $registrationTokenRepository, $user);
            return $this->redirectToRoute('home');
        }
        return $this->render('user/sign-up.twig', [
            'controller_name' => 'UserController',
            'userForm' => $resendRegistrationTokenForm->createView(),
        ]);

    }

    public function createRegistrationToken(Uuid $token, RegistrationTokenRepository $registrationTokenRepository, User $user): RegistrationToken
    {

        $tempRegistrationToken = $registrationTokenRepository->findOneBy(['userId' => $user]);
        if($tempRegistrationToken !== null) {
            $registrationTokenRepository->remove($tempRegistrationToken);
        }
        $registrationToken = new RegistrationToken();
        $registrationToken->setToken($token);
        $registrationToken->setUserId($user);
        $registrationTokenRepository->save($registrationToken, true);
        $this->addFlash('success', 'A token had been send to your email adress, please validate your account!');

        return $registrationToken;
    }

    #[Route(path: '/user/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
}
