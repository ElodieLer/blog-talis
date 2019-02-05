<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require 'nav-bar.php'; ?>
<!--ecrire la suite -->
    <nav>
    <a href="index.php">Home</a>
    <a href="admin.php">Admin</a>
    <a href="login.php">Login</a>
    <a href="disconnect.php">Disconnect</a>
    </nav>

    
    <form action="login-post.php"method="post">
        <input type="text" placeholder="pseudo" name="pseudo">
        <input type="password"placeholder="password" name="password">
        <input type="submit" value="envoyer">
    
    </form>
    <?php
    if(isset($_GET["message"])){
        echo $_GET["message"];
    }
    ?>
</body>
</html>