<?php

use App\Support\Route;

Route::get('/', 'WelcomeController@index');
Route::get('/product/{slug}', 'WelcomeController@index');

Route::get('/admin', 'WelcomeController@index');
