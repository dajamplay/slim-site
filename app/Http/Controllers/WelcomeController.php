<?php

namespace App\Http\Controllers;


class WelcomeController
{
    public function index($request, $response)
    {
        $response->getBody()->write('Welcome Controller');

        return $response;
    }

    public function show($request, $response, $name)
    {
        $response->getBody()->write("{$name}");

        return $response;
    }
}