<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

//Por nombre ascendente (key)
ksort($edades);
print_r($edades);

//Por edad ascendente (value)
asort($edades);
print_r($edades);

//Por nombre descendente (key)
krsort($edades);
print_r($edades);

//Por edad descendente (value)
arsort($edades);
print_r($edades);