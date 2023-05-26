<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];



// foreach ($routes as $key => $value) {
//     if ($uri === $key) {
//         require('./'.$value);
//     }
// }

function abort($statusCode = 404){
    http_response_code($statusCode);

    require "./views/{$statusCode}.php";
}


function routerToController($uri,$routes){
    if (array_key_exists($uri,$routes)) {
        require $routes[$uri];
    }
    else {
       abort();
    }
}


routerToController($uri,$routes);