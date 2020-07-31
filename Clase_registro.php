<?php 

 class Registro{

 	 public $nombre;
 	 public $apellido;
 	 public $cedula;
 	 public $correo;
 	 public $direccion;

 	function __construct($nombre,$apellido,$cedula,$correo,$direccion){

 		$this->nombre = $nombre;
 		$this->apellido = $apellido;
 		$this->cedula = $cedula;
 		$this->correo = $correo;
 		$this->direccion = $direccion;
 	}
 }
 ?>