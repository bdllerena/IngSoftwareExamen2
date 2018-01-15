<?php

	$stock=$_REQUEST['txtMax'];
	$cnn=mysqli_connect("localhost","root","");	
	$bdd=mysqli_select_db($cnn,"producto");
	$stockDB="";

	 function consultar($codigo,$cnn){
	 	$flag=0;
    
        $sql="select * from product where codigo LIKE '" .$codigo. "%'";
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
               $stockDB= stripslashes($cursor["stock"]) ;  

          flag=1;
            
        }
    } 
    return $flag;   
    }

function testVisualizar($codigo,$cnn,$stock,$stockDB) {
	$resultado="";
  if(consultar($codigo,$cnn)){
    
    if($stock==$stockBD){

   resultado="correcto";
    }else{

    	resultado="incorrecto";
    }

  }
  echo resultado;

}
$stockDQ="3";
$codigoDQ="1";
testVisualizar($codigoDQ,$cnn,$stockDQ,$stockDB);
?>