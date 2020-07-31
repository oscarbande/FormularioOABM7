<?php 

class Estudiante{
  
  public $institucion;
  public $grado;
  public $seccion;
  public $nombre;
 	
 	function __construct ($institucion;$grado;$seccion;$nombre){

 		$this->institucion = $institucion;
 		$this->grado = $grado;
 		$this->seccion = $seccion;
 		$this->nombre = $nombre;
 	}
}
 ?>