
<?php
include 'simpletest/autorun.php';
include 'include/funciones.php';
class testActualizar extends UnitTestCase{

  function VerificarStock()
	{
    $stock= 5;
    $id="1";
    $funciones = new funciones();
    $actualizar= $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
    $obtener = $funciones->getData("SELECT * FROM product WHERE id=$id");
    foreach ($obtener as $res) {
        $stockDB = $res['stock'];
    }
		$this->assertEqual($stockDB, $stock); 
	}
  }
?>