<?php
    $nombre = $_POST['nombre'];
    
    unlink("posts/$nombre");
    
    header("Location: index.php"); //JJLP Faltaba
        
?>