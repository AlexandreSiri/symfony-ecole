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
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'admin_contact_list', '_controller' => 'App\\Controller\\ContactController::adminList'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/posts' => [[['_route' => 'posts', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\PostController::adminList'], null, null, null, false, false, null]],
        '/author/posts' => [[['_route' => 'author', '_controller' => 'App\\Controller\\PostController::adminList'], null, null, null, false, false, null]],
        '/admin/posts/create' => [[['_route' => 'admin_post_create', '_controller' => 'App\\Controller\\PostController::createPost'], null, null, null, false, false, null]],
        '/author/posts/create' => [[['_route' => 'author_post_create', '_controller' => 'App\\Controller\\PostController::createPost'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
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
                .'|/posts/([^/]++)(?'
                    .'|/comments(*:196)'
                    .'|(*:204)'
                .')'
                .'|/comments/([^/]++)/delete(*:238)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|contact/([^/]++)/delete(*:282)'
                        .'|posts/([^/]++)/(?'
                            .'|edit(*:312)'
                            .'|delete(*:326)'
                        .')'
                        .'|users/([^/]++)/(?'
                            .'|edit(*:357)'
                            .'|delete(*:371)'
                        .')'
                    .')'
                    .'|uthor/posts/([^/]++)/(?'
                        .'|edit(*:409)'
                        .'|delete(*:423)'
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
        196 => [[['_route' => 'comment_create', '_controller' => 'App\\Controller\\CommentController::create'], ['id'], ['POST' => 0], null, false, false, null]],
        204 => [[['_route' => 'post_detail', '_controller' => 'App\\Controller\\PostController::detail'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        282 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\ContactController::deletePost'], ['id'], null, null, false, false, null]],
        312 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], null, null, false, false, null]],
        326 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, false, null]],
        357 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, false, null]],
        371 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, false, null]],
        409 => [[['_route' => 'author_post_edit', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], null, null, false, false, null]],
        423 => [
            [['_route' => 'author_post_delete', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
