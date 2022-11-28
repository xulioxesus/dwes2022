<?php

require_once("Empleado.php");
require_once("Gerente.php");
require_once("Programador.php");

$empleado = new Empleado("1232145A", 25000);
$empleado->dni = "234234424";
$empleado->sueldo = 30000;
echo $empleado;

$gerente = new Gerente("1232145A");
$gerente->dni = "234424";
//$gerente->sueldo = 30000;
$gerente->reunirse();
echo $gerente;

$programador = new Programador("1232145A", "java");
$programador->dni = "23442344";
//$programador->sueldo = 30000;
$programador->programar();
echo $programador;