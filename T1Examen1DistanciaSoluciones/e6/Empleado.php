<?php

class Empleado{
    private $dni;
    private $sueldo;

    public function __construct($dni,$sueldo){
        $this->dni = $dni;
        $this->sueldo = $sueldo;
    }

    public function __get($name)
    {
   
       if (isset($this->$name)) {
        return $this->$name;
       }
   
       return null;
    }

    public function __set($name, $value){
        if(isset($this->$name)){
            $this->$name = $value;
        }
    }

    public function __toString(){
        return "DNI: " . $this->dni . " Sueldo: " . $this->sueldo;
    }
}