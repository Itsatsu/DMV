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
        '/admin/dashboard' => [[['_route' => 'app_admin_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/admin/su/liste-adminitrateurs' => [[['_route' => 'app_admin_ladmin', '_controller' => 'App\\Controller\\AdminController::ladmin'], null, null, null, false, false, null]],
        '/admin/su/ajouter-administrateur' => [[['_route' => 'app_admin_aadmin', '_controller' => 'App\\Controller\\AdminController::aadmin'], null, null, null, false, false, null]],
        '/admin/liste-lieux' => [[['_route' => 'app_admin_llieu', '_controller' => 'App\\Controller\\AdminController::llieu'], null, null, null, false, false, null]],
        '/admin/ajouter-lieu' => [[['_route' => 'app_admin_alieu', '_controller' => 'App\\Controller\\AdminController::alieu'], null, null, null, false, false, null]],
        '/admin/liste-villes' => [[['_route' => 'app_admin_lvilles', '_controller' => 'App\\Controller\\AdminController::lvilles'], null, null, null, false, false, null]],
        '/admin/ajouter-ville' => [[['_route' => 'app_admin_aville', '_controller' => 'App\\Controller\\AdminController::aville'], null, null, null, false, false, null]],
        '/notre-selection' => [[['_route' => 'app_home_selection', '_controller' => 'App\\Controller\\HomeController::selection'], null, null, null, false, false, null]],
        '/les-plus-visites' => [[['_route' => 'app_home_visite', '_controller' => 'App\\Controller\\HomeController::visite'], null, null, null, false, false, null]],
        '/notre-equipe' => [[['_route' => 'app_home_nous', '_controller' => 'App\\Controller\\HomeController::nous'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|delete\\-(?'
                        .'|adminitrateurs\\-(\\d+)(*:211)'
                        .'|lieu\\-(\\d+)(*:230)'
                        .'|ville\\-(\\d+)(*:250)'
                    .')'
                    .'|su/modifier\\-administrateur\\-(\\d+)(*:293)'
                    .'|modifier\\-(?'
                        .'|lieu\\-(\\d+)(*:325)'
                        .'|ville\\-(\\d+)(*:345)'
                    .')'
                .')'
                .'|/departement\\-(?'
                    .'|(\\d+)(*:377)'
                    .'|([^/]++)/([^/]++)(?'
                        .'|(*:405)'
                        .'|/([^/]++)(*:422)'
                    .')'
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
        211 => [[['_route' => 'app_admin_dadmin', '_controller' => 'App\\Controller\\AdminController::dadmin'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'app_admin_dlieu', '_controller' => 'App\\Controller\\AdminController::dlieu'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'app_admin_dville', '_controller' => 'App\\Controller\\AdminController::dville'], ['id'], null, null, false, true, null]],
        293 => [[['_route' => 'app_admin_madmin', '_controller' => 'App\\Controller\\AdminController::madmin'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'app_admin_mlieu', '_controller' => 'App\\Controller\\AdminController::mlieu'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'app_admin_mville', '_controller' => 'App\\Controller\\AdminController::mville'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'app_home_departement', '_controller' => 'App\\Controller\\HomeController::departement'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'app_home_ville', '_controller' => 'App\\Controller\\HomeController::ville'], ['id', 'ville'], null, null, false, true, null]],
        422 => [
            [['_route' => 'app_home_lieu', '_controller' => 'App\\Controller\\HomeController::lieu'], ['id', 'ville', 'lieu'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
