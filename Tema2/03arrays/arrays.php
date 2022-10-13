<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Desarrollo web con PHP 7 y MVC</title>
<meta name="description" content="PHP, MVC">
<meta name="author" content="Víctor Ponz">
<style type='text/css'>
dt{
  font-weight:bold;
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
  $nombres = array("Pedro", "Juan", "Andrés", "Víctor", "Mireia");
  $nombresA = array(array("id"=>1, "nombre"=>"Pedro", "edad"=>23),
                    array("id"=>2, "nombre"=>"Juan", "edad"=>18),
                    array("id"=>3, "nombre"=>"Andrés", "edad"=>20),
                    array("id"=>4, "nombre"=>"Víctor", "edad"=>23),
                    array("id"=>5, "nombre"=>"Mireia", "edad"=>24));
  $reverse = array_reverse($nombres);
  $soloNombres = array_column( $nombresA , "nombre");
  $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
 ?>
 <h3>El array <i>$nombres</i>:</h3>
 <dl>
   <dt>Valores</dt>
   <dd> <?php print_r($nombres);?></dd>

  <dt>Longitud</dt>
  <dd><?= count($nombres) ?></dd>
  <dt>Concatenados</dt>
  <dd><?= implode(" ", $nombres) ?></dd>
  <?php   asort($nombres); ?>
  <dt>Ordenados</dt>
  <dd><?= implode(" ", $nombres) ?></dd>
  <dt>Al revés</dt>
  <dd><?= implode(" ", $reverse) ?></dd>
  <dt>Posición</dt>
  <dd><?= array_search("Víctor", $nombres) ?></dd>
</dl>
<table>
  <thead>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Edad</th>
  </tr>
 </thead>
 <?php foreach($nombresA as $nombre):?>
 <tr>
    <?php foreach($nombre as $valor):?>
      <td><?=$valor?></td>
    <?php endforeach ?>
 </tr>
<?php endforeach ?>
</table>
<p>array_column</p>
<?php foreach($soloNombres as $value):?>
  <?=$value?><br>
<?php endforeach ?>
<p>Array de números</p>
<?php print_r($numeros);?>
<?="<br>Suma: " . array_sum($numeros)?>
</body>
</html>
