<?php
session_start();
require 'nav-bar.php'; 
require 'database.php'; 

// Select all posts to db
$req = $db->query('SELECT * FROM posts');
$req->execute();

// While show all posts
while($donnees = $req->fetch()){
    var_dump($donnees);
}



?>


