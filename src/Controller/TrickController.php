<?php

namespace App\Controller;

use App\Repository\CommentaryRepository;
use App\Repository\TrickRepository;
use App\Entity\Trick;
use App\Entity\Commentary;
use App\Entity\Media;
use App\Form\CommentaryType;
use App\Form\TrickType;
use App\Repository\MediaRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;
class TrickController extends AbstractController
{
    private int $commentaryLimit = 5;

    #[Route('/trick/show/{trickId}', name: 'show_trick')]
    public function showTrick(TrickRepository $trickRepository, CommentaryRepository $commentaryRepository, Request $request, int $trickId): Response
    {

        $commentary = new Commentary();
        $trick = $trickRepository->findOneBy(['id' => $trickId]);
        $commentaryForm = $this->createForm(CommentaryType::class, $commentary);
        
        $commentaryForm->handleRequest($request);
        if ($commentaryForm->isSubmitted() && $commentaryForm->isValid()) {
            
            $commentary->setUserId($this->getUser());
            $commentary->setTrick($trick);
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
            $commentaries = $commentaryRepository->findBy(['trickId' => $trickId], null, $this->commentaryLimit, $offset);
            $jsonContent = [];
            foreach($commentaries as $commentary) {
                array_push($jsonContent, [
                    'id' => $commentary->getId(),
                    'trickId' => $commentary->getTrick()->getId(),
                    'userId' => ['username' => $commentary->getUser()->getusername()],
                    'commentary' => $commentary->getCommentary(),
                    'publishedDate' => $commentary->getPublishedDate(),
                ]);
            }
            return new JsonResponse(json_encode($jsonContent));
        
    }

    #[Route('/trick/add/', name: 'add_trick')]
    public function addTrick(Request $request, TrickRepository $trickRepository, MediaRepository $mediaRepository): Response
    {
        if (!$this->getUser() ) {

            return $this->redirectToRoute('home');
       }
        $trick = new Trick();
        
        $trickForm = $this->createForm(TrickType::class, $trick);
        $trickForm->handleRequest($request);
        
        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            $images = $trickForm->get('images')->getData();
            foreach($images as $imageToUpload) {
                $filename = Uuid::v4().'.'. $imageToUpload->guessExtension();
                $imageToUpload->move(
                    $this->getParameter('images_directory'),
                    $filename,
                );
                $image = new Media();
                $image->setFilename($filename);
                $image->setType('image');
                $trick->addMedia($image);
            }
            $trick->setUserId($this->getUser());
            $trick->setPublishedDate(new DateTime());
            $trickRepository->save($trick, true);
            $this->addFlash('success', 'Your new trick had been added!');
            return $this->redirectToRoute('show_trick',['trickId' => $trick->getId()]);
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trickForm' => $trickForm->createView(),
        ]);
            
    }
    #[Route('/trick/delete/{trickId}', name: 'delete_trick')]
    public function deleteTrick(Request $request, TrickRepository $trickRepository, int $trickId): Response
    {
        $trick = $trickRepository->find($trickId);
        $trickRepository->remove($trick, true);
        $this->addFlash('success', '<p><strong>'. $trick->getName() .'</strong> had been removed!</p>');
        return $this->redirectToRoute('show_tricks');
    }

    #[Route('/trick/deleteImage/{id}', name: 'delete_image')]
    public function deleteImage(Request $request, Media $image, MediaRepository $mediaRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])) {
            $filename = $image->getFilename();
            unlink($this->getParameter('images_directory').'/'.$filename);
            $mediaRepository->remove($image, true);
            return new JsonResponse(['success' => 1]);
        }
        return new JsonResponse(['error' => 'Invalid token']);
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
            $images = $trickForm->get('images')->getData();
            foreach($images as $imageToUpload) {
                $filename = Uuid::v4().'.'. $imageToUpload->guessExtension();
                $imageToUpload->move(
                    $this->getParameter('images_directory'),
                    $filename,
                );
                $image = new Media();
                $image->setFilename($filename);
                $image->setType('image');
                $trick->addMedia($image);
            }
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
