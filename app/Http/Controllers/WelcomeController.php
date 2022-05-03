<?php

namespace App\Http\Controllers;

use App\Support\View;

class WelcomeController
{
    public function index(View $view)
    {
        return $view->render('auth.home', ['name' => 'Max']);
    }

    public function show($response, $name, $id)
    {
        $response->getBody()->write("Welcome {$name} you have an id of {$id}");

        return $response;
    }
}