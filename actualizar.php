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
    <legend>DATOS PRODUCTO</legend>

<!-- ELEMENTO INPUT -->
  Clave:<br>
  <input type="text" name="txtId" >
  <br><br>
  Código MD5:<br>
  <input type="text" name="txtStock" value ="qwertyuio9" >
  <br><br>
  <input type="submit" value="Guardar" name="btnGuardar">
  <br><br>
  Actualizar=ingrese los datos a modificarse
  <br>
  Eliminar= ingrese solamente el codigo del registro o tupla a eliminarse
  <br><br>
  Ingrese el codigo del registro o tupla para actualizar o eliminar aqui ---->
  <input type="text" name="txtCodigo" value="">
  <br><br>
  <input type="submit" value="Actualizar"  name="btnActualizar">
  <input type="submit" value="Eliminar" name="btnEliminar">
  </fieldset>

</form>

</body>

</html>

<?php
	$interaccionbdd="";
	$nombre=$_REQUEST['txtNombre'];
	echo "<br> El nombre ingresado es: ". $nombre;
	$clave=$_REQUEST['txtClave'];
	echo "<br> La clave ingresada es: ". $clave;
	$estado=$_REQUEST['rbestado'];
	echo "<br> El estado seleccionado es ". $estado;
	$codigoMD5=$_REQUEST['txtCodigoMD5'];
	echo "<br> El codigo MD5 generado es ". $codigoMD5;

	$cnne=mysql_connect("localhost","root","psicotronica1995");	// conectarse al motor de la base de datos
	$bdd=mysql_select_db("espe",$cnne);		// abrir la base de datos

	// ---------------------CRUD A LA BASE DE DATOS -----------------------------------------------

	if(isset($_REQUEST['btnGuardar']))
	{
		$sql="insert into usuario (nombre, clave, estado, codigoMD5) values('" .$nombre  . "','" .$clave ."','".$estado ."','".$codigoMD5 ."')";
		$interaccionbdd="guardar";
	}

	if(isset($_REQUEST['btnActualizar']))
	{
		$sql="UPDATE usuario SET nombre='" .$nombre . "', clave='" .$clave . "', estado='" .$estado . "', codigoMD5='" . $codigoMD5 . "' where codigo="
		.  $_REQUEST['txtCodigo']  ;

		$interaccionbdd=" actualizar / modificar ";
		echo "<br> sentencia sql de " . $interaccionbdd . " ---> " . $sql ;
	}
?>
