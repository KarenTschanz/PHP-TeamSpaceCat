<?php
$bdd = new PDO( 'mysql:host=localhost;dbname=articles', 'root', 'root');

if(isset($_GET['id']) AND !empty($_GET['id'])){
        $suppr_id = htmlspecialchars($_GET['id']);
        
        $suppr = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        $suppr->execute(array($suppr_id));
    
    header('Location: http://localhost:8888/PHP-git/PHP-TeamSpaceCat/page/blog.php');
    
    }
?>