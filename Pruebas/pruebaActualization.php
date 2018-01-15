<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>FORMULARIO HTML</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

<form action="" method="POST">

<fieldset>
    <legend>PRODUCTO</legend>

<!-- ELEMENTO INPUT -->
  ID:<br>
  <input type="text" name="txtID" >
  <br><br>
  Stock:<br>
  <input type="text" name="txtStock" >

  <br>
  <input type="submit" value="Eliminar" name="btnTest">
  </fieldset>

</form>

</body>

</html>



<?php
/*function conexion_bdd()
	{

	$user = "root";
	$password = "psicotronica1995";
	$servidor = "localhost";
	$db = "producto";
	$c = mysqli_connect($servidor,$user,$password,$db); // cadena de conexion`
	mysqli_set_charset($c,"utf8");  // instruccion para que se visualice tildes, caracteres especiales
	return $c;

}*/

	if(isset($_REQUEST['btnTest']))
	{
		$sql="UPDATE producto SET stock='" . $codigoMD5 . "' where id='" .$codigo_producto ."'";
	}


?>
