<?php
	$alumnos = [
		["nombre" => "Pepe", "edad" => 20],
		["nombre" => "Pedro", "edad" => 21],
		["nombre" => "Andrés", "edad" => 22],
		["nombre" => "Ana", "edad" => 23],
		["nombre" => "Lola", "edad" => 20]
	];
	print_r($alumnos);

	
	$filtrarPor = strtolower($_GET["filtrarPor"] ?? "");
	
	
	$filtrados = array_filter($alumnos, 
		function($alumno) use ($filtrarPor){
			return strpos(strtolower($alumno["nombre"]), $filtrarPor) !== false;
		});

	print_r($filtrados);
?>
