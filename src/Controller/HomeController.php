<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use App\Repository\TrickRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    private $tricksLimit = 15;

    #[Route('/', name: 'home')]
    public function index(UserRepository $userRepository, TrickRepository $trickRepository): Response
    {
/*        $user = $userRepository->findOneBy(['id' => $this->getUser()]);
        if($user !== null && $user->getIsValidated() === false) {
            $this->addFlash('error', 'Your account is not validated, please check your emails!<br><br> You can also <a href="'.$this->generateUrl('resend_registration_token').'">click here</a> to send a new token');
            return $this->redirectToRoute('logout'); 
         
        }
  */          
            return $this->render('trick/tricks.html.twig', [
                    'controller_name' => 'TrickController',
                    'tricks' => $trickRepository->findBy([], null, $this->tricksLimit, null),
                    'maxTricks' => $trickRepository->count([]),
                    'tricksLimit' => $this->tricksLimit,
                ]);
            
    }
    #[Route('/loadmore_tricks', name: 'loadmore_tricks', methods: ['POST'])]
    public function loadMoreTricks(TrickRepository $trickRepository, Request $request): JsonResponse
    {
        
            $offset = $request->request->get('offset');
            if($offset >= $trickRepository->count([])) {
                return new JsonResponse();
            }
            $tricks = $trickRepository->findBy([], null, $this->tricksLimit, $offset);
            $jsonContent = [];
            foreach($tricks as $trick) {
                array_push($jsonContent, [
                    'id' => $trick->getId(),
                    'groupId' => $trick->getGroupId()->getId(),
                    'name' => $trick->getName(),
                    'description' => $trick->getDescription(),
                    'userId' => $trick->GetUserId(),
                    'publishedDate' => $trick->getPublishedDate(),
                    'lastUpdated' => $trick->getLastUpdated(),
                ]);
            }
            return new JsonResponse(json_encode($jsonContent));
        
    }
}
