<?php

require_once("Empleado.php");

class Gerente extends Empleado{
    public function __construct($dni){
        parent::__construct($dni,100000);
    }

    public function reunirse(){
        echo "Estoy reunido";
    }

    public function __toString(){
        return "Gerente - " . parent::__toString();
    }

}