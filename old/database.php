<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = 'blog-talisv2';

try {
    $db = new PDO("mysql:host=localhost;dbname=blog-talisv2", "root", "root");
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}