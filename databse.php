<!--Configuration acces base de donnée -->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "blog-talis";

try { //fonction de connexion
    $db = new PDO("musql:host=$servername;dbname=myDB"), $username, $password)
    // set the PDO error mode to exception
    $db->setAttribute(PDO: :ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}