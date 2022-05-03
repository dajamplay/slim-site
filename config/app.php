<?php

return [
    'name' => env('APP_NAME', 'New app'),
    'providers' => [
        \App\Providers\EnvironmentVariablesServiceProvider::class,
        \App\Providers\ViewServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ErrorMiddlewareServiceProvider::class,
    ]
];