<?php

require_once("Empleado.php");

class Programador extends Empleado{
    public $especialidad;
    public function __construct($dni,$especialidad){
        parent::__construct($dni,35000);
        $this->especialidad = $especialidad;
    }

    public function programar(){
        echo "Estoy programando";
    }

    public function __toString(){
        return "Programador - " . parent::__toString() . " Especialidad: " . $this->especialidad;
    }
}