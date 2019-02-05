<?php
    require 'header.php';  
    if(isset($_GET["message"])){//pour afficher le message (dans add post post) à  condition que

    echo $_GET["message"]; 
}
?>
    <h1>Admin</h1>

    <a href="add_postphp">Ajouter article</a>

</body>
</html>