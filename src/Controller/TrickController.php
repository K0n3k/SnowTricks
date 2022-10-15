<?php

namespace App\Controller;

use App\Repository\CommentaryRepository;
use App\Repository\TrickRepository;
use App\Entity\Trick;
use App\Entity\Commentary;
use App\Form\CommentaryType;
use App\Form\TrickType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
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
    private int $tricksLimit = 15;
    private int $commentaryLimit = 5;

    #[Route('/figure/tricks', name: 'app_tricks')]
    public function tricksList(TrickRepository $trickRepository): Response
    {
        
        return $this->render('trick/index.html.twig', [
                'controller_name' => 'TrickController',
                'tricks' => $trickRepository->findBy([], null, $this->tricksLimit, null),
                'maxTricks' => $trickRepository->count([]),
                'tricksLimit' => $this->tricksLimit,
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
            return new JsonResponse($serializer->serialize($trickRepository->findBy([], null, $this->tricksLimit, $offset), 'json'));
        
    }

    #[Route('/figure/tricks/{trickId}', name: 'app_trick')]
    public function trick(TrickRepository $trickRepository, CommentaryRepository $commentaryRepository, EntityManagerInterface $entityManager, Request $request, int $trickId): Response
    {
        $commentary = new Commentary();
        $trick = $trickRepository->findOneBy(['id' => $trickId]);
        $commentaryForm = $this->createForm(CommentaryType::class, $commentary);
        
        $commentaryForm->handleRequest($request);
        if ($commentaryForm->isSubmitted() && $commentaryForm->isValid()) {
            
            $commentary->setUserId($this->getUser());
            $commentary->setTrickId($trick);
            $commentary->setPublishedDate(new DateTime());
            $commentaryRepository->save($commentary);
            //$entityManager->flush();
            return $this->redirectToRoute('app_trick',['trickId' => $trickId]);
        }
        return $this->render('trick/trick.html.twig', [
                'controller_name' => 'TrickController',
                'trick' => $trick,
                'commentarys' => $commentaryRepository->findBy(['trickId' => $trickId], null, $this->commentaryLimit, null),
                'maxCommentarys' => $commentaryRepository->count(['trickId' => $trickId]),
                'commentaryForm' => $commentaryForm->createView(),
                'commentaryLimit' => $this->commentaryLimit,
            ]);
        
    }

    #[Route('/figure/trick/ajax/{trickId}', name: 'app_commentarysAjax', methods: ['POST'])]
    public function commentarysListAjax(CommentaryRepository $commentaryRepository, Request $request, int $trickId): JsonResponse
    {
        
            $offset = $request->request->get('offset');
            if($offset >= $commentaryRepository->count(['trickId' => $trickId])) {
                return new JsonResponse();
            }
            $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);
            return new JsonResponse($serializer->serialize($commentaryRepository->findBy(['trickId' => $trickId], null, $this->commentaryLimit, $offset), 'json'));
        
    }

    #[Route('/figure/trick/add/', name: 'app_addTrick')]
    public function addTrick(Request $request, TrickRepository $trickRepository): Response
    {
        $trick = new Trick();
        
        $trickForm = $this->createForm(TrickType::class, $trick);
        $trickForm->handleRequest($request);
        
        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            $trick->setUserId($this->getUser());
            $trick->setPublishedDate(new DateTime());
            $trickRepository->save($trick, true);
            return $this->redirectToRoute('app_tricks');
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trickForm' => $trickForm->createView(),
        ]);
            
    }
}
