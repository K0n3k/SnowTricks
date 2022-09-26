<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/sign-in', name: 'sign-in')]
    public function index(): Response
    {
        return $this->render('user/sign-in.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    #[Route('/user/sign-up', name: 'sign-up')]
    public function sign_up(): Response
    {
        $user = new User();
        $userForm = $this->createForm(UserType::class, $user);
        return $this->render('user/sign-up.twig', [
            'controller_name' => 'UserController',
            'userForm' => $userForm->createView(),
        ]);
    }
}
