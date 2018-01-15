<html>
<head>
    <title>Añadir Datos</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
 
<body>
<?php
//including the database connection file
include_once("include/funciones.php");
 
$funciones = new funciones();
 
if(isset($_POST['Submit'])) {   
	$nombre = $funciones->escape_string($_POST['txtNombre']);
	$precio = $funciones->escape_string($_POST['txtPrecio']);
	$stock = $funciones->escape_string($_POST['txtStock']);
    $result = $funciones->execute("INSERT INTO product (name,price,stock) VALUES('$nombre','$precio','$stock')");
        
        
    echo "<div class=\"alert alert-success\" role=\"alert\">  <strong>Logrado!</strong> Se ingreso un registro al sistema.</div>";
    echo "<br/><a href='index.php'><button class=\"btn btn-sucess\">Ver resultado</button></a>";
    
}
?>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>