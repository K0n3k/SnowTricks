<?php

namespace ContainerP3XHqCZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XXZakeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X_XZake' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X_XZake'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController::addTrick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController::commentarysListAjax' => ['privates', '.service_locator.FvOwFPC', 'get_ServiceLocator_FvOwFPCService', true],
            'App\\Controller\\TrickController::trick' => ['privates', '.service_locator.DXDoK5B', 'get_ServiceLocator_DXDoK5BService', true],
            'App\\Controller\\TrickController::tricksList' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController::tricksListAjax' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\UserController::sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::sign_up' => ['privates', '.service_locator.phlhmTB', 'get_ServiceLocator_PhlhmTBService', true],
            'App\\Controller\\UserController::validateAccount' => ['privates', '.service_locator.eWzQKNp', 'get_ServiceLocator_EWzQKNpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController:addTrick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController:commentarysListAjax' => ['privates', '.service_locator.FvOwFPC', 'get_ServiceLocator_FvOwFPCService', true],
            'App\\Controller\\TrickController:trick' => ['privates', '.service_locator.DXDoK5B', 'get_ServiceLocator_DXDoK5BService', true],
            'App\\Controller\\TrickController:tricksList' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController:tricksListAjax' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\UserController:sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:sign_up' => ['privates', '.service_locator.phlhmTB', 'get_ServiceLocator_PhlhmTBService', true],
            'App\\Controller\\UserController:validateAccount' => ['privates', '.service_locator.eWzQKNp', 'get_ServiceLocator_EWzQKNpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TrickController::addTrick' => '?',
            'App\\Controller\\TrickController::commentarysListAjax' => '?',
            'App\\Controller\\TrickController::trick' => '?',
            'App\\Controller\\TrickController::tricksList' => '?',
            'App\\Controller\\TrickController::tricksListAjax' => '?',
            'App\\Controller\\UserController::sign_in' => '?',
            'App\\Controller\\UserController::sign_up' => '?',
            'App\\Controller\\UserController::validateAccount' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TrickController:addTrick' => '?',
            'App\\Controller\\TrickController:commentarysListAjax' => '?',
            'App\\Controller\\TrickController:trick' => '?',
            'App\\Controller\\TrickController:tricksList' => '?',
            'App\\Controller\\TrickController:tricksListAjax' => '?',
            'App\\Controller\\UserController:sign_in' => '?',
            'App\\Controller\\UserController:sign_up' => '?',
            'App\\Controller\\UserController:validateAccount' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
