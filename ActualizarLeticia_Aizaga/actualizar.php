<?php
	$interaccionbdd="";
	$cnne=mysql_connect("localhost","root","");	// conectarse al motor de la base de datos
	$bdd=mysql_select_db("producto",$cnne);		// abrir la base de datos
	$id=


	function actualizar($, $arg_2, /* ..., */ $arg_n)
	{
    echo "Función de ejemplo.\n";
    return $valor_devuelto;
	}

	if(isset($_REQUEST['btnActualizar']))
	{
		$sql="UPDATE product SET stock='" .$nombre . "', clave='" .$clave . "', estado='" .$estado . "' where codigo="
		.  $_REQUEST['txtCodigo'] ;

		$interaccionbdd=" actualizar / modificar ";
		echo "<br> sentencia sql de " . $interaccionbdd . " ---> " . $sql ;
	}
?>
