<?php
    require 'vendor/autoload.php';

    Flight::route('/', function(){
      include './public/index.html';
    });
    
    Flight::start();    
?>