<?php 

$cadena="Oscar.Alexander.Bande";

$seleccionada= explode("." , $cadena);

echo var_dump($seleccionada)."<br>";

echo "<br>";

$cadena="17/07/2020";

$seleccionada= explode("/" , $cadena);

echo var_dump($seleccionada)."<br>";
echo "<br>";


$cadena="Buenas noches,Profesor,como,esta,usted?";

$seleccionada= explode("," , $cadena);

echo var_dump($seleccionada);

//explode divide un string en varios strings  y var_dump te atrae el contenido de un arreglo.

 ?>