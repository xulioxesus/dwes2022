<?php

$cars = array ( array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2), array("Land Rover",17,15) );

echo "<table>\n";
for ($i=0; $i < count($cars); $i++) { 

    $fila = $cars[$i];

    if (strlen($fila[0]) > 4 && $fila[2] > 10){
        echo "<tr>";
        echo "<td>" .$fila[0]."</td>";
        echo "<td>" .$fila[1]."</td>";
        echo "<td>" .$fila[2]."</td>";
        echo "</tr>\n";
    }
    
    # code...
}
echo "</table>\n";