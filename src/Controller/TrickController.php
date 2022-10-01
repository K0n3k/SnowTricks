<?php

namespace App\Controller;

use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrickController extends AbstractController
{
    #[Route('/figure/tricks', name: 'app_trick')]
    public function tricksList(TrickRepository $trickRepository): Response
    {
        
        return $this->render('trick/index.html.twig', [
            'controller_name' => 'TrickController',
            'tricks' => $trickRepository->findAll(),
        ]);
    }
}
