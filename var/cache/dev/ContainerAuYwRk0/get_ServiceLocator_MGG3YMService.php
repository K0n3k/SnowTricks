<?php

namespace ContainerAuYwRk0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MGG3YMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MGG3YM_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MGG3YM_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.CVs7gBF', 'get_ServiceLocator_CVs7gBFService', true],
            'App\\Controller\\HomeController::loadMoreTricks' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController::addTrick' => ['privates', '.service_locator.PSe2ZZ2', 'get_ServiceLocator_PSe2ZZ2Service', true],
            'App\\Controller\\TrickController::deleteImage' => ['privates', '.service_locator.cME2Xsc', 'get_ServiceLocator_CME2XscService', true],
            'App\\Controller\\TrickController::deleteTrick' => ['privates', '.service_locator.paAAmna', 'get_ServiceLocator_PaAAmnaService', true],
            'App\\Controller\\TrickController::loadMoreCommentarys' => ['privates', '.service_locator.W2G6oTa', 'get_ServiceLocator_W2G6oTaService', true],
            'App\\Controller\\TrickController::modifyTrick' => ['privates', '.service_locator.e9zJ0mx', 'get_ServiceLocator_E9zJ0mxService', true],
            'App\\Controller\\TrickController::showTrick' => ['privates', '.service_locator.e9zJ0mx', 'get_ServiceLocator_E9zJ0mxService', true],
            'App\\Controller\\UserController::resendRegistrationToken' => ['privates', '.service_locator.eWzQKNp', 'get_ServiceLocator_EWzQKNpService', true],
            'App\\Controller\\UserController::resetPassword' => ['privates', '.service_locator.WHB6p3q', 'get_ServiceLocator_WHB6p3qService', true],
            'App\\Controller\\UserController::sendPasswordResetLink' => ['privates', '.service_locator.eWzQKNp', 'get_ServiceLocator_EWzQKNpService', true],
            'App\\Controller\\UserController::sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::sign_up' => ['privates', '.service_locator.VeqjPUu', 'get_ServiceLocator_VeqjPUuService', true],
            'App\\Controller\\UserController::validateAccount' => ['privates', '.service_locator.ywLWD05', 'get_ServiceLocator_YwLWD05Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.CVs7gBF', 'get_ServiceLocator_CVs7gBFService', true],
            'App\\Controller\\HomeController:loadMoreTricks' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController:addTrick' => ['privates', '.service_locator.PSe2ZZ2', 'get_ServiceLocator_PSe2ZZ2Service', true],
            'App\\Controller\\TrickController:deleteImage' => ['privates', '.service_locator.cME2Xsc', 'get_ServiceLocator_CME2XscService', true],
            'App\\Controller\\TrickController:deleteTrick' => ['privates', '.service_locator.paAAmna', 'get_ServiceLocator_PaAAmnaService', true],
            'App\\Controller\\TrickController:loadMoreCommentarys' => ['privates', '.service_locator.W2G6oTa', 'get_ServiceLocator_W2G6oTaService', true],
            'App\\Controller\\TrickController:modifyTrick' => ['privates', '.service_locator.e9zJ0mx', 'get_ServiceLocator_E9zJ0mxService', true],
            'App\\Controller\\TrickController:showTrick' => ['privates', '.service_locator.e9zJ0mx', 'get_ServiceLocator_E9zJ0mxService', true],
            'App\\Controller\\UserController:resendRegistrationToken' => ['privates', '.service_locator.eWzQKNp', 'get_ServiceLocator_EWzQKNpService', true],
            'App\\Controller\\UserController:resetPassword' => ['privates', '.service_locator.WHB6p3q', 'get_ServiceLocator_WHB6p3qService', true],
            'App\\Controller\\UserController:sendPasswordResetLink' => ['privates', '.service_locator.eWzQKNp', 'get_ServiceLocator_EWzQKNpService', true],
            'App\\Controller\\UserController:sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:sign_up' => ['privates', '.service_locator.VeqjPUu', 'get_ServiceLocator_VeqjPUuService', true],
            'App\\Controller\\UserController:validateAccount' => ['privates', '.service_locator.ywLWD05', 'get_ServiceLocator_YwLWD05Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::loadMoreTricks' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TrickController::addTrick' => '?',
            'App\\Controller\\TrickController::deleteImage' => '?',
            'App\\Controller\\TrickController::deleteTrick' => '?',
            'App\\Controller\\TrickController::loadMoreCommentarys' => '?',
            'App\\Controller\\TrickController::modifyTrick' => '?',
            'App\\Controller\\TrickController::showTrick' => '?',
            'App\\Controller\\UserController::resendRegistrationToken' => '?',
            'App\\Controller\\UserController::resetPassword' => '?',
            'App\\Controller\\UserController::sendPasswordResetLink' => '?',
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
            'App\\Controller\\HomeController:loadMoreTricks' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TrickController:addTrick' => '?',
            'App\\Controller\\TrickController:deleteImage' => '?',
            'App\\Controller\\TrickController:deleteTrick' => '?',
            'App\\Controller\\TrickController:loadMoreCommentarys' => '?',
            'App\\Controller\\TrickController:modifyTrick' => '?',
            'App\\Controller\\TrickController:showTrick' => '?',
            'App\\Controller\\UserController:resendRegistrationToken' => '?',
            'App\\Controller\\UserController:resetPassword' => '?',
            'App\\Controller\\UserController:sendPasswordResetLink' => '?',
            'App\\Controller\\UserController:sign_in' => '?',
            'App\\Controller\\UserController:sign_up' => '?',
            'App\\Controller\\UserController:validateAccount' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}