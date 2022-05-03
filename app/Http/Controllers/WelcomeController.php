<?php

namespace App\Http\Controllers;

use App\Support\View;
use Slim\App;

class WelcomeController
{
    public function index($response, View $view)
    {
        $response->getBody()->write('Welcome Controller Worked!');

        $view->test();

        return $response;

    }

    public function show($response, $name, $id)
    {
        $response->getBody()->write("Welcome {$name} you have an id of {$id}");

        return $response;
    }
}