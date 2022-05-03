<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {

    $app->get('/home', function (Request $request, Response $response, $params) {
        return view($response, 'auth.home', ['name' => 'Max']);
    });

    $app->get('/', function (Request $request, Response $response, $params) {
        $response->getBody()->write("Home page");
        return $response;
    });

};