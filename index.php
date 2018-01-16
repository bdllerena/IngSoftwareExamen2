<?php
//including the database connection file
include_once("include/funciones.php");
 
$funciones = new funciones();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM product ORDER BY id DESC";
$result = $funciones->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
 
<html>
<head>    
    <title>Modalidad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
 
<body>

   <div id="particles-js">
        <div class="btext">
<!--<a href="add.html">Añadir Modalidad</a><br/><br/>-->
 
    <table width='80%' border=0 class="table table-dark">
    <tr bgcolor='#CCCCCC'>
		<td>id</td>
        <td>name</td>
		<td>price</td>
		<td>stock</td>
		<td>acciones</td>
    </tr>
    <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$res['id']."</td>";	
        echo "<td>".$res['name']."</td>";	
		echo "<td>".$res['price']."</td>";	
        echo "<td>".$res['stock']."</td>";	
        echo "<td><a href=\"add.html\"><button class=\"btn btn-info\" autofocus>Añadir Producto</button></a>|<a href=\"edit.php?id=$res[id]\"><button class=\"btn btn-warning\">Modificar</button></a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Esta seguro que desea borrar?')\"><button class=\"btn btn-danger\">Borrar</button></a>| </td>";        
    }
    ?>
    </table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS.load('particles-js', 'particles.json',
        function(){
            console.log('particles.json loaded...')
        })
    </script>
	<script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>