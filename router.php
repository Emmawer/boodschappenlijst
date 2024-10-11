<?php
$mapping = require "routes.php";

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else{
        require "views/404.php";
    }
}
$uri = $_SERVER["REQUEST_URI"];
routeToController($uri, $mapping);