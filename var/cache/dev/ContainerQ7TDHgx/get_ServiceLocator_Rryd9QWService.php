<?php

namespace ContainerQ7TDHgx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rryd9QWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Rryd9QW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Rryd9QW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trickRepository' => ['privates', 'App\\Repository\\TrickRepository', 'getTrickRepositoryService', true],
        ], [
            'trickRepository' => 'App\\Repository\\TrickRepository',
        ]);
    }
}
