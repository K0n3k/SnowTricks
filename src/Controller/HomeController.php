<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TrickRepository;
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
            $this->addFlash('error', 'Your account is not validated!');
         return $this->redirectToRoute('logout'); 
         
        }
        return $this->redirectToRoute('app_tricks');
    }
}
