<?php

namespace App\Models;

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

class Model extends \Illuminate\Database\Eloquent\Model
{

    public function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'sqlite',
            'database' => ROOT_DIR.'database/database.sqlite',
        ]);

// Set the event dispatcher used by Eloquent models... (optional)

        $capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    }

}
