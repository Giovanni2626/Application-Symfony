<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/playlists' => [[['_route' => 'playlists', '_controller' => 'App\\Controller\\PlaylistsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin.categories', '_controller' => 'App\\Controller\\admin\\AdminCategoriesController::index'], null, null, null, false, false, null]],
        '/admin/formations' => [[['_route' => 'admin.formations', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::index'], null, null, null, false, false, null]],
        '/admin/formation/ajout' => [[['_route' => 'admin.formation.ajout', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::ajout'], null, null, null, false, false, null]],
        '/admin/playlists' => [[['_route' => 'admin.playlists', '_controller' => 'App\\Controller\\admin\\AdminPlaylistsController::index'], null, null, null, false, false, null]],
        '/admin/playlist/ajout' => [[['_route' => 'admin.playlist.ajout', '_controller' => 'App\\Controller\\admin\\AdminPlaylistsController::ajout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:57)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:96)'
                    .'|formation/([^/]++)(*:121)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:165)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:205)'
                    .'|playlist/([^/]++)(*:230)'
                .')'
                .'|/admin/(?'
                    .'|categorie/suppr/([^/]++)(*:273)'
                    .'|formation/(?'
                        .'|edit/([^/]++)(*:307)'
                        .'|suppr/([^/]++)(*:329)'
                    .')'
                    .'|playlist/(?'
                        .'|edit/([^/]++)(*:363)'
                        .'|suppr/([^/]++)(*:385)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        57 => [[['_route' => 'formations.sort', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        96 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        121 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        165 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        205 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        230 => [[['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'admin.categorie.suppr', '_controller' => 'App\\Controller\\admin\\AdminCategoriesController::suppr'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'admin.formation.edit', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::edit'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'admin.formation.suppr', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::suppr'], ['id'], ['POST' => 0], null, false, true, null]],
        363 => [[['_route' => 'admin.playlist.edit', '_controller' => 'App\\Controller\\admin\\AdminPlaylistsController::edit'], ['id'], null, null, false, true, null]],
        385 => [
            [['_route' => 'admin.playlist.suppr', '_controller' => 'App\\Controller\\admin\\AdminPlaylistsController::suppr'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
