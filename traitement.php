<?php
require 'function.php';

if (isset($_POST) && !empty($_POST)){
    $post = $_POST;
    $lastname = $post['lastname'];
    $firstname = $post['firstname'];
    $pseudo = $post['pseudo'];
    $email = $post['email'];
    $plainPassword = $post['password'];
    $password = password_hash($plainPassword, PASSWORD_DEFAULT);

    addUser($lastname, $firstname, $pseudo, $email, $password);
}

require 'view/formulaireView.php';