<?php

class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            call_user_func($this->routes[$method][$path]);
        } else {
            http_response_code(404);
            echo "404 - Page not found ";
        }
    }
}

// Gestion des vues de connexion et d'inscription
$router = new Router();

$router->get('/connexion', function() {
    require __DIR__ . '/../view/connexion.php';
});

$router->get('/inscription', function() {
    require __DIR__ . '/../view/inscription.php';
});
$router->get('/contact', function() {
    require __DIR__ . '/../view/contact.php';
});
$router->get('/', function() {
    require __DIR__ . '/../view/home.php';
});

$router->dispatch();