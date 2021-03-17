<?php 

function db_connect(){
    
    try 
    {
        $db = new PDO('mysql:host=localhost;dbname=blog_sport', "root", "");
        return $db;
    } 
    catch(PDOException $e) 
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getUsersList() {
    $connection = db_connect();
    $query = 'SELECT * FROM users';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getTagsList() {
    $connection = db_connect();
    $query = 'SELECT * FROM tags';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results; 
}

function getArticlesList() {
    $connection = db_connect();
    $query = 'SELECT * FROM articles';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results; 
}

function getCommentaires() {
    $connection = db_connect();
    $query = 'SELECT * FROM commentaires';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results; 
}

function getUsersInfos($id){
    $connection = db_connect();
    $query = 'SELECT id, lastname, firstname, birthday, gender
    FROM users
    WHERE users.id = ' . $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function addUser ($lastname, $firstname, $pseudo, $email, $password){
    $con = db_connect ();
    $query = "INSERT INTO users (id, lastname, firstname, pseudo, email, password) VALUES ('null', '$lastname', '$firstname', '$pseudo', '$email', '$password')";
    $con->query($query);


}