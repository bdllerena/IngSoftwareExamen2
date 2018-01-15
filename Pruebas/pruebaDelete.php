
  <?php
    $usuario='root';
     $contraseña="";

    $id=$_POST['id'];
    //$name=$_POST['name'];
    //$price=$_POST['price'];
    //$stock=$_POST['stock'];
    $enviar=$_POST['enviar'];

    //pruebas unitarias delete 1
    try {
      $conexion = new PDO('mysql:host=localhost;dbname=producto', $usuario, $contraseña);
      if($opcion=='borrar'){
          $bandera=0;
          $result=$conexion->query("select * from producto where id='1';");
          foreach ($result as $fila) {
          $bandera=$fila[0];
        }
        if($bandera!=0)
        {
          $consulta="delete FROM producto where id='$id'";
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