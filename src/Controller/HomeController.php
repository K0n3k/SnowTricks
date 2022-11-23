<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TrickRepository;
use App\Service\MediaTreatment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    private const TRICKS_LIMIT = 15;

    #[Route('/', name: 'home')]
    public function index(Session $session, TrickRepository $trickRepository): Response
    {    
        $session->set('tricks_offset', self::TRICKS_LIMIT);
        $showLoadMoretricksButton = true;
        if($session->get('tricks_offset') >= $trickRepository->count([])) {
            $showLoadMoretricksButton = false;
        }
            return $this->render('trick/tricks.html.twig', [
                    'controller_name' => 'TrickController',
                    'tricks' => $trickRepository->findBy([], null, self::TRICKS_LIMIT, null),
                    'showLoadMore' => $showLoadMoretricksButton,
                    'showDownArrow' => false,
                ]);
            
    }
    #[Route('/loadmore_tricks', name: 'loadmore_tricks', methods: ['POST'])]
    public function loadMoreTricks(TrickRepository $trickRepository, Session $session): JsonResponse
    {
        
            $offset = $session->get('tricks_offset');
            $session->set('tricks_offset', $offset + self::TRICKS_LIMIT);
            $showLoadMoreTricksButton = true;
            $tricks = $trickRepository->findBy([], null, self::TRICKS_LIMIT, $offset);
            dump($session->get('tricks_offset'), $trickRepository->count([]));
            if($session->get('tricks_offset') >= $trickRepository->count([])) {
                $showLoadMoreTricksButton = false;
            }
            $jsonContent = [];
            array_push($jsonContent, ['showLoadMore' => $showLoadMoreTricksButton]);
            array_push($jsonContent, ['showDownArrow' => true]);
            foreach($tricks as $trick) {
                $filename = $trick->getMainMedia()->getFilename();
                if($trick->getMainMedia()->getType() === MediaTreatment::VIDEO) {
                    
                    $filename = $trick->getMainMedia()->getFilename();
                }
                array_push($jsonContent, [
                    'id' => $trick->getId(),
                    'name' => $trick->getName(),
                    'slug' => $trick->getSlug(),
                    'mainMedia' => $filename,
                    'mainMediaType' => $trick->getMainMedia()->getType(),
                ]);
            }
            return new JsonResponse(json_encode($jsonContent));
        
    }
}
