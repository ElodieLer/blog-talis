<?php
require "database.php";

$req = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password'); //on ecrit notre requete
$req->execute(array(                   //on execute notre requete
    "pseudo" => $_POST["pseudo"],
    "password" => $_POST["password"]
)); 
$result = $req->fetch();
if(!$result){
    header("Location: login.php");
}else{
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
    header("Location: login.php");
}


// Si pseudo égal à admin et password égal à admin
if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin"){
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
}else if($_POST["password"] !== "admin"){
    header("Location: login.php?message=Erreur de password");
}else if($_POST["pseudo"] !== "admin"){
    header("Location: login.php?message=Erreur de pseudo");
}