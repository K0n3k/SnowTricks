<?php

namespace App\Controller;

use App\Entity\RegistrationToken;
use App\Entity\User;
use App\Form\UserType;
use App\Mailer\MyMailer;
use App\Repository\RegistrationTokenRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route(path: '/user/sign-in', name: 'sign-in')]
    public function sign_in(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser() ) {

            return $this->redirectToRoute('home');
       }
       
       // get the login error if there is one
       $error = $authenticationUtils->getLastAuthenticationError();
       // last username entered by the user
       $lastUsername = $authenticationUtils->getLastUsername();

       return $this->render('user/sign-in.twig', ['last_username' => $lastUsername, 'error' => $error]);

    }

    #[Route(path: '/user/sign-up', name: 'sign-up')]
    public function sign_up(UserRepository $userRepository, RegistrationTokenRepository $registrationTokenRepository, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $userForm = $this->createForm(UserType::class, $user);
        
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $registrationToken = new RegistrationToken();
            

            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()))
            ->setIsValidated(false);
            
            $userRepository->save($user, true);
            

            $registrationToken->setToken(Uuid::v4());
            $registrationToken->setUserId($user);
            $registrationTokenRepository->save($registrationToken, true);
            

            new MyMailer(
                new Address($user->getEmail()),
                 "Snowtrick Registration validation",
                 $this->render('mail/registrationLink.html.twig', [
                    'user' => $user,
                    'registrationToken' => $registrationToken,
                ]));

            return $this->redirectToRoute('home');
        } else {
            return $this->render('user/sign-up.twig', [
                'controller_name' => 'UserController',
                'userForm' => $userForm->createView(),
            ]);
        }
    }

    #[Route(path: '/user/validation/{token}', name: 'app_userToken')]
    public function validateAccount(RegistrationTokenRepository $registrationTokenRepository, UserRepository $userRepository, string $token): Response
    {
        $registrationToken = $registrationTokenRepository->findOneBy(['token' => $token]);
        $user = $userRepository->findOneBy(['id' => $registrationToken->getUserId()]);
        
        $user->setIsValidated(true);
        $registrationTokenRepository->remove($registrationToken);
        $userRepository->save($user, true);

        return $this->redirectToRoute('home');
    }

    #[Route(path: '/user/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
}
