<?php

$tabla = "alumnos";

$campos = array("nombre" => "Juan", "apellidos" => "Martínez");

function insert($tabla, $campos){
    $claves = array_keys($campos);

    $stringClaves = implode(',',$claves);
    $stringValores = implode(', :',$claves);
    $sql = "insert into %s (%s) values (:%s);";

    $resultado = sprintf($sql, $tabla, $stringClaves, $stringValores);

    return $resultado;
}

echo insert($tabla,$campos);