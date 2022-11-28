<?php

function isPar($valores){
    $resultado = array();

    for ($i=0; $i < count($valores); $i++) {

        if (is_int($valores[$i]) && $valores[$i] % 2 == 0){
            $resultado[] = true;
        }else{
            $resultado[] = false;
        }

    }

    return $resultado;
}

function isImpar($valores){
    $resultado = array();

    for ($i=0; $i < count($valores); $i++) {
        
        if (is_int($valores[$i]) && $valores[$i] % 2 != 0){
            $resultado[] = true;
        }else{
            $resultado[] = false;
        }

    }

    return $resultado;
}

$arrayCualquiera = array(4,7,4.5,"hola");

var_dump(isPar($arrayCualquiera));
var_dump(isImpar($arrayCualquiera));