<?php

namespace App\Controller;

use App\Service\TokenCreator;
use App\Entity\Token;
use App\Entity\User;
use App\Form\UserType;
use App\Form\ResendRegistrationTokenType;
use App\Form\ResetPasswordType;
use App\Mailer\MyMailer;
use App\Repository\TokenRepository;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Exception\RfcComplianceException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Mime\Address;
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
    public function sign_up(UserRepository $userRepository,TokenRepository $tokenRepository, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        if ($this->getUser() ) {
            $this->addFlash('error', 'You are already logged '.$this->getUser()->getUsername().'!');
            return $this->redirectToRoute('home');
        }
        $user = new User();
        $userForm = $this->createForm(UserType::class, $user);
        
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            try {
                $avatar = $userForm->get('avatar')->getData();
                $filename = Uuid::v4().'.'. $avatar->guessExtension();
                $avatar->move(
                    $this->getParameter('avatars_directory'),
                    $filename,
                );
                $user
                ->setAvatar($filename)
                ->setPassword($passwordHasher->hashPassword($user, $user->getPassword()))
                ->setIsValidated(false)
                ->setToken(TokenCreator::createToken($tokenRepository, $user, TokenCreator::REGISTRATION));
                
                $userRepository->save($user, true);

                new MyMailer(
                    new Address($user->getEmail()),
                    "Snowtrick Registration validation",
                    $this->render('mail/registrationLink.html.twig', [
                        'user' => $user,
                    ]));
                    
                    $this->addFlash('success', 'A token had been send to your email adress, please validate your account!');
                    return $this->redirectToRoute('home');
            } catch(RfcComplianceException $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('sign-up');
            }


        } else {
            return $this->render('user/sign-up.twig', [
                'controller_name' => 'UserController',
                'userForm' => $userForm->createView(),
            ]);
        }
    }

    #[Route(path: '/user/validation/{token}', name: 'registration_validation')]
    public function validateAccount(TokenRepository $tokenRepository, UserRepository $userRepository, string $token): Response
    {
        if ($this->getUser() ) {

            return $this->redirectToRoute('home');
        }
        $registrationToken = $tokenRepository->findOneByToken($token);
        //dd($registrationToken);

        if(is_null($registrationToken)) {
            $this->addFlash('error', 'this token does\'t exists!');
            return $this->redirectToRoute('home');
        }

        if($registrationToken->getType() !== 'registration') {
            $this->addFlash('error', 'this token isn\t set for registration!');
            return $this->redirectToRoute('home');
        }
        $user = $registrationToken->getUser();
        
        $user->setIsValidated(true);
        $userRepository->save($user, true);
        $tokenRepository->remove($registrationToken, true);
        //dd($registrationToken);

        $this->addFlash('success', 'Your account is now activated, you can <a href="'.$this->generateUrl('sign-in').'">sign-in!</a>');
        return $this->redirectToRoute('home');
    }

    #[Route(path: '/user/resendRegistrationToken/', name: 'resend_registration_token')]
    public function resendRegistrationToken(Request $request, TokenRepository $tokenRepository, UserRepository $userRepository): Response
    {
        if ($this->getUser()) {
            $this->addFlash('error', 'You are already logged '.$this->getUser()->getUsername().'!');
            return $this->redirectToRoute('home');
        }

        $resendRegistrationTokenForm = $this->createForm(ResendRegistrationTokenType::class);
        $resendRegistrationTokenForm->handleRequest($request);
        if ($resendRegistrationTokenForm->isSubmitted() && $resendRegistrationTokenForm->isValid()) {
            $user = $userRepository->findOneByEmail($resendRegistrationTokenForm->getData());
            if($user === null) {
                $this->addFlash('error', 'This email adress is not registered, please <a href="'.$this->generateUrl('sign-up').'">create an account!</a>');
                return $this->redirectToRoute('home');
            }
            if($user->getIsValidated()) {
                $this->addFlash('error', 'This user is already validated');
                return $this->redirectToRoute('home');
            }
            $user->setToken(TokenCreator::createToken($tokenRepository, $user, TokenCreator::REGISTRATION));
            try {
                new MyMailer(
                    new Address($user->getEmail()),
                    "Snowtrick Registration validation",
                    $this->render('mail/registrationLink.html.twig', [
                        'user' => $user,
                    ]));

                    $this->addFlash('success', 'A token had been send to your email adress, please validate your account!');
                    return $this->redirectToRoute('home');
            } catch(RfcComplianceException $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('sign-up');
            }

        }
        return $this->render('user/sign-up.twig', [
            'controller_name' => 'UserController',
            'userForm' => $resendRegistrationTokenForm->createView(),
        ]);

    }

    #[Route(path: '/user/sendPasswordResetLink/', name: 'send_password_reset_link')]
    public function sendPasswordResetLink(Request $request, TokenRepository $registrationTokenRepository, UserRepository $userRepository): Response
    {
        if ($this->getUser()) {
            $this->addFlash('error', 'You are already logged '.$this->getUser()->getUsername().'!');
            return $this->redirectToRoute('home');
        }

        $sendPasswordLinkTokenForm = $this->createForm(ResendRegistrationTokenType::class);
        $sendPasswordLinkTokenForm->handleRequest($request);
        if ($sendPasswordLinkTokenForm->isSubmitted() && $sendPasswordLinkTokenForm->isValid()) {
            $user = $userRepository->findOneBy(['email' => $sendPasswordLinkTokenForm->getData()]);
            if($user === null) {
                $this->addFlash('error', 'This email adress is not registered, please <a href="/user/sign-up">create an account!</a>');
                return $this->redirectToRoute('home');
            }
            if($user->getIsValidated() === false) {
                $this->addFlash('error', 'Your account is not validated, please check your emails!<br><br> You can also <a href="'.$this->generateUrl('resend_registration_token').'">click here</a> to send a new token');
                return $this->redirectToRoute('home');
            }
            
            $user->setToken(TokenCreator::createToken($registrationTokenRepository, $user, TokenCreator::PASSWORD));
            $userRepository->save($user);
            
            try {
                new MyMailer(
                    new Address($user->getEmail()),
                    "Snowtrick password validation",
                    $this->render('mail/resetLink.html.twig', [
                        'user' => $user,
                    ]));

                    $this->addFlash('success', 'A reset link had been sent to your email adress!');
                    return $this->redirectToRoute('home');
            } catch(RfcComplianceException $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('sign-up');
            }
        }
        

        return $this->render('user/sign-up.twig', [
            'controller_name' => 'UserController',
            'userForm' => $sendPasswordLinkTokenForm->createView(),
        ]);

    }

    #[Route(path: '/user/resetPassword/{token}', name: 'reset_password')]
    public function resetPassword(TokenRepository $tokenRepository, UserRepository $userRepository, string $token, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $passwordToken = $tokenRepository->findOneBy(['token' => $token]);

        if($passwordToken === null) {
            $this->addFlash('error', 'this token doesn\'t exist!');
            return $this->redirectToRoute('home');
        }
        if($passwordToken->getUser()->getIsValidated() === false) {
            $this->addFlash('error', 'Your account is not validated, please check your emails!<br><br> You can also <a href="'.$this->generateUrl('resend_password_token').'">click here</a> to send a new token');
            return $this->redirectToRoute('home');
        }
        if($passwordToken->getType() !== 'password') {
            $this->addFlash('error', 'this token isn\t set for resetting password!');
            return $this->redirectToRoute('home');
        }
        $user = $passwordToken->getUser();
        
        $resetPasswordForm = $this->createForm(ResetPasswordType::class, $user);
        $resetPasswordForm->handleRequest($request);

        if ($resetPasswordForm->isSubmitted() && $resetPasswordForm->isValid()) {
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            
            $userRepository->save($user, true);
            $tokenRepository->remove($passwordToken, true);
            $this->addFlash('success', 'Your password had been successfuly reseted!');
            return $this->redirectToRoute('home');
        } 
        return $this->render('user/sign-up.twig', [
            'controller_name' => 'UserController',
            'userForm' => $resetPasswordForm->createView(),
        ]);
    }

    #[Route(path: '/user/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
}
