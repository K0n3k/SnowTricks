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
use App\Service\MediaTreatment;
use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;

class TrickController extends AbstractController
{
    private const COMMENTARY_LIMIT = 10;

    #[Route('/trick/show/{slug}', name: 'show_trick')]
    public function showTrick(CommentaryRepository $commentaryRepository, TrickRepository $trickRepository, Request $request, string $slug, Session $session): Response
    {
        $trick = $trickRepository->findOneBySlug($slug);
        $session->set('commentary_offset', self::COMMENTARY_LIMIT);

        $commentary = new Commentary();
        $commentaryForm = $this->createForm(CommentaryType::class, $commentary);

        $commentaryForm->handleRequest($request);
        if ($commentaryForm->isSubmitted() && $commentaryForm->isValid()) {

            $commentary->setUser($this->getUser());
            $commentary->setPublishedDate(new DateTime());
            $trick->addCommentary($commentary);
            $trickRepository->save($trick, true);
            return $this->redirectToRoute('show_trick', ['slug' => $trick->getSlug()]);
        }
        $showLoadMoreCommentaryButton = true;
        if ($session->get('commentary_offset') >= $trick->getCommentaries()->count()) {
            $showLoadMoreCommentaryButton = false;
        }
        return $this->render('trick/trick.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'commentarys' => $commentaryRepository->findBy(['trick' => $trick], ['publishedDate' => 'DESC'], self::COMMENTARY_LIMIT, null),
            'showLoadMore' => $showLoadMoreCommentaryButton,
            'commentaryForm' => $commentaryForm->createView(),
        ]);
    }

    #[Route('/trick/loadmore_commentarys/{id}', name: 'loadmore_commentarys', methods: ['POST'])]
    public function loadMoreCommentarys(CommentaryRepository $commentaryRepository, Trick $trick, Session $session): JsonResponse
    {
        $offset = $session->get('commentary_offset');
        $session->set('commentary_offset', $session->get('commentary_offset') + self::COMMENTARY_LIMIT);
        $jsonContent = [];
        $showLoadMoreCommentaryButton = true;
        if ($session->get('commentary_offset') >= $trick->getCommentaries()->count()) {
            $showLoadMoreCommentaryButton = false;
        }
        dump($session->get('commentary_offset'), $trick->getCommentaries()->count(), $showLoadMoreCommentaryButton);

        array_push($jsonContent, ['showLoadMore' => $showLoadMoreCommentaryButton]);
        $commentaries = $commentaryRepository->findBy(['trick' => $trick], null, self::COMMENTARY_LIMIT, $offset);

        foreach ($commentaries as $commentary) {
            array_push($jsonContent, [
                'id' => $commentary->getId(),
                'trickId' => $commentary->getTrick()->getId(),
                'user' => ['username' => $commentary->getUser()->getusername(), 'avatar' => $commentary->getUser()->getAvatar()],
                'commentary' => $commentary->getCommentary(),
                'publishedDate' => $commentary->getPublishedDate(),
            ]);
        }
        dump(json_encode($jsonContent));
        return new JsonResponse(json_encode($jsonContent));
    }

    #[Route('/trick/add/', name: 'add_trick')]
    public function addTrick(Request $request, TrickRepository $trickRepository): Response
    {
        if (!$this->getUser()) {

            return $this->redirectToRoute('home');
        }
        $trick = new Trick();
        
        $trickForm = $this->createForm(TrickType::class, $trick);
        
        $trickForm->handleRequest($request);

        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            $images = $trickForm->get('images')->getData();
            try {
                foreach ($images as $image) {
                    if ($image !== null) {
                        $imageTreatment = new MediaTreatment();
                        $trick->addMedia($imageTreatment->fileTreatment($image, MediaTreatment::IMAGE, $this->getParameter('images_directory')));
                    }
                }
                
                $videos = $trickForm->get('videos')->getData();
                foreach ($videos as $video) {
                    if ($video !== null) {
                        $videoTreatment = new MediaTreatment();
                        $trick->addMedia($videoTreatment->fileTreatment($video, MediaTreatment::VIDEO));
                    }
                }
                $slugger = new AsciiSlugger();
                $trick
                    ->setSlug($slugger->slug($trick->getName()))
                    ->setUser($this->getUser())
                    ->setPublishedDate(new DateTime())
                    ->setMainMedia($trick->getMedias()->first());
    
                $trickRepository->save($trick, true);
            } catch (Exception $e) {
                $this->addFlash('error', $e->getMessage());
                $this->redirectToRoute('add_trick', ['id' => $trick->getId()]);
            }

            $this->addFlash('success', 'Your new trick had been added!');
            return $this->redirectToRoute('show_trick', ['slug' => $trick->getSlug()]);
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
        $this->addFlash('success', '<p><strong>' . $trick->getName() . '</strong> had been removed!</p>');
        return $this->redirectToRoute('home');
    }

    #[Route('/trick/deleteMedia/{id}', name: 'delete_media', methods: ['DELETE'])]
    public function deleteImage(Request $request, Media $media, MediaRepository $mediaRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if ($this->isCsrfTokenValid('delete' . $media->getId(), $data['_token'])) {
            $filename = $media->getFilename();
            if ($media->getType() === 'image') {
                unlink($this->getParameter('images_directory') . '/' . $filename);
            }
            $mediaRepository->remove($media, true);
            return new JsonResponse(['success' => 1]);
        }
        return new JsonResponse(['error' => 'Invalid token']);
    }

    #[Route('/trick/modify/{slug}', name: 'modify_trick')]
    public function modifyTrick(Request $request, TrickRepository $trickRepository, string $slug): Response
    {
        if (!$this->getUser()) {

            return $this->redirectToRoute('home');
        }
        $trick = $trickRepository->findOneBySlug($slug);
        $trickForm = $this->createForm(TrickType::class, $trick);
        //dd($trick->getMainMedia());
        $trickForm->add('MainMedia', ChoiceType::class, [
            'expanded' => true,
            'multiple' => false,
            'choices' => $trick->getMedias(),
        ]);

        $trickForm->handleRequest($request);

        if ($trickForm->isSubmitted() && $trickForm->isValid()) {
            try {

                $imageTreatment = new MediaTreatment();
                foreach ($trickForm->get('images')->getData() as $image) {
                    if ($image !== null) {
                        $trick->addMedia(
                            $imageTreatment->fileTreatment($image, MediaTreatment::IMAGE),
                            $this->getParameter('images_directory')
                        );
                    }
                }

                $videoTreatment = new MediaTreatment();
                foreach ($trickForm->get('videos')->getData() as $video) {
                    if ($video !== null) {
                        $trick->addMedia($videoTreatment->fileTreatment($video, MediaTreatment::VIDEO));
                    }
                }

                $slugger = new AsciiSlugger();
                $trick
                    ->setLastUpdated(new DateTime())
                    ->setSlug($slugger->slug($trick->getName()));
                $trickRepository->save($trick, true);
            } catch (Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('modify_trick', ['id' => $trick->getId()]);
            }
            $this->addFlash('success', 'Your trick had been modified!');
            return $this->redirectToRoute('home');
        }

        return $this->render('trick/addTrick.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'trickForm' => $trickForm->createView(),
        ]);
    }
}
