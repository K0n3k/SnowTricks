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

    #[Route('/tricks', name: 'show_tricks')]
    public function tricksList(TrickRepository $trickRepository): Response
    {
        
        return $this->render('trick/tricks.html.twig', [
                'controller_name' => 'TrickController',
                'tricks' => $trickRepository->findBy([], null, $this->tricksLimit, null),
                'maxTricks' => $trickRepository->count([]),
                'tricksLimit' => $this->tricksLimit,
            ]);
        
    }

    #[Route('/tricks/loadmore_tricks', name: 'loadmore_tricks', methods: ['POST'])]
    public function loadMoreTricks(TrickRepository $trickRepository, Request $request): JsonResponse
    {
            $offset = $request->request->get('offset');
            if($offset >= $trickRepository->count([])) {
                return new JsonResponse();
            }
            $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);
            return new JsonResponse($serializer->serialize($trickRepository->findBy([], null, $this->tricksLimit, $offset), 'json'));
        
    }

    #[Route('/trick/show/{trickId}', name: 'show_trick')]
    public function trick(TrickRepository $trickRepository, CommentaryRepository $commentaryRepository, Request $request, int $trickId): Response
    {

        $commentary = new Commentary();
        $trick = $trickRepository->findOneBy(['id' => $trickId]);
        $commentaryForm = $this->createForm(CommentaryType::class, $commentary);
        
        $commentaryForm->handleRequest($request);
        if ($commentaryForm->isSubmitted() && $commentaryForm->isValid()) {
            
            $commentary->setUserId($this->getUser());
            $commentary->setTrickId($trick);
            $commentary->setPublishedDate(new DateTime());
            $commentaryRepository->save($commentary, true);

            return $this->redirectToRoute('show_trick',['trickId' => $trickId]);
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

    #[Route('/trick/loadmore_commentarys/{trickId}', name: 'loadmore_commentarys', methods: ['POST'])]
    public function loadMoreCommentarys(CommentaryRepository $commentaryRepository, Request $request, int $trickId): JsonResponse
    {
        
            $offset = $request->request->get('offset');
            if($offset >= $commentaryRepository->count(['trickId' => $trickId])) {
                return new JsonResponse();
            }
            $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);
            return new JsonResponse($serializer->serialize($commentaryRepository->findBy(['trickId' => $trickId], null, $this->commentaryLimit, $offset), 'json'));
        
    }

    #[Route('/trick/add/', name: 'add_trick')]
    public function addTrick(Request $request, TrickRepository $trickRepository): Response
    {
        if (!$this->getUser() ) {

            return $this->redirectToRoute('home');
       }
        $trick = new Trick();
        
        $trickForm = $this->createForm(TrickType::class, $trick);
        $trickForm->handleRequest($request);
        
        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            $trick->setUserId($this->getUser());
            $trick->setPublishedDate(new DateTime());
            $trickRepository->save($trick, true);
            $this->addFlash('success', 'Your new trick had been added!');
            return $this->redirectToRoute('app_trick',['trickId' => $trick->getId()]);
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trickForm' => $trickForm->createView(),
        ]);
            
    }
    #[Route('/trick/delete/{trickId}', name: 'delete_trick')]
    public function deleteTrick(Request $request, TrickRepository $trickRepository, int $trickId): Response
    {
        return $this->redirectToRoute('show_tricks');
    }


    #[Route('/trick/modify/{trickId}', name: 'modify_trick')]
    public function modifyTrick(Request $request, TrickRepository $trickRepository, int $trickId): Response
    {
        if (!$this->getUser() ) {

            return $this->redirectToRoute('home');
       }
        $trick = $trickRepository->findOneBy(['id' => $trickId]);
        
        $trickForm = $this->createForm(TrickType::class, $trick);
        $trickForm->handleRequest($request);
        
        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            $trick->setLastUpdated(new DateTime());
            $trickRepository->save($trick, true);
            $this->addFlash('success', 'Your trick had been modified!');
            return $this->redirectToRoute('show_trick',['trickId' => $trick->getId()]);
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'trickForm' => $trickForm->createView(),
        ]);
            
    }
}
