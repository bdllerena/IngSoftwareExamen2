<?php

function conexion(){
	//$user = "php";
	//$password = "m3ywW5QFN7HLvJua";
	$user = "root";
	$password = "";
	$servidor = "localhost";
	$db = "productos";
	$c = mysqli_connect($servidor,$user,$password,$db);
	//mysqli_set_charset($c,"utf8");
	return $c;
}

//PRUEBAS UNITARIAS DE DELETE
 function eliminacionDeProducto($id){
 	$bandera= eliminar();
 	if(bandera==true)
 	{
 		
 	}
 	else
 	{
 		
 	}


 }

?>