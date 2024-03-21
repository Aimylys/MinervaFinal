<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'contact' => [[], ['_controller' => 'App\\Controller\\BaseController::contact'], [], [['text', '/contact']], [], [], []],
    'ajout' => [[], ['_controller' => 'App\\Controller\\BaseController::ajout'], [], [['text', '/private-ajout']], [], [], []],
    'favorie' => [['id'], ['_controller' => 'App\\Controller\\BaseController::favorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/favorie']], [], [], []],
    'mes-favorie' => [[], ['_controller' => 'App\\Controller\\BaseController::mesFavorie'], [], [['text', '/mes-favorie']], [], [], []],
    'detail' => [['id'], ['_controller' => 'App\\Controller\\BaseController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detail']], [], [], []],
    'monPanier' => [[], ['_controller' => 'App\\Controller\\BaseController::monPanier'], [], [['text', '/monPanier']], [], [], []],
    'ajoutPanier' => [['id'], ['_controller' => 'App\\Controller\\BaseController::ajoutPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajoutPanier']], [], [], []],
    'supp-panier' => [['id'], ['_controller' => 'App\\Controller\\BaseController::supprimerPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimerPanier']], [], [], []],
    'faq' => [[], ['_controller' => 'App\\Controller\\BaseController::faq'], [], [['text', '/faq']], [], [], []],
    'mentionslegales' => [[], ['_controller' => 'App\\Controller\\BaseController::mentionslegales'], [], [['text', '/mentionslegales']], [], [], []],
    'cgu' => [[], ['_controller' => 'App\\Controller\\BaseController::cgu'], [], [['text', '/cgu']], [], [], []],
    'charte' => [[], ['_controller' => 'App\\Controller\\BaseController::charte'], [], [['text', '/charte']], [], [], []],
    'ajoutDeGenre' => [[], ['_controller' => 'App\\Controller\\BaseController::ajoutDeGenre'], [], [['text', '/private-ajoutDeGenre']], [], [], []],
    'ajoutDeType' => [[], ['_controller' => 'App\\Controller\\BaseController::ajoutDeType'], [], [['text', '/private-ajoutDeType']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\SearchController::rechercheLivre'], [], [['text', '/search']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_errors_problem' => [['status'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_errors_hydra' => [['status'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_errors_jsonapi' => [['status'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/genres/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Genre', '_api_operation_name' => '_api_/genres/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/genres']], [], [], []],
    '_api_/genres{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Genre', '_api_operation_name' => '_api_/genres{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/genres']], [], [], []],
    '_api_/livres/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/livres']], [], [], []],
    '_api_/livres{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/livres']], [], [], []],
    '_api_/paniers/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/paniers']], [], [], []],
    '_api_/paniers{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/paniers']], [], [], []],
    '_api_/types/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Type', '_api_operation_name' => '_api_/types/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/types']], [], [], []],
    '_api_/types{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Type', '_api_operation_name' => '_api_/types{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/types']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/']], [], [], []],
];
