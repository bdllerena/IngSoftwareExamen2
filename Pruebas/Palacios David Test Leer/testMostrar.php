<?php
  function TestMostrarCorrecto(){
	 if ( $opcion == 'leer' ){
	    $Expect_Result = 'leer';
	    $Actual_Result= $opcion;
	    if($Actual_Result == $Expect_Result){
		echo "Correcto";
	    }else{
 		echo "Incorrecto";
	    }
            $result = $ conexion -> query ( " select * from productos; " );
            foreach ( $ result  as  $ fila ) {
            echo  " id: " . $ fila [ 0 ] . " nombre: " . $ fila [ 1 ] . " precio " . $ fila [ 2 ] . " stock " . $ fila [ 3 ]; 
            echo " <br> " ;
      }
    }
  }
?>