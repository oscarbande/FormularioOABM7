<?php 
 //    extract($_REQUEST);
 //    $db=new clasedb();
 //    $conex=$db->conectar();

 //   	$sql="CREATE TABLE invitados (id INT() NOT NULL PRIMARY KEY AUTO_INCREMENT, nombres VARCHAR(30), apellidos VARCHAR(40), cedula VARCHAR(10), telefono INT(20);";

 //   	$result=mysql_query($conex,$sql);

 // 	if ($result) {
	//  	echo "tabla creada con exito";
	// } else {
	//  	echo "la tabla no pudo ser creada";
	// }

	$nombre ="";
    $apellidos="";
    $cedula="";
    $telefono="";

    $nombres = array('Michael', 'Oscar', 'Jose', 'Samuel', 'Daniel', ' Maria', 'Karen', 'Daniela', 'Valeria', 'Sofia');

    $apellidos = array('Perez', 'Bande', 'Hernandez', 'Salcedo', 'Dominguez', 'Torres', 'Perdomo', 'Sanchez', 'Herrera', 'Alvarado');

    $cedulas ="123456789";
    $maximo = 9;
	$cedula = "";

	for($i = 0; $i < $maximo; $i++){
		$cedula .= $cedulas[rand(0,strlen($cedulas)-1)];
	}
	

    $nombre = $nombres[rand(0,9)];
    $apellido = $apellidos[rand(0,9)];

    print("Nombre Completo: ".$nombre." ".$apellido);

	 $tlf="";

	 switch (rand(1,5)) {
	 	case '1':
	 		$tlf="0412";
	 		break;

	 	case '2':
	 		$tlf="0424";
	 		break;
	 	
	 	case '3':
	 		$tlf="0414";
	 		break;

	 	case '4':
	 		$tlf="0416";
	 		break;

		case '5':
			$tlf="0426";
	 		break;
	 }
	

 	$numeros ="123456789";
    $maximo = 7;
	

	for($i = 0; $i < $maximo; $i++){
		$tlf .= $numeros[rand(0,strlen($numeros)-1)];
	}

	echo "$tlf";





    // $sql="INSERT INTO invitados(id, nombres,apellidos,cedula,telefono)VALUES(default, '$nombres','$apellidos','$cedula','$telefono')";




?>