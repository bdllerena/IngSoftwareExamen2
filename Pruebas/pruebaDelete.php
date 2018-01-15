
  <?php
    $usuario='root';
     $contraseña="";

    $id=$_POST['id'];
    //$name=$_POST['name'];
    //$price=$_POST['price'];
    //$stock=$_POST['stock'];
    $enviar=$_POST['enviar'];

    
    try {
      $conexion = new PDO('mysql:host=localhost;dbname=producto', $usuario, $contraseña);
      if($opcion=='borrar'){
//pruebas unitarias delete elemento uno
          $idActual=1;
          $bandera=0;
          $result=$conexion->query("select * from product where id='$idActual';");
          foreach ($result as $fila) {
          $bandera=$fila[0];
        }
        if($bandera!=0)
        {
          $consulta="delete FROM producto where id='$idActual'";
          $result=$conexion->query($consulta);
          echo "Se elemino el registro solicitado";
        }
        else{
          echo "No se encuentra dicho codigo";
        }
//pruebas unitarias delete elemento random
          $idActual=20;
          $bandera=0;
          $result=$conexion->query("select * from product where id='$idActual';");
          foreach ($result as $fila) {
          $bandera=$fila[0];
        }
        if($bandera!=0)
        {
          $consulta="delete FROM producto where id='$idActual'";
          $result=$conexion->query($consulta);
          echo "Se elemino el registro solicitado";
        }
        else{
          echo "No se encuentra dicho codigo";
        }
//pruebas unitarias delete elemento inexistente
         $idActual=0;
          $bandera=0;
          $result=$conexion->query("select * from product where id='$idActual';");
          foreach ($result as $fila) {
          $bandera=$fila[0];
        }
        if($bandera!=0)
        {
          $consulta="delete FROM producto where id='$idActual'";
          $result=$conexion->query($consulta);
          echo "Se elemino el registro solicitado";
        }
        else{
          echo "No se encuentra dicho codigo";
        }
//pruebas unitarias delete letras
         $idActual='uno';
          $bandera=0;
          $result=$conexion->query("select * from product where id='$idActual';");
          foreach ($result as $fila) {
          $bandera=$fila[0];
        }
        if($bandera!=0)
        {
          $consulta="delete FROM producto where id='$idActual'";
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