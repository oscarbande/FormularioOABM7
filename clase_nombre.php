<?php 

class Oscar{
    public $cedula;
    public $nombre;
    public $apellido;
    public $edad;


	function __construct($cedula, $nombre, $apellido, $edad){

     	$this->cedula = $cedula;
     	$this->nombre = $nombre;
     	$this->apellido = $apellido;
     	$this->edad = $edad;

	}
   
}

?>