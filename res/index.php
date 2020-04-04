<?php

require 'flight/Flight.php';
require 'vendor/autoload.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::start();