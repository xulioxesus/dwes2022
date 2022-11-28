<?php

class Formulario{

    private $nombre;
    private $apellidos;
    private $dni;
    private $accion;
    private $nombreFicheroFormulario;

    function __construct($nombre, $apellidos, $dni, $accion, $nombreFicheroFormulario){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->accion = $accion;
        $this->nombreFicheroFormulario = $nombreFicheroFormulario;
    }

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value): self {
		$this->nombre = $value;
		return $this;
	}

    public function getApellidos() {
		return $this->apellidos;
	}

	public function setApellidos($value): self {
		$this->apellidos = $value;
		return $this;
	}

    public function getDni() {
		return $this->dni;
	}

	public function setDni($value): self {
		$this->dni = $value;
		return $this;
	}

    public function getAccion() {
		return $this->accion;
	}

	public function setAccion($value): self {
		$this->accion = $value;
		return $this;
	}

    public function getNombreFicheroFormulario() {
		return $this->nombreFicheroFormulario;
	}

	public function setNombreFicheroFormulario($value): self {
		$this->nombreFicheroFormulario = $value;
		return $this;
	}

    public function getViewEmpty(){
        $contenidoFichero = file_get_contents($this->nombreFicheroFormulario);

        $contenidoFichero = str_replace("placeHolderAction","",$contenidoFichero);
        $contenidoFichero = str_replace("placeholderNombre","",$contenidoFichero);
        $contenidoFichero = str_replace("placeholderDNI","",$contenidoFichero);
        $contenidoFichero = str_replace("placeholderApellidos","",$contenidoFichero);
        
        return $contenidoFichero;
    }

    public function getView(){
        $contenidoFichero = file_get_contents($this->nombreFicheroFormulario);

        $contenidoFichero = str_replace("placeHolderAction",$this->accion,$contenidoFichero);
        $contenidoFichero = str_replace("placeholderNombre",$this->nombre,$contenidoFichero);
        $contenidoFichero = str_replace("placeholderDNI",$this->dni,$contenidoFichero);
        $contenidoFichero = str_replace("placeholderApellidos",$this->apellidos,$contenidoFichero);
        
        return $contenidoFichero;
    }

    public function __toString(){
        return $this->getView();
    }
}