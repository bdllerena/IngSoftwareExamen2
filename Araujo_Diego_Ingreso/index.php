
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
  Nombre:<br>
  <input type="text" name="txtNombre" >
  <br>
  precio:<br>
  <input type="text" name="txtPrecio" value="">
  <br>
  stock: <br>
  <input type="text" name="txtMax">
  <br>

  <br><br>
    
  <input type="submit" value="Guardar" name="btnGuardar">
  
  </fieldset>
   
</form> 


</html>

<?php
	include("include/funciones.php");
	//variables
	$interaccionbdd="";
	$codigo=$_REQUEST['txtCodigo'];
	$nombre=$_REQUEST['txtNombre'];
	$precio=$_REQUEST['txtPrecio'];
	$max=$_REQUEST['txtMax'];


	
	
	$cnn=mysqli_connect("localhost","root","1234");	// conectarse al motor de la base de datos
	$bdd=mysqli_select_db($cnn,"espe");			// abrir la base de datos
	$prod=new Producto($nombre, $precio, $stock);
	

	
	if(isset($_REQUEST['btnGuardar']))
	{
		
		
		$prod->guardar($nombre, $precio, $max, $cnn);

	}
	
	

?>