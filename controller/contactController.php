<?php
include_once ('model/ContactModel.php');


class ContactController {
public function contacter()
{
    $message = htmlspecialchars($_POST['message']);
    $email = htmlspecialchars($_POST['email']);
    $nom= htmlspecialchars($_POST['nom']);
}

}