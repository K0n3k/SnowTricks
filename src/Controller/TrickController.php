<?php

namespace App\Controller;

use App\Repository\CommentaryRepository;
use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class TrickController extends AbstractController
{
    private int $limit = 15;

    #[Route('/figure/tricks', name: 'app_tricks')]
    public function tricksList(TrickRepository $trickRepository): Response
    {
        
        return $this->render('trick/index.html.twig', [
                'controller_name' => 'TrickController',
                'tricks' => $trickRepository->findBy([], null, $this->limit, null),
                'maxTricks' => $trickRepository->count([]),
                'limit' => $this->limit,
            ]);
        
    }

    #[Route('/figure/tricks/ajax', name: 'app_tricksAjax', methods: ['POST'])]
    public function tricksListAjax(TrickRepository $trickRepository, Request $request): JsonResponse
    {
            $offset = $request->request->get('offset');
            if($offset >= $trickRepository->count([])) {
                return new JsonResponse();
            }
            $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);
            return new JsonResponse($serializer->serialize($trickRepository->findBy([], null, $this->limit, $offset), 'json'));
        
    }

    #[Route('/figure/tricks/{id}', name: 'app_trick')]
    public function trick(TrickRepository $trickRepository, CommentaryRepository $commentaryRepository, int $id): Response
    {
        
        return $this->render('trick/trick.html.twig', [
                'controller_name' => 'TrickController',
                'trick' => $trickRepository->findOneBy(['id' => $id]),
                'commentarys' => $commentaryRepository->findAll(),
                'maxTricks' => $trickRepository->count([]),
                'limit' => $this->limit,
            ]);
        
    }
}
