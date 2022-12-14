<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/loadmore_tricks' => [[['_route' => 'loadmore_tricks', '_controller' => 'App\\Controller\\HomeController::loadMoreTricks'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/trick/add' => [[['_route' => 'add_trick', '_controller' => 'App\\Controller\\TrickController::addTrick'], null, null, null, true, false, null]],
        '/user/sign-in' => [[['_route' => 'sign-in', '_controller' => 'App\\Controller\\UserController::sign_in'], null, null, null, false, false, null]],
        '/user/sign-up' => [[['_route' => 'sign-up', '_controller' => 'App\\Controller\\UserController::sign_up'], null, null, null, false, false, null]],
        '/user/resendRegistrationToken' => [[['_route' => 'resend_registration_token', '_controller' => 'App\\Controller\\UserController::resendRegistrationToken'], null, null, null, true, false, null]],
        '/user/sendPasswordResetLink' => [[['_route' => 'send_password_reset_link', '_controller' => 'App\\Controller\\UserController::sendPasswordResetLink'], null, null, null, true, false, null]],
        '/user/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/trick/(?'
                    .'|show/([^/]++)(*:192)'
                    .'|loadmore_commentarys/([^/]++)(*:229)'
                    .'|delete(?'
                        .'|/([^/]++)(*:255)'
                        .'|Media/([^/]++)(*:277)'
                    .')'
                    .'|modify/([^/]++)(*:301)'
                .')'
                .'|/user/(?'
                    .'|validation/([^/]++)(*:338)'
                    .'|resetPassword/([^/]++)(*:368)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'show_trick', '_controller' => 'App\\Controller\\TrickController::showTrick'], ['slug'], null, null, false, true, null]],
        229 => [[['_route' => 'loadmore_commentarys', '_controller' => 'App\\Controller\\TrickController::loadMoreCommentarys'], ['id'], ['POST' => 0], null, false, true, null]],
        255 => [[['_route' => 'delete_trick', '_controller' => 'App\\Controller\\TrickController::deleteTrick'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'delete_media', '_controller' => 'App\\Controller\\TrickController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        301 => [[['_route' => 'modify_trick', '_controller' => 'App\\Controller\\TrickController::modifyTrick'], ['slug'], null, null, false, true, null]],
        338 => [[['_route' => 'registration_validation', '_controller' => 'App\\Controller\\UserController::validateAccount'], ['token'], null, null, false, true, null]],
        368 => [
            [['_route' => 'reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
