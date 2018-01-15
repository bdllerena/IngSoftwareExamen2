<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Producto</title>
  </head>
  <body>
<header>
  <h2>formulario</h2>
</header>
<form class="" action="index.php" method="get">
<input type="text" name="id" value="" placeholder="id">
<input type="text" name="name" value="" placeholder="name">
<input type="text" name="price" value="" placeholder="st">
<input type="text" name="stock" value="" placeholder="stock">
   <select class="" name="opcion" id="opcion">
     <option value="crear">crear</option>
     <option value="leer">leer</option>
     <option value="actualizar">actualizar</option>
     <option value="borrar">borrar</option>
   </select>
   <br>
</script>
   <input type="submit" name="guardar" value="enviar">
</form>
  </body>
  <?php
  $usuario='root';
  $contraseña="";

  $id=$_POST['id'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $stock=$_POST['stock'];

  $opcion=$_POST['opcion'];

  try {
    $conexion = new PDO('mysql:host=localhost;dbname=programacionavanzada', $usuario, $contraseña);

    if($opcion=='leer'){
      $result=$conexion->query("select *from productos;");
      foreach ($result as $fila) {
      echo "id: ".$fila[0]." name : ".$fila[1]." price".$fila[2]." stock ".$fila[3];
echo"<br>";
      }
    }


  } catch (PDOException $e) {
    echo "El error es"+$e->getMessage();
  }

   ?>
</html>
