<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

parse_url($uri);

function abort($statusCode = 404){
    http_response_code($statusCode);
    require "controllers/{$statusCode}.php";
    die();
}

$routes = [
    '/' => 'controllers/index.php', 
    '/hiro' => 'controllers/hiro.php',
    '/bender' => 'controllers/bender.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort(404);
}


