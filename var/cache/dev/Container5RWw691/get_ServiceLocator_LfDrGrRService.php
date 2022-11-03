<?php

namespace Container5RWw691;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LfDrGrRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lfDrGrR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lfDrGrR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.Gp7YyaJ', 'get_ServiceLocator_Gp7YyaJService', true],
            'App\\Controller\\HomeController::loadMoreTricks' => ['privates', '.service_locator.Gp7YyaJ', 'get_ServiceLocator_Gp7YyaJService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController::addTrick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController::deleteImage' => ['privates', '.service_locator.cME2Xsc', 'get_ServiceLocator_CME2XscService', true],
            'App\\Controller\\TrickController::deleteTrick' => ['privates', '.service_locator.paAAmna', 'get_ServiceLocator_PaAAmnaService', true],
            'App\\Controller\\TrickController::loadMoreCommentarys' => ['privates', '.service_locator.bmoXdmh', 'get_ServiceLocator_BmoXdmhService', true],
            'App\\Controller\\TrickController::modifyTrick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController::showTrick' => ['privates', '.service_locator.YEDSq3s', 'get_ServiceLocator_YEDSq3sService', true],
            'App\\Controller\\UserController::resendRegistrationToken' => ['privates', '.service_locator.ywLWD05', 'get_ServiceLocator_YwLWD05Service', true],
            'App\\Controller\\UserController::resetPassword' => ['privates', '.service_locator.r8SU1w3', 'get_ServiceLocator_R8SU1w3Service', true],
            'App\\Controller\\UserController::sendPasswordResetLink' => ['privates', '.service_locator.r1fp_Ux', 'get_ServiceLocator_R1fpUxService', true],
            'App\\Controller\\UserController::sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::sign_up' => ['privates', '.service_locator.z0tXHJl', 'get_ServiceLocator_Z0tXHJlService', true],
            'App\\Controller\\UserController::validateAccount' => ['privates', '.service_locator.ywLWD05', 'get_ServiceLocator_YwLWD05Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.Gp7YyaJ', 'get_ServiceLocator_Gp7YyaJService', true],
            'App\\Controller\\HomeController:loadMoreTricks' => ['privates', '.service_locator.Gp7YyaJ', 'get_ServiceLocator_Gp7YyaJService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TrickController:addTrick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController:deleteImage' => ['privates', '.service_locator.cME2Xsc', 'get_ServiceLocator_CME2XscService', true],
            'App\\Controller\\TrickController:deleteTrick' => ['privates', '.service_locator.paAAmna', 'get_ServiceLocator_PaAAmnaService', true],
            'App\\Controller\\TrickController:loadMoreCommentarys' => ['privates', '.service_locator.bmoXdmh', 'get_ServiceLocator_BmoXdmhService', true],
            'App\\Controller\\TrickController:modifyTrick' => ['privates', '.service_locator.Rryd9QW', 'get_ServiceLocator_Rryd9QWService', true],
            'App\\Controller\\TrickController:showTrick' => ['privates', '.service_locator.YEDSq3s', 'get_ServiceLocator_YEDSq3sService', true],
            'App\\Controller\\UserController:resendRegistrationToken' => ['privates', '.service_locator.ywLWD05', 'get_ServiceLocator_YwLWD05Service', true],
            'App\\Controller\\UserController:resetPassword' => ['privates', '.service_locator.r8SU1w3', 'get_ServiceLocator_R8SU1w3Service', true],
            'App\\Controller\\UserController:sendPasswordResetLink' => ['privates', '.service_locator.r1fp_Ux', 'get_ServiceLocator_R1fpUxService', true],
            'App\\Controller\\UserController:sign_in' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:sign_up' => ['privates', '.service_locator.z0tXHJl', 'get_ServiceLocator_Z0tXHJlService', true],
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
