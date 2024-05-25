<?php

define('ROOT_DIR', __DIR__.'/../');

require ROOT_DIR.'vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(ROOT_DIR);

$dotenv->load();

$router = new \Bramus\Router\Router();

require ROOT_DIR.'routes/web.php';

$router->set404('\App\Controllers\PageNotFoundController@index');

$router->run();