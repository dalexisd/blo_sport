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

function addUser ($lastname, $firstname, $pseudo, $email, $password, $gender){
    $con = db_connect ();
    $stmt = $con->prepare ("INSERT INTO users (id, firstname, lastname, pseudo, email, password, gender) VALUES (:null, :value1, :value2, :value3, :value4, :value5, :value6)");
    $stmt->bindParam(':value1', $firstname, PDO::FETCH_ASSOC);
    $stmt->bindParam(':value2', $lastname, PDO::FETCH_ASSOC);
    $stmt->bindParam(':value3', $pseudo, PDO::FETCH_ASSOC);
    $stmt->bindParam(':value4', $email, PDO::FETCH_ASSOC);
    $stmt->bindParam(':value5', $password, PDO::FETCH_ASSOC);
    $stmt->bindParam(':value6', $gender, PDO::FETCH_ASSOC);
    $stmt->execute();


}

function userConnect($email) {
    $con = db_connect();
    $query = "SELECT * FROM users
    WHERE users.email = '$email'";
    $stmt = $con->query($query);
    $result = $stmt->fetch(PDO:: FETCH_ASSOC);
    return $result;

}