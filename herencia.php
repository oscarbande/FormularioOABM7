<?php 

class Productos{

	public $codigo;
	public $nombre;
	public $cantidad;
	public $enventa;

	public function __construct($codigo,$nombre,$cantidad,$enventa){
		#esta es la primera en funcion en ejecutarse se utiliza para almacenar los datos de un producto: codigo,nombre,cantidad y si el producto esta en venta.

		$this->codigo = $codigo;
		$this->nombre = $nombre;
		$this->cantidad = $cantidad;
		$this->enventa = $enventa;
		
	}
     
  	public function mostrarDatosProducto(){
   		
   		#esta funcion nos muestra los datos registrados del productos

		echo "codigo producto: ".$this->codigo."<br>";
  		echo "nombre producto: ".$this->nombre."<br>";
  		echo "cantidad: ".$this->cantidad."<br>";
  		;
  	}

	public function enVenta(){
        
        # esta funcion nos muestra si el producto esta en venta o no

		if($this->enventa){

			echo "este producto esta en venta<br>";
   
		}else{

           	echo "este producto no esta en venta<br>";

        }
	} 
}

class Viveres extends Productos{

	private $fecha_vencimiento;
	public $peso;


	public function vencido(){
		#esta funcion nos muestra si el producto esta caducado o sigue en vigencia

		if($this->fecha_vencimiento){
			echo "Este producto ha caducado<br>";
		}else{
			echo "Este producto es vigente<br>";
		}
	}

	public function cambiarPeso($peso){
		#esta funcion nos permite ingresar en el peso del producto

		$this->peso = $peso;
	}

	public function mostrarPeso(){
		#esta funcion nos muestra el peso del producto
        
		echo " el peso es: ".$this->peso."<br>";
	}
}

$pasta = new viveres('5743', 'Pasta', 50, false);

$pasta->mostrarDatosProducto();
$pasta->enVenta();
$pasta->fecha_vencimiento = true;
$pasta->vencido();
$pasta->peso = '1Kg';
$pasta->mostrarPeso();


?>