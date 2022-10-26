<?php

require_once('Pantalla.php');

$pantalla = new Pantalla(300,400,"blanca");

echo $pantalla;

$pantalla->encender();

echo $pantalla;