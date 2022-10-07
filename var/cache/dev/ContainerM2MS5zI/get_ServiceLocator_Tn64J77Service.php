<?php

namespace ContainerM2MS5zI;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tn64J77Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tn64J77' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tn64J77'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController::trick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController::tricksList' => ['privates', '.service_locator.Gk1Xrxx', 'get_ServiceLocator_Gk1XrxxService', true],
            'App\\Controller\\TrickController::tricksListAjax' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\UserController::sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::sign_up' => ['privates', '.service_locator.YUNSPEp', 'get_ServiceLocator_YUNSPEpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController:trick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController:tricksList' => ['privates', '.service_locator.Gk1Xrxx', 'get_ServiceLocator_Gk1XrxxService', true],
            'App\\Controller\\TrickController:tricksListAjax' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\UserController:sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:sign_up' => ['privates', '.service_locator.YUNSPEp', 'get_ServiceLocator_YUNSPEpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TrickController::trick' => '?',
            'App\\Controller\\TrickController::tricksList' => '?',
            'App\\Controller\\TrickController::tricksListAjax' => '?',
            'App\\Controller\\UserController::sign_in' => '?',
            'App\\Controller\\UserController::sign_up' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TrickController:trick' => '?',
            'App\\Controller\\TrickController:tricksList' => '?',
            'App\\Controller\\TrickController:tricksListAjax' => '?',
            'App\\Controller\\UserController:sign_in' => '?',
            'App\\Controller\\UserController:sign_up' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
