<?php 

    include("clasedb.php");
    extract($_REQUEST);
    $db=new clasedb(); // yo no tengo lo que va en la clasedb profe por eso no puedo conectar a la base de datos

    $conex=$db->conectar();
 //sql para crear tabla de inmuebles
 //$sql="CREATE TABLE inmueble(id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem VARCHAR(50) NOT NULL, estacionamiento ENUM('SI','NO'), status ENUM('Ocupado','Desocupado','Mantenimiento'), tipo ENUM('Casa',Apartamento',Chalet','Quinta','Otro'),cod_postal VARCHAR(5));";
//echo $sql;

 //$result=mysql_query($conex,$sql);
 //if ($result) {
 	//echo "tabla creada con exito";
 	//$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";
 	//$result=mysql_query($conex,$sql)
 	//if ($result) {
 		//echo "Y se logro asignar el atributo UNIQUE al campo idem";
 	//}else{
 		//echo "sin embargo no se logro asignar el atributo UNIQUE al campo idem";
 	//}
 //} else {
 	//echo "la tabla no pudo ser creada";
 //}

$sql="INSERT INTO inmuebles(idem,estacionamiento,status,tipo,cod_postal)";
   		VALUES('$idem','$est','$estat','$tipo','$cod_postal');



function creador_idem(){
	$cadena = "123456789";
	$maximo = 4;
	$idem = "";

	for($i = 0; $i < $maximo; $i++){
		$idem .= $cadena[rand(0,strlen($cadena)-1)];
	}

	return $idem;
}

function estacionamiento(){
	 $est="";

	 switch (rand(1,2)) {
	 	case '1':
	 		$est="SI";
	 		break;
	 	
	 	default:
	 		$est="NO";
	 		break;
	 }
	 return $est;
	}

function estatus(){
	 $estat="";

	 switch (rand(1,3)) {
	 	case '1':
	 		$estat="Ocupado";
	 		break;

	 	case '2':
	 		$estat="Desocupado";
	 		break;
	 	
	 	case '3':
	 		$estat="Mantenimiento";
	 		break;
	 }
	 return $estat;
	}

 function estatus(){
	 $tipo="";

	 switch (rand(1,5)) {
	 	case '1':
	 		$tipo="Casa";
	 		break;

	 	case '2':
	 		$tipo="Apartamento";
	 		break;
	 	
	 	case '3':
	 		$tipo="Chalet";
	 		break;


	 	case '4':
	 		$tipo="Quinta";
	 		break;


	 	case '5':
	 		$tipo="Otro";
	 		break;
	 }
	 return $tipo;
	


function codigoPostal(){
	$cadena = "123456789aimdjwpvgsyzn";
	$maximo = 4;
	$cod_postal = "";

	for($i = 0; $i < $maximo; $i++){
		$cod_postal .= $cadena[rand(0,strlen($cadena)-1)];
	}

	return $cod_postal;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registros de Condominio</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>IDEM</th>
				<th>ESTACIONAMIENTO</th>
				<th>ESTADO</th>
				<th>TIPO</th>
				<th>CODIGO POSTAL</th>
			</tr>
		</thead> 
		<?php 
		  $sql="SELECT * FROM inmueble";
		  $res=mysql_query($conex,$sql);
		  		?>
		<?php while ($reg=mysql_fetch_assoc($result)) { ?>
			
		
		<tr align="center">
			
			<td bgcolor="blue"><? $i; ?></td>
			<td><? $reg['idem']; ?></td>
			<td><? $reg['estacionamiento']; ?></td>
			<td><? $reg['status']; ?></td>
			<td><? $reg['tipo']; ?></td>
			<td><? $reg['cod_postal']; ?></td>
		</tr>
		<?php $i++; } ?>

	</table>
</body>

<body>
	<table>

		<h1>Inmuebles con estacionamiento y Desocupados</h1>
		<thead>
			<tr>
				<th>ID</th>
				<th>IDEM</th>
				<th>ESTACIONAMIENTO</th>
				<th>ESTADO</th>
				<th>TIPO</th>
				<th>CODIGO POSTAL</th>
			</tr>
		</thead> 
		<? 
		  $sql="SELECT * FROM inmueble WHERE estacionamiento='SI' AND status='Desocupado' ";
		  $result = $conex->query($sql);
		  		
		while ($row = $result->fetch_array()) {
		
		echo "<tr style='text-align: center'>";

		echo "<td>". $row[0]. "</td>";
		echo "<td>". $row[1]. "</td>";
		echo "<td>". $row[2]. "</td>";
		echo "<td>". $row[3]. "</td>";
		echo "<td>". $row[4]. "</td>";
		echo "<td>". $row[5]. "</td>";
	
        echo "</tr>";
    }
         ?>
        }
	</table>
</body>

<body>
	<table>

		<h1>Inmuebles con estacionamiento y Desocupados</h1>
		<thead>
			<tr>
				<th>ID</th>
				<th>IDEM</th>
				<th>ESTACIONAMIENTO</th>
				<th>ESTADO</th>
				<th>TIPO</th>
				<th>CODIGO POSTAL</th>
			</tr>
		</thead> 
		<? 
		  $sql="SELECT * FROM inmueble WHERE estacionamiento='NO' AND status='Desocupado' ";
		  $result = $conex->query($sql);
		  		
		while ($row = $result->fetch_array()) {
		
		echo "<tr style='text-align: center'>";

		echo "<td>". $row[0]. "</td>";
		echo "<td>". $row[1]. "</td>";
		echo "<td>". $row[2]. "</td>";
		echo "<td>". $row[3]. "</td>";
		echo "<td>". $row[4]. "</td>";
		echo "<td>". $row[5]. "</td>";
	
        echo "</tr>";
    }
         ?>
        }
	</table>
</body>
</html>