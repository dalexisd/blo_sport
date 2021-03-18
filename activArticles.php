<?php 
require 'functions.php';

$users = getUsersList();
$articles = getArticlesList();
require 'view/articleView.php';
   
