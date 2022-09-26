<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function sign_up(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $user = new User();

        $userForm = $this->createForm(UserType::class, $user);

        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $user->setIsValidated(false);
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        } else {
    return $this->render('user/sign-up.twig', [
        'controller_name' => 'UserController',
        'userForm' => $userForm->createView(),
    ]);
}
    }
}
