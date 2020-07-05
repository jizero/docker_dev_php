<?php

$app->post('/auth/login', function ($request, $response) use ($container) {

    $jwt = $container->get('jwt');
    $authService = $container->get('authService');
    $validator = $container->get('validator');

    $controller = new \App\Controllers\AuthController($response, $authService, $jwt);
    return $controller->login($request, new \App\Validators\Auth\LoginAuthValidator($validator));
});


$app->post('/auth/reset', function ($request, $response) use ($container) {

    $jwt = $container->get('jwt');
    $authService = $container->get('authService');
    $validator = $container->get('validator');

    $controller = new \App\Controllers\AuthController($response, $authService, $jwt);
    return $controller->reset($request, new \App\Validators\Auth\ResetAuthValidator($validator));
});


$app->get('/auth/logged', function ($request, $response) use ($container) {

    $jwt = $container->get('jwt');
    $authService = $container->get('authService');
    $userRepository = $container->get('userRepository');

    $controller = new \App\Controllers\AuthController($response, $authService, $jwt);
    return $controller->logged(new \App\Transformers\Users\UserTransformer());
});


$app->post('/auth/recovery', function ($request, $response) use ($container) {

    $jwt = $container->get('jwt');
    $authService = $container->get('authService');
    $validator = $container->get('validator');
    $db = $container->get('db');
    $mailer = $container->get('mailer');

    $controller = new \App\Controllers\AuthController($response, $authService, $jwt);
    return $controller->recovery($request, new \App\Validators\Auth\RecoveryAuthValidator($validator), $db, $mailer);
});