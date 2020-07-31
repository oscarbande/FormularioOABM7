<?php 

$frutas=array("fresa", "manzana" , "durazno");

print_r($frutas);

echo "<br>";

echo $todas= implode(",", $frutas);

echo "<br>";

$edades = array("marco" =>34 , "sofia" =>16 );

print_r($edades);

echo "<br>";

echo $todas= implode(",", $edades);

echo "<br>";

$vehiculos=array("moto", "carro" , "barco" , "yate");

print_r($vehiculos);

echo "<br>";

echo $todas= implode(",", $vehiculos);

//Implode une los elementos de un array

 ?>