<?php

namespace ContainerWti5ufv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BmoXdmhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bmoXdmh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bmoXdmh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaryRepository' => ['privates', 'App\\Repository\\CommentaryRepository', 'getCommentaryRepositoryService', true],
            'session' => ['privates', '.errored..service_locator.bmoXdmh.Symfony\\Component\\HttpFoundation\\Session\\Session', NULL, 'Cannot autowire service ".service_locator.bmoXdmh": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists.'],
            'trick' => ['privates', '.errored..service_locator.bmoXdmh.App\\Entity\\Trick', NULL, 'Cannot autowire service ".service_locator.bmoXdmh": it references class "App\\Entity\\Trick" but no such service exists.'],
        ], [
            'commentaryRepository' => 'App\\Repository\\CommentaryRepository',
            'session' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'trick' => 'App\\Entity\\Trick',
        ]);
    }
}
