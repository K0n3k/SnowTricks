<?php

namespace App\Security;

use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
class UsersAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'sign-in';

    public function __construct(private UrlGeneratorInterface $urlGenerator, private UserRepository $userRepository, private RouterInterface $router)
    {
    }

    private function verifyIsValidated(Request $request, User $user) {
        
        if($user !== null && !$user->getIsValidated()) {
            $request->getSession()->getFlashBag()->add('error', 'Your account is not validated, please check your emails!<br><br> You can also <a href="{{ path("home") }}">click here</a> to send a new token');
            return $this->router->redirectToRoute('logout');
        }
    }

    public function authenticate(Request $request): Passport
    {

        $username = $request->request->get('username');

        $request->getSession()->set(Security::LAST_USERNAME, $username);
        
        return new Passport(
            new UserBadge($username),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                ]
            );
        }
        
        public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
        {
            if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
                return new RedirectResponse($targetPath);
            }
        //dd($this->verifyIsValidated($request, $this->userRepository->findOneBy(['email' => $username])));
        $user = $this->userRepository->findOneBy(['email' => $request->request->get('username')]);
        if($user !== null && !$user->getIsValidated()) {
            $request->getSession()->getFlashBag()->add('error', 'Your account is not validated, please check your emails!<br><br> You can also <a href="'. $this->urlGenerator->generate('resend_registration_token') .'">click here</a> to send a new token');
            
            return new RedirectResponse($this->urlGenerator->generate('logout'));
        }
            // For example:
            $request->getSession()->getFlashBag()->add('success', 'Welcome <strong>'.$user->getusername().'</strong>, you are logged!');
         return new RedirectResponse($this->urlGenerator->generate('home'));
        //throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
