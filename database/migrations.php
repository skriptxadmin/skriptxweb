<?php


require __DIR__.'/../vendor/autoload.php';


use Illuminate\Database\Capsule\Manager as Capsule;

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;


$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => 'database.sqlite',
]);

$capsule->setAsGlobal();




/**
 * Edit from here. Do not edit above codes
 * 
 */


// Capsule::schema()->drop('users'); //only if you want to delete the table

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});

