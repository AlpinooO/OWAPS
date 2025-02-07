<?php
require_once __DIR__ . '/controller/router.php';

$router->get('/', function() {
    echo "<h1>Bienvenue sur la page d'accueil</h1>";
    echo "<a href='/view/connexion.php'>Connexion</a> | <a href='/view/inscription.php'>Inscription</a>";
});
// Démarrer la session (si besoin)
session_start();


// Dispatcher les routes
$router->dispatch();
