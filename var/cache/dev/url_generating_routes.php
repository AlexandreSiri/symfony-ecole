<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'comment_create' => [['id'], ['_controller' => 'App\\Controller\\CommentController::create'], [], [['text', '/comments'], ['variable', '/', '[^/]++', 'id', true], ['text', '/posts']], [], [], []],
    'comment_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comments']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'admin_contact_list' => [[], ['_controller' => 'App\\Controller\\ContactController::adminList'], [], [['text', '/admin/contact']], [], [], []],
    'admin_contact_delete' => [['id'], ['_controller' => 'App\\Controller\\ContactController::deletePost'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'posts' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/posts']], [], [], []],
    'post_detail' => [['id'], ['_controller' => 'App\\Controller\\PostController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/posts']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\PostController::adminList'], [], [['text', '/admin']], [], [], []],
    'author' => [[], ['_controller' => 'App\\Controller\\PostController::adminList'], [], [['text', '/author/posts']], [], [], []],
    'admin_post_create' => [[], ['_controller' => 'App\\Controller\\PostController::createPost'], [], [['text', '/admin/posts/create']], [], [], []],
    'author_post_create' => [[], ['_controller' => 'App\\Controller\\PostController::createPost'], [], [['text', '/author/posts/create']], [], [], []],
    'admin_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::editPost'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/posts']], [], [], []],
    'author_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::editPost'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/author/posts']], [], [], []],
    'admin_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::deletePost'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/posts']], [], [], []],
    'author_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::deletePost'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/author/posts']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'admin_user_list' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/users']], [], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
];
