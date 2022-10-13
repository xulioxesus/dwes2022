<?php
$primerValor = 1; //Se iniciliza al valor neutro de la multiplicación
//Comprobamos que existe la variable y se lo asignamos a $primerValor
if (isset($_GET['x'])) {
    $primerValor = $_GET['x'];
}

// O también se hacía con el operador ternario
$primerValor = isset($_GET['x']) ? $_GET['x'] : 1;

//Pero a partir de PHP 7, se puede hacer con el operador de fusión de null
$segundoValor = $_GET['y'] ?? 1;

echo "El resultado es " . $primerValor * $segundoValor;
