<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
print_r($my_array);
//Aplicar la función strelen a cada elemento del arrary
$new_array = array_map('strlen', $my_array);

echo "El tamaño mínimo es " . min($new_array) . "<br>";
echo "El tamaño máximo es " . max($new_array).'.';
?>

