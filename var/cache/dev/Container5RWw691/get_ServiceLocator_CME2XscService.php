<?php

namespace Container5RWw691;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CME2XscService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cME2Xsc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cME2Xsc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'media' => ['privates', '.errored..service_locator.cME2Xsc.App\\Entity\\Media', NULL, 'Cannot autowire service ".service_locator.cME2Xsc": it references class "App\\Entity\\Media" but no such service exists.'],
            'mediaRepository' => ['privates', 'App\\Repository\\MediaRepository', 'getMediaRepositoryService', true],
        ], [
            'media' => 'App\\Entity\\Media',
            'mediaRepository' => 'App\\Repository\\MediaRepository',
        ]);
    }
}
