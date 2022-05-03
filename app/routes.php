<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Http\Controllers\WelcomeController;

return function (App $app) {

    $app->get('/home', function (Request $request, Response $response, $params) {
        return view($response, 'auth.home', ['name' => 'Max']);
    });

    $app->get('/', [WelcomeController::class, 'index']);
    $app->get('/{name}', [WelcomeController::class, 'show']);

};