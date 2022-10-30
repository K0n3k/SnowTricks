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
use App\Service\VideoUrlParser;
use DateTime;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;
class TrickController extends AbstractController
{
    private int $commentaryLimit = 5;

    #[Route('/trick/show/{id}', name: 'show_trick')]
    public function showTrick(TrickRepository $trickRepository, Request $request, Trick $trick): Response
    {

        $commentary = new Commentary();
        $commentaryForm = $this->createForm(CommentaryType::class, $commentary);
        
        $commentaryForm->handleRequest($request);
        if ($commentaryForm->isSubmitted() && $commentaryForm->isValid()) {
            
            $commentary->setUser($this->getUser());
            $commentary->setPublishedDate(new DateTime());
            $trick->addCommentary($commentary);
            $trickRepository->save($trick, true);
            return $this->redirectToRoute('show_trick',['id' => $trick->getId()]);
        }
        return $this->render('trick/trick.html.twig', [
                'controller_name' => 'TrickController',
                'trick' => $trick,
                'commentarys' => $trick->getCommentaries(),
                'maxCommentarys' => $trick->getCommentaries()->count(),
                'commentaryForm' => $commentaryForm->createView(),
                'commentaryLimit' => $this->commentaryLimit,
            ]);
        
    }

    #[Route('/trick/loadmore_commentarys/{id}', name: 'loadmore_commentarys', methods: ['POST'])]
    public function loadMoreCommentarys(CommentaryRepository $commentaryRepository, Request $request, Trick $trick, SessionInterface $session): JsonResponse
    {
        
        $offset = $request->request->get('offset');
        if($offset >= $trick->getCommentaries()->count()) {
            return new JsonResponse();
        }
        $commentaries = $commentaryRepository->findBy(['trick' => $trick], null, $this->commentaryLimit, $offset);
            $jsonContent = [];
            foreach($commentaries as $commentary) {
                array_push($jsonContent, [
                    'id' => $commentary->getId(),
                    'trickId' => $commentary->getTrick()->getId(),
                    'user' => ['username' => $commentary->getUser()->getusername(), 'avatar' => $commentary->getUser()->getAvatar()],
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
        //$trickRepository->save($trick, true);
        
        $trickForm = $this->createForm(TrickType::class, $trick);

        $trickForm->handleRequest($request);
        
        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            $images = $trickForm->get('images')->getData();
            foreach($images as $key => $imageToUpload) {
                
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

            $videos = $trickForm->get('videos')->getData();
            foreach($videos as $video) {
                if($video !== null) {
                    $videoToAdd = new Media();
                    //dd($video);
                    $videoToAdd->setFilename($video);
                    $videoToAdd->setType('video');
                    $trick->addMedia($videoToAdd);
                }
            }
            
            $trick->setUser($this->getUser());
            $trick->setPublishedDate(new DateTime());
            $trick->setMainMedia($trick->getMedias()->first());
            $trickRepository->save($trick, true);
            
            $this->addFlash('success', 'Your new trick had been added!');
            return $this->redirectToRoute('show_trick',['id' => $trick->getId()]);
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trickForm' => $trickForm->createView(),
        ]);
            
    }
    #[Route('/trick/delete/{id}', name: 'delete_trick')]
    public function deleteTrick(TrickRepository $trickRepository, CommentaryRepository $commentaryRepository, MediaRepository $mediaRepository, Trick $trick): Response
    {
        $trick->setMainMedia(null);
        $trickRepository->save($trick, true);
        $trick->purgeTrick($commentaryRepository, $mediaRepository);
        $trickRepository->remove($trick, true);
        $this->addFlash('success', '<p><strong>'. $trick->getName() .'</strong> had been removed!</p>');
        return $this->redirectToRoute('home');
    }

    #[Route('/trick/deleteMedia/{id}', name: 'delete_media', methods: ['DELETE'])]
    public function deleteImage(Request $request, Media $media, MediaRepository $mediaRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if($this->isCsrfTokenValid('delete'.$media->getId(), $data['_token'])) {
            $filename = $media->getFilename();
            if($media->getType() === 'image') {
                unlink($this->getParameter('images_directory').'/'.$filename);
            }
            $mediaRepository->remove($media, true);
            return new JsonResponse(['success' => 1]);
        }
        return new JsonResponse(['error' => 'Invalid token']);
    }

    #[Route('/trick/modify/{id}', name: 'modify_trick')]
    public function modifyTrick(Request $request, TrickRepository $trickRepository, Trick $trick): Response
    {
        if (!$this->getUser() ) {

            return $this->redirectToRoute('home');
       }

        $trickForm = $this->createForm(TrickType::class, $trick);
        //dd($trick->getMainMedia());
        $trickForm->add('MainMedia', ChoiceType::class, [
            'expanded' => true,
            'multiple' => false,
            'choices' => $trick->getMedias(),
        ]);

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
                $image
                    ->setFilename($filename)
                    ->setType('image');
                $trick->addMedia($image);
            }
            
            $videos = $trickForm->get('videos')->getData();
            foreach($videos as $video) {
                if($video !== null) {
                    $videoToAdd = new Media();
                    //dd($video);
                    $videoParser = new VideoUrlParser();
                    $videoToAdd
                        ->setFilename($videoParser->parse($video))
                        ->setType('video');
                    $trick->addMedia($videoToAdd);
                }
            }
            $trick->setLastUpdated(new DateTime());
            $trickRepository->save($trick, true);
            $this->addFlash('success', 'Your trick had been modified!');
            return $this->redirectToRoute('show_trick',['id' => $trick->getId()]);
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'trickForm' => $trickForm->createView(),
        ]);
        

    }

    #[Route('/trick/test', name: 'test')]
    public function test(Request $request): Response
    {
        return $this->render('trick/test.html.twig', [
            'controller_name' => 'TrickController'
        ]);
    }
}
