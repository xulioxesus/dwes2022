<?php
    // Leer titulo y descripción
    $titulo = $_POST['titulo']; //JJLP POST
    $contenido = $_POST['descripcion']; //JJLP POST

    
    // Crear un fichero en el directorio posts.
    // Si el proceso ok
        // Saltar al índice
    // Sino
        // Saltar a nuevo.php

    $resultado = file_put_contents("posts/$titulo",$contenido); // JJLP posts

    if ($resultado == true){
        header("Location: index.php"); //JJLP
    }
    else{
        header("Location: nuevo.php");
    }

    
?>