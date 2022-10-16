<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->findOneBy(['id' => $this->getUser()]);
        if($user !== null && $user->getIsValidated() === false) {
            $this->addFlash('error', 'Your account is not validated, please check your emails!<br><br> You can also <a href="'.$this->generateUrl('resend_registration_token').'">click here</a> to send a new token');
            return $this->redirectToRoute('logout'); 
         
        }
        return $this->redirectToRoute('show_tricks');
    }
}
