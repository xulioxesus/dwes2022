<?php

require_once("Formulario.php");

$form = new Formulario("Julio", "León", "123456789A", "guardar.php", "form.html");

echo $form->getViewEmpty();
echo $form->getView();
echo $form;