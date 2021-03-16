<?php 
require 'functions.php';

$users = getUsersList();
$articles = getArticlesList();
    
require 'view/indexView.php';


 