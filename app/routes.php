<?php

use Slim\App;
use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
    function view(Response $response, $template, $with = []) {
        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);
        $response->getBody()->write($blade->render());
        return $response;
    }
    $app->get('/home', function (Request $request, Response $response, $params) {
        return view($response, 'auth.home', ['name' => 'Max']);
    });
    $app->get('/', function (Request $request, Response $response, $params) {
        $response->getBody()->write("Home page");
        return $response;
    });
};