<?php
// incluimos la base de datos
include_once("include/funciones.php");


$funciones = new funciones();

if(isset($_POST['update']))
{
	$id = $funciones->escape_string($_POST['id']);
	$stock = $funciones->escape_string($_POST['txtStock']);

        //actualizamos la tabla
        $result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
        
        //redireccionamos a la pagina index.php
        header("Location: index.php");

}
?>
