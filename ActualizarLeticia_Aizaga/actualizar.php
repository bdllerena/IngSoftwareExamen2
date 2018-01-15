
<?php
	$interaccionbdd="";

	$cnne=mysql_connect("localhost","root","");	// conectarse al motor de la base de datos
	$bdd=mysql_select_db("espe",$cnne);		// abrir la base de datos

	// ---------------------CRUD A LA BASE DE DATOS -----------------------------------------------

	if(isset($_REQUEST['btnGuardar']))
	{
		$sql="insert into usuario (nombre, clave, estado, codigoMD5) values('" .$nombre  . "','" .$clave ."','".$estado ."','".$codigoMD5 ."')";
		$interaccionbdd="guardar";
	}

	if(isset($_REQUEST['btnActualizar']))
	{
		$sql="UPDATE product SET stock='" .$nombre . "', clave='" .$clave . "', estado='" .$estado . "' where codigo="
		.  $_REQUEST['txtCodigo']  ;

		$interaccionbdd=" actualizar / modificar ";
		echo "<br> sentencia sql de " . $interaccionbdd . " ---> " . $sql ;
	}
?>
