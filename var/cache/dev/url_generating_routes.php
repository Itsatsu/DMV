<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_admin_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin/dashboard']], [], []],
    'app_admin_ladmin' => [[], ['_controller' => 'App\\Controller\\AdminController::ladmin'], [], [['text', '/admin/su/liste-adminitrateurs']], [], []],
    'app_admin_dadmin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::dadmin'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin/delete-adminitrateurs']], [], []],
    'app_admin_madmin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::madmin'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin/su/modifier-administrateur']], [], []],
    'app_admin_aadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::aadmin'], [], [['text', '/admin/su/ajouter-administrateur']], [], []],
    'app_admin_llieu' => [[], ['_controller' => 'App\\Controller\\AdminController::llieu'], [], [['text', '/admin/liste-lieux']], [], []],
    'app_admin_mlieu' => [['id'], ['_controller' => 'App\\Controller\\AdminController::mlieu'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin/modifier-lieu']], [], []],
    'app_admin_alieu' => [[], ['_controller' => 'App\\Controller\\AdminController::alieu'], [], [['text', '/admin/ajouter-lieu']], [], []],
    'app_admin_dlieu' => [['id'], ['_controller' => 'App\\Controller\\AdminController::dlieu'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin/delete-lieu']], [], []],
    'app_admin_lvilles' => [[], ['_controller' => 'App\\Controller\\AdminController::lvilles'], [], [['text', '/admin/liste-villes']], [], []],
    'app_admin_mville' => [['id'], ['_controller' => 'App\\Controller\\AdminController::mville'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin/modifier-ville']], [], []],
    'app_admin_aville' => [[], ['_controller' => 'App\\Controller\\AdminController::aville'], [], [['text', '/admin/ajouter-ville']], [], []],
    'app_admin_dville' => [['id'], ['_controller' => 'App\\Controller\\AdminController::dville'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin/delete-ville']], [], []],
    'app_home_departement' => [['id'], ['_controller' => 'App\\Controller\\HomeController::departement'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/departement']], [], []],
    'app_home_ville' => [['id', 'ville'], ['_controller' => 'App\\Controller\\HomeController::ville'], [], [['variable', '/', '[^/]++', 'ville', true], ['variable', '-', '[^/]++', 'id', true], ['text', '/departement']], [], []],
    'app_home_lieu' => [['id', 'ville', 'lieu'], ['_controller' => 'App\\Controller\\HomeController::lieu'], [], [['variable', '/', '[^/]++', 'lieu', true], ['variable', '/', '[^/]++', 'ville', true], ['variable', '-', '[^/]++', 'id', true], ['text', '/departement']], [], []],
    'app_home_selection' => [[], ['_controller' => 'App\\Controller\\HomeController::selection'], [], [['text', '/notre-selection']], [], []],
    'app_home_visite' => [[], ['_controller' => 'App\\Controller\\HomeController::visite'], [], [['text', '/les-plus-visites']], [], []],
    'app_home_nous' => [[], ['_controller' => 'App\\Controller\\HomeController::nous'], [], [['text', '/notre-equipe']], [], []],
    'app_home_contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contact'], [], [['text', '/contact']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin']], [], []],
];
