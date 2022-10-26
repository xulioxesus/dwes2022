<?php

$descripciones = array(
    "Juan" => "Es una persona maravillosa",
    "María" => "Es una buena persona",
    "Andrés" => "Es estupendo",
    "Berta" => "Es la mejor persona de todo el universo");

function cmp($a, $b)
{
    $longitudA = strlen($a);
    $longitudB = strlen($b);
    if ($longitudA == $longitudB) {
        return 0;
    }
    return ($longitudA < $longitudB) ? -1 : 1;
}

uasort($descripciones, 'cmp');
print_r($descripciones);
