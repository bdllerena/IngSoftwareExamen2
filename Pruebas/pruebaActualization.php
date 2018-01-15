<?php
function conexion_bdd()
	{

	$user = "root";
	$password = "psicotronica1995";
	$servidor = "localhost";
	$db = "productos";
	$c = mysqli_connect($servidor,$user,$password,$db); // cadena de conexion`
	mysqli_set_charset($c,"utf8");  // instruccion para que se visualice tildes, caracteres especiales
	return $c;

	}

	


?>
