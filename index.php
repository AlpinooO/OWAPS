<?php
require_once __DIR__ . '/controller/router.php';

$router->get('/', function() {
    require __DIR__ . '/view/home.php';
});
// Démarrer la session (si besoin)
session_start();


// Dispatcher les routes
$router->dispatch();
