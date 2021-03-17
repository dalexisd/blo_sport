<?php

require 'functions.php';

if (isset($_POST) && !empty($_POST)){
    $post = $_POST;
    var_dump($post);
    $lastname = $post['lastname'];
    $firstname = $post['firstname'];
    $pseudo = $post['pseudo'];
    $email = $post['email'];
    $plainPassword = $post['password'];
    $password = password_hash($plainPassword, PASSWORD_DEFAULT); // jamais de MDP en clair en Base de données//

    addUser($lastname, $firstname, $pseudo, $email, $password);
}

require 'view/formulaireView.php';