<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/notre-selection' => [[['_route' => 'app_home_selection', '_controller' => 'App\\Controller\\HomeController::selection'], null, null, null, false, false, null]],
        '/les-plus-visites' => [[['_route' => 'app_home_visite', '_controller' => 'App\\Controller\\HomeController::visite'], null, null, null, false, false, null]],
        '/notre-equipe' => [[['_route' => 'app_home_nous', '_controller' => 'App\\Controller\\HomeController::nous'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/departement\\-(?'
                    .'|(\\d+)(*:29)'
                    .'|([^/]++)/([^/]++)(?'
                        .'|(*:56)'
                        .'|/([^/]++)(*:72)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_home_departement', '_controller' => 'App\\Controller\\HomeController::departement'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'app_home_ville', '_controller' => 'App\\Controller\\HomeController::ville'], ['id', 'ville'], null, null, false, true, null]],
        72 => [
            [['_route' => 'app_home_lieu', '_controller' => 'App\\Controller\\HomeController::lieu'], ['id', 'ville', 'lieu'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
