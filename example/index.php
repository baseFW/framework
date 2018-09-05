<?php

require __DIR__ . '/../vendor/autoload.php';

use \Seaon\App;
use \Seaon\Routing\Router;
use \Seaon\Routing\Route;

Route::get('/', function () {
    echo "string";
});

Router::run();
