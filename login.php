<?php

require 'functions.php';

if (isset($_POST) && !empty($_POST)){
    $post = $_POST;
    //var_dump($post);
    $email = $post['email'];
    $password = $post['password'];
    $user = userConnect($email);
    //var_dump($user);
    
    if(password_verify($password, $user['password'])){
        echo "connexion réussie";
    }else{
        echo " connexion échouée";
    }
    
}

require 'view/loginView.php';