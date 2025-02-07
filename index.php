<?php
require_once __DIR__ . '/controller/router.php';

$router->get('/', function() {
    echo "<h1>Bienvenue sur la page d'accueil</h1>";
    echo "<a href='/connexion'>Connexion</a> | <a href='/view/inscription.php'>Inscription</a> | <a href='/contact'>Contact</a> ";
});
// Démarrer la session (si besoin)
session_start();


// Dispatcher les routes
$router->dispatch();
