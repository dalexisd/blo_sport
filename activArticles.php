<?php 
include 'view/partials/header.php';
include 'functions.php';

$user = getUsersList();
$articles = getArticlesList();


require 'view/articleView.php';
    


?>