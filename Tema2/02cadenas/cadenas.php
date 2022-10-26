<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Desarrollo web con PHP 7 y MVC</title>
    <meta name="description" content="PHP, MVC">
    <meta name="author" content="Víctor Ponz">
    <style type='text/css'>
    dt {
        font-weight: bold;
        line-height: 2em;
    }

    dl {
        padding-left: 28px;

    }

    dd {
        line-height: 2em;
    }
    </style>
</head>

<body>
    <h1 style="text-align: center">Víctor Ponz</h1>
    <?php

  $nombre = trim(htmlspecialchars($_GET["nombre"] ?? "Julio"), "/");

  $prefijo = htmlspecialchars($_GET["prefijo"] ?? "");


  $veces = substr_count(strtolower($nombre), "a");

  $primeraAparicion = -1;
  if ($veces > 0)
    $primeraAparicion = stripos(strtolower($nombre), "a");

  $empiezaPor = false;

  if (strlen($prefijo) > 0){
    $empiezaPor = (0 === strpos($nombre, $prefijo));
  }
?>
    <h3>El parámetro <i>nombre</i>:</h3>
    <dl>
        <dt>Valor</dt>
        <dd><?= $nombre ?></dd>
        <dt>Longitud</dt>
        <dd><?= strlen($nombre) ?></dd>
        <dt>Mayúsculas</dt>
        <dd><?= strtoupper($nombre) ?></dd>
        <dt>Minúsculas</dt>
        <dd><?= strtolower($nombre); ?></dd>
        <dt>La letra 'a' aparece</dt>
        <dd><?= "$veces veces" ?></dd>
        <dt>La letra 'a' aparece por primera vez en la </dt>
        <dd><?= ($primeraAparicion >= 0 ? "posición $primeraAparicion.": "No contiene ninguna 'a'.") ?></dd>
        <dt>Sistituido el carácter 'o/O' por 0:</dt>
        <dd><?=  str_ireplace('o', '0', $nombre) ?></dd>
    </dl>
    <hr>
    <h3>El parámetro <i>prefijo</i>:</h3>
    <dl>
        <dt>Valor</dt>
        <dd><?= (strlen($prefijo) > 0 ? $prefijo : "Vacío") ?></dd>
        <?php if (strlen($prefijo) > 0):?>
        <dt><?= "¿<i>$nombre</i> empieza por <i>$prefijo</i>?" ?>"</dt>
        <dd><?= ($empiezaPor? "SÍ": "NO") ?></dd>
        <?php endif?>
    </dl>
    <?php
  $url = 'http://username:password@hostname:9090/path?arg=value';
  $parts = parse_url($url);
  ?>
    <hr>
    <h3>Parsear http://username:password@hostname:9090/path?arg=value</i></h3>
    <dl>
        <dt>Protocolo</dt>
        <dd><?= $parts["scheme"] ?></dd>
        <dt>Nombre del usuario</dt>
        <dd><?= $parts["user"] ?></dd>
        <dt>Path</dt>
        <dd><?= $parts["path"] ?></dd>
        <dt>Querystring</dt>
        <dd><?= $parts["query"]; ?></dd>
    </dl>
</body>

</html>