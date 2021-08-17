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
        '/addAchats' => [[['_route' => 'addAchats', '_controller' => 'App\\Controller\\AchatsController::addAchats'], null, null, null, false, false, null]],
        '/showArticles' => [[['_route' => 'showArticles', '_controller' => 'App\\Controller\\ArticlesController::showArticles'], null, null, null, false, false, null]],
        '/showBoutiques' => [[['_route' => 'showBoutiques', '_controller' => 'App\\Controller\\BoutiquesController::showBoutiques'], null, null, null, false, false, null]],
        '/showBoutiquesAccessoires' => [[['_route' => 'boutiquesAccessoires', '_controller' => 'App\\Controller\\BoutiquesController::showBoutiquesAccessoires'], null, null, null, false, false, null]],
        '/showBoutiquesProduits' => [[['_route' => 'boutiquesProduits', '_controller' => 'App\\Controller\\BoutiquesController::showBoutiquesProduits'], null, null, null, false, false, null]],
        '/addDons' => [[['_route' => 'addDons', '_controller' => 'App\\Controller\\DonsController::addDons'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/showOne(?'
                    .'|Articles/([^/]++)(*:196)'
                    .'|Boutiques/([^/]++)(*:222)'
                .')'
                .'|/panier/add/([^/]++)(*:251)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        196 => [[['_route' => 'showOneArticles', '_controller' => 'App\\Controller\\ArticlesController::showOneArticles'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'showOneBoutiques', '_controller' => 'App\\Controller\\BoutiquesController::showOneBoutiques'], ['id'], null, null, false, true, null]],
        251 => [
            [['_route' => 'Addpanier', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
