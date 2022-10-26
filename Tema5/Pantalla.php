<?php

class Pantalla
{
    private $ancho;
    private $alto;
    private $color;
    private $estado;

    // Constructor

    public function __construct($ancho, $alto, $color){
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->color = $color;
        $this->estado = false;
    }

    // Getters
    public function getAncho(){
        return $ancho;
    }

    public function getAlto(){
        return $alto;
    }

    public function getColor(){
        return $color;
    }

    public function getEstado(){
        return $estado;
    }

    // Setters

    public function setAncho($value){
        $this->ancho = $value;
    }

    public function setAlto($value){
        $this->alto = $value;
    }

    public function setColor($value){
        $this->color = $value;
    }

    public function setEstado($value){
        $this->estado = $value;
    }

    public function encender(){
        echo "Me he encendido\n";
        $this->setEstado(true);
    }

    public function apagar(){
        echo "Me he apagado\n";
        $this->setEstado(false);
    }

    public function __toString(){
        if($this->estado)
            return $this->ancho.'x'.$this->alto.' de color '.$this->color.'y estoy encendida'.PHP_EOL;
        else
            return $this->ancho.'x'.$this->alto.' de color '.$this->color.'y estoy apagada'.PHP_EOL;
    }
}
