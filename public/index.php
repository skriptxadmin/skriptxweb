<?php

define('DEBUG', true);

define('ROOT_DIR', __DIR__.'/../');

if(DEBUG){

    error_reporting(E_ALL);
}

require ROOT_DIR.'vendor/autoload.php';

try {

    if (empty($_GET['url'])) {

        $route = ['Index'];

    } else {

        $route = explode('/', rtrim($_GET['url'], '/'));
    }

    $pathStrs = explode('-', $route[0]);

    $ucFirstedControllerName = array_map(function ($str) {
        return ucfirst($str);
    }, $pathStrs);

    $controllerName = implode('', $ucFirstedControllerName);

    $controller = ucfirst($controllerName) . "Controller";

    $file = __DIR__.'/../src/Controllers/' . $controller . ".php";

    $file_exists = file_exists($file);

    if (!$file_exists) {

        skriptx_on_error();

        return;
    }

    $className = "\\App\\Controllers\\" . $controller;

    $ctrl = new $className;

    $method = !empty($route[1]) ? $route[1] : 'index';

    if(!method_exists($ctrl, $method)){

        skriptx_on_error();

        return;
    }


    call_user_func_array(array($ctrl, $method), skriptx_get_args($route));

    


} catch (Error $e) {


    skriptx_on_error();

    return;

}

function skriptx_on_error()
{

    $className = "\\App\\Controllers\\PageNotFoundController";

    $ctrl = new $className;

    $ctrl->index();

}


function skriptx_get_args($route){

    $args = [];

    for($i = 2; $i < count($route); $i++){

        $args[] = $route[$i];
    }

    return $args;
}