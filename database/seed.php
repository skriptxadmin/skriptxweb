<?php

define ('ROOT_DIR', __DIR__.'/../');

require __DIR__.'/../vendor/autoload.php';

use App\Models\User;

$row  =  new User;
$row->name = "NAMO PHP";
$row->save();