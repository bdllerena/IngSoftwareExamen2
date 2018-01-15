<?php
	$id=$_REQUEST['txtCodigo'];
  $product=$_REQUEST['txtNombre'];
	$precio=$_REQUEST['txtPrecio'];
	$stock=$_REQUEST['txtMax'];
	$cnn=mysqli_connect("localhost","root","");
	$bdd=mysqli_select_db($cnn,"bdproducts");

	 function crear($codigo,$cnn){
	 	$flag=0;

        $sql="select * from producto where codigo LIKE '" .$codigo. "%'";
        $rs=mysqli_query($cnn,$sql);

        $filas=mysqli_num_rows($rs);

        if($filas==0)
        {
            return ;
        }
        else
        {
            $bandera=1;
        }
        if($bandera==1)
        {
        for($i=0; $i<$filas ; $i++)
        {
                $cursor=mysqli_fetch_array($rs);
                $codigo=stripslashes($cursor["codigo"]) ;
                $nombre=stripslashes($cursor["nombre"]);
                $precio=stripslashes($cursor["precio"]);
                $max=stripslashes($cursor["stock"]);
          flag=1;

        }
    }
    return $flag;
    }

    function testCrear($codigo,$cnn,$max,$stock) {
    	$result="";
      if(crear($codigo,$cnn)){
        result="correcto";    
      }
      echo resultado;

    }
    $stockDQ="3";
    $codigoDQ="1";
    testVisualizar($codigoDQ,$cnn,$stockDQ,$stockDB);
    ?>

}
?>
