  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Borrado</title>
    </head>
  <body>
    <header>
      <h2>Borrado</h2>
    </header>
    <form class="" action="" method="post">

      <label>Ingrese el Id del Producto: </label>
      <input type="text" name="id" value="" placeholder="Id" id="id">
      <br><br>
      <input type="submit" name="enviar" value="enviar" id="enviar">
    </form>
  </body>
  <?php
    $usuario='root';
     $contraseña="";

    $id=$_POST['id'];
    //$name=$_POST['name'];
    //$price=$_POST['price'];
    //$stock=$_POST['stock'];
    $enviar=$_POST['enviar'];

    try {
      $conexion = new PDO('mysql:host=localhost;dbname=product', $usuario, $contraseña);
      if($enviar=='enviar'){
        $bandera=0;
        $result=$conexion->query("select *from product where id='$id';");
        foreach ($result as $fila) {
        $bandera=$fila[0];
      }
      if($bandera!=0)
      {
        $consulta="delete FROM product where id='$id'";
        $result=$conexion->query($consulta);
        echo "Se elemino el registro solicitado";
      }
      else{
        echo "No se encuentra dicho codigo";
      }
      }
    } catch (PDOException $e) 
    {
      echo "El error es"+$e->getMessage();
    }
  ?>
  
</html>
