<?php

include_once('bdd.php');

function contacter($nom, $email, $message){
    global $bdd;
    return $bdd->query('INSERT INTO contact(nom, email, message) values(?,?,?)');
    
}