<?php

$router->get('/', '\App\Controllers\HomeController@index');

$router->mount('/users', function () use ($router) {

    $router->get('', '\App\Controllers\UsersController@index');

    $router->get('see/{id}', '\App\Controllers\UsersController@see');

});
