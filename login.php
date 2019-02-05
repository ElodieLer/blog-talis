<?php
$loginPage = true;
require "header.php";
?>

    
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