<?php

namespace App\Controller;

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

    #[Route('/figure/tricks', name: 'app_trick')]
    public function tricksList(TrickRepository $trickRepository, Request $request): Response
    {
        if($request->isXmlHttpRequest()) {
            $offset = $request->request->get('offset');
            if($offset >= $trickRepository->count([])) {
                return new JsonResponse();
            }
            $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);
            return new JsonResponse($serializer->serialize($trickRepository->findBy([], null, $this->limit, $offset), 'json'));
        } else {
            return $this->render('trick/index.html.twig', [
                'controller_name' => 'TrickController',
                'tricks' => $trickRepository->findBy([], null, $this->limit, null),
                'maxTricks' => $trickRepository->count([]),
            ]);
        }
    }
}
