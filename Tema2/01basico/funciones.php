<?php

function insert($tabla, $campos)
{
    $claves = array_keys($campos);

    $stringClaves = implode(',', $claves);
    $stringValores = implode(', :', $claves);
    $sql = "insert into %s (%s) values (:%s);";

    $resultado = sprintf($sql, $tabla, $stringClaves, $stringValores);

    return $resultado;
}

function insertReferencia(string $nombre, array $campos, string &$sql)
{
    $sql = str_replace("tabla", $nombre, $sql);
    $sql = str_replace("campos", implode(", ", array_keys($campos)), $sql);
    $sql = str_replace("valores", ":" . implode(", :", array_keys($campos)), $sql);
}

function getUpdates(array $parameters)
{
    $updates = "";
    $i = 0;

    foreach ($parameters as $key => $value) {
        if ($i > 0) {
            $updates .= $key . "=:" . $key . ", ";
        }
        $i++;
    }
    return substr($updates, 0, -2);
}
function update(string $nombre, array $campos): string
{

    $sql = sprintf(
        'UPDATE %s SET %s WHERE %s = :%s ',
        $nombre,
        getUpdates($campos),
        array_key_first($campos),
        array_key_first($campos)
    );
    return $sql;
}
$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");
$sql =  insert($tabla, $campos);

$sqlReferencia = "insert into tabla (campos) values (valores)";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

insertReferencia($tabla, $campos, $sqlReferencia);

$sqlUpdate = update($tabla, $campos);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Funciones</title>
<meta name="description" content="PHP, MVC">
<meta name="author" content="Víctor Ponz">
</head>
<body>
  <h2>Tabla</h2>
  <?=$tabla?>
  <h2>Campos</h2>
  <?=print_r($campos)?>
  <h2>SQL</h2>
  <?=$sql?>
  <h2>SQL por referencia</h2>
  <?=$sqlReferencia?>
  <h2>SQL update</h2>
  <?=$sqlUpdate?>
</body>
</html>


