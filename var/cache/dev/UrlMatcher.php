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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'sopay_home', '_controller' => 'App\\Controller\\AppSopayController::home'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'sopay_dashboard', '_controller' => 'App\\Controller\\AppSopayController::dashboard'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'sopay_login', '_controller' => 'App\\Controller\\AppSopayController::connect'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'sopay_logout', '_controller' => 'App\\Controller\\AppSopayController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'sopay_register', '_controller' => 'App\\Controller\\AppSopayController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'sopay_profile', '_controller' => 'App\\Controller\\AppSopayController::profile'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'sopay_forgot_password', '_controller' => 'App\\Controller\\AppSopayController::forgotPass'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'sopay_reset_password', '_controller' => 'App\\Controller\\AppSopayController::resetPassword'], null, null, null, false, false, null]],
        '/update-password' => [[['_route' => 'sopay_update_password', '_controller' => 'App\\Controller\\AppSopayController::updatePassword'], null, null, null, false, false, null]],
        '/withdraw-rewards' => [[['_route' => 'sopay_withdraw_rewards', '_controller' => 'App\\Controller\\AppSopayController::withdrawRewards'], null, null, null, false, false, null]],
        '/check-user' => [[['_route' => 'sopay_user', '_controller' => 'App\\Controller\\AppSopayController::checkUser'], null, null, null, false, false, null]],
        '/changes-currency' => [[['_route' => 'sopay_change_currency', '_controller' => 'App\\Controller\\AppSopayController::currency'], null, null, null, false, false, null]],
        '/deposit' => [[['_route' => 'sopay_deposit', '_controller' => 'App\\Controller\\AppSopayController::deposit'], null, null, null, false, false, null]],
        '/withdraw' => [[['_route' => 'sopay_withdraw', '_controller' => 'App\\Controller\\AppSopayController::withdraw'], null, null, null, false, false, null]],
        '/transfert' => [[['_route' => 'sopay_transfert', '_controller' => 'App\\Controller\\AppSopayController::transfert'], null, null, null, false, false, null]],
        '/changes' => [[['_route' => 'sopay_changes', '_controller' => 'App\\Controller\\AppSopayController::changes'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'sopay_contact', '_controller' => 'App\\Controller\\AppSopayController::contact'], null, null, null, false, false, null]],
        '/detail-transaction' => [[['_route' => 'sopay_detail_transaction', '_controller' => 'App\\Controller\\AppSopayController::detailTransaction'], null, null, null, false, false, null]],
        '/out-amount' => [[['_route' => 'sopay_get_amount', '_controller' => 'App\\Controller\\AppSopayController::getOutAmount'], null, null, null, false, false, null]],
        '/add-new-device' => [[['_route' => 'sopay_add_device', '_controller' => 'App\\Controller\\AppSopayController::newDevise'], null, null, null, false, false, null]],
        '/confirm-account' => [[['_route' => 'sopay_confirm_account', '_controller' => 'App\\Controller\\AppSopayController::activeAccount'], null, null, null, false, false, null]],
        '/pm-payment' => [[['_route' => 'sopay_confirm_pm_payment', '_controller' => 'App\\Controller\\AppSopayController::pmPayment'], null, null, null, false, false, null]],
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
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
