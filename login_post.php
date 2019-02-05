<?php
if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin"){
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
}else if($_POST["password"] !== "admin"){
    header("Location: login.php?message=Erreur de password");
}else if($_POST["pseudo"] !== "admin"){
    header("Location: login.php?message=Erreur de pseudo");
}