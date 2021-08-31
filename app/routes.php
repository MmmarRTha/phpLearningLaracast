<?php

$router->get('', 'App\Controllers\PagesController@home');
$router->get('about', 'App\Controllers\PagesController@about');
$router->get('contact', 'App\Controllers\PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');