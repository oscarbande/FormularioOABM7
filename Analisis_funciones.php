<?php 
  
   public function modificar(){
   	
   		extract($_REQUEST); # 
   		$db=new clasedb(); #define un objeto de class de clase db
   		$conex=$db->conectar(); #realiza la conexión a la base de datos y la almacena en una variable


   		$sql="SELECT * FROM datos_personales WHERE id=".$id_persona.""; # almacena la consulta para traer todos los datos personales en una variable

   		$res=mysqli__query($conex,$sql); #ejecuta la consulta mysql almacena el resultado en una variable

   		$data=mysqli_fetch_array($res); # almacenamos con el fetch_array los resultados de la variable res en la variable data 

   		header("Location: editar.php?data=".serialize($data)); #
   }

    public function actualizar(){
    	extract($_POST);
    	$db=new clasedb();#define un objeto de class de clase db
    	$conex=$db->conectar();#realiza la conexion a la base de datos y la almacena en una variable

    		$sql="SELECT * FROM datos_personales WHERE cedula=".$cedula" AND id<>".$id_persona; #almacena la consulta para traer todos los datos personales en una varible

	$res=mysqli_query($conex,$sql);#ejecuta la consulta mysql almacena el resultado en una variable
	
	$cant=mysql_num_rows($res) # obtenemos el numero de filas de resultado de la variable res 
	
			if ($cant>0){
              ?>
              	
              	<script type="text/javascript">
              		alert("CEDULA YA REGISTRADA");
              		window.location="PersonasControlador.php?operacion=index";
              	</script>
            <?php 
              }else{
 				$sql="UPDATE datos_personales SET nombres'".$nombres."',apellidos=".$apellidos.",cedula=".$cedula." WHERE id=".$id_persona;

 				$res=mysql_query($conex,$sql);
 					if ($res){            
             ?>
       			<script type="text/javascript">
       				alert("REGISTRO MODIFICADO");
       				window.location="PersonasControlador.php?operacion=index";
       			</script>
    		<?php 
    	} else {
            ?>
            	<script type="text/javascript">
            		alert("ERROR AL MODIFICAR EL REGISTRO");
            		window.location="PersonasControlador.php?operacion=index";
            	</script>
            	<?php 
        }
        	 
    }
} //fin de la funcion actualizar 
    ?>}
