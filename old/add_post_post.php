<?php
session_start();
require "database.php";

var_dump($_POST);
$title = $_POST["title"];
$content = $_POST["content"];


// Prepare REQ
$req = $db->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)"); // : => creer une variable SQL (on peut metre le nom que l'on souhaite)
// Execute REQ
$req->execute(array(
    "title" => $title,
    "content" => $content
)); 
// Redirect to admin + message

header("Location: admin.php?message=Le message qui faut ecrire");