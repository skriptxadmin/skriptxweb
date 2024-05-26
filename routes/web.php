<?php

$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/products', '\App\Controllers\ProductsController@index');
$router->get('/services', '\App\Controllers\ServicesController@index');
$router->get('/about-us', '\App\Controllers\AboutUsController@index');
$router->get('/contact-us', '\App\Controllers\ContactUsController@index');

