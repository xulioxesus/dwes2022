<?php

$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');

echo '<ul>'.PHP_EOL;
foreach ($color as $key => $value) {
    echo sprintf("<li><a href='%s'>%s</a></li>\n",$value,$key);
}
echo '</ul>'.PHP_EOL;