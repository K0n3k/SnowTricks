<?php

namespace ContainerKuxoyiJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CVs7gBFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CVs7gBF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CVs7gBF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trickRepository' => ['privates', 'App\\Repository\\TrickRepository', 'getTrickRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'trickRepository' => 'App\\Repository\\TrickRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}