<?php

//Turn on error reporting
int_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once("vendor/autoload.php");

//create an instance of the base class
// :: invokes a static method
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo "<h1>Hello, World!</h1>";
    }
);

//run fat free
$f3->run();
