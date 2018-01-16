<?php
include 'simpletest/autorun.php';
include 'include/funciones.php';


class testUpdate extends UnitTestCase{

  function testCase1_VerifyProductExist()
	{
    $funciones = new funciones();
    //$id=$funciones->escape_string("1");
    $id="1";
    $result = $funciones->getData("SELECT * FROM product WHERE id=$id");
    //$result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$check= $this->assertEqual(sizeof($result), 1); // Let us check that function returns 1 data found
	}
  function testCase1_Update()
	{
    $funciones = new funciones();
    $stock= 20;
    $id="1";
    $result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$this->assertEqual($result, true); // Let us check that function returns 1 data found
	}
  function testCase1_VerifyChangeStock()
	{
    $funciones = new funciones();
    $stockExpected= 29;
    $id="1";
    $result1 = $funciones->execute("UPDATE product SET stock='$stockExpected' WHERE id=$id");
    $result2 = $funciones->getData("SELECT * FROM product WHERE id=$id");
    foreach ($result2 as $res) {
        $stockActual = $res['stock'];
    }
		$this->assertEqual($stockActual, $stockExpected); // Let us check that function returns 1 data found
	}


  function testCase2_VerifyProductExist()
	{
    $funciones = new funciones();
    //$id=$funciones->escape_string("1");
    $id="2";
    $result = $funciones->getData("SELECT * FROM product WHERE id=$id");
    //$result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$check= $this->assertEqual(sizeof($result), 1); // Let us check that function returns 1 data found
	}
  function testCase2_Update()
	{
    $funciones = new funciones();
    $stock= 8;
    $id="2";
    $result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$this->assertEqual($result, true); // Let us check that function returns 1 data found
	}
  function testCase2_VerifyChangeStock()
	{
    $funciones = new funciones();
    $stockExpected= 13;
    $id="2";
    $result1 = $funciones->execute("UPDATE product SET stock='$stockExpected' WHERE id=$id");
    $result2 = $funciones->getData("SELECT * FROM product WHERE id=$id");
    foreach ($result2 as $res) {
        $stockActual = $res['stock'];
    }
		$this->assertEqual($stockActual, $stockExpected); // Let us check that function returns 1 data found
	}


  function testCase3_VerifyProductExist()
	{
    $funciones = new funciones();
    //$id=$funciones->escape_string("1");
    $id="3";
    $result = $funciones->getData("SELECT * FROM product WHERE id=$id");
    //$result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$check= $this->assertEqual(sizeof($result), 1); // Let us check that function returns 1 data found
	}
  function testCase3_Update()
	{
    $funciones = new funciones();
    $stock= 8;
    $id="3";
    $result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$this->assertEqual($result, true); // Let us check that function returns 1 data found
	}
  function testCase3_VerifyChangeStock()
	{
    $funciones = new funciones();
    $stockExpected= 15;
    $id="3";
    $result1 = $funciones->execute("UPDATE product SET stock='$stockExpected' WHERE id=$id");
    $result2 = $funciones->getData("SELECT * FROM product WHERE id=$id");
    foreach ($result2 as $res) {
        $stockActual = $res['stock'];
    }
		$this->assertEqual($stockActual, $stockExpected); // Let us check that function returns 1 data found
	}


  function testCase4_VerifyProductExist()
	{
    $funciones = new funciones();
    //$id=$funciones->escape_string("1");
    $id="4";
    $result = $funciones->getData("SELECT * FROM product WHERE id=$id");
    //$result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$check= $this->assertEqual(sizeof($result), 0); // Let us check that function returns 1 data found
	}
  function testCase4_Update()
	{
    $funciones = new funciones();
    $stock= 8;
    $id="4";
    $result = $funciones->execute("UPDATE product SET stock='$stock' WHERE id=$id");
		$this->assertEqual($result, false); // Let us check that function returns 1 data found
	}
  function testCase4_VerifyChangeStock()
	{
    $funciones = new funciones();
    $stockExpected= null;
    $id="4";
    $result1 = $funciones->execute("UPDATE product SET stock='$stockExpected' WHERE id=$id");
    $result2 = $funciones->getData("SELECT * FROM product WHERE id=$id");
    foreach ($result2 as $res) {
        $stockActual = $res['stock'];
    }
		$this->assertEqual($stockActual, $stockExpected); // Let us check that function returns 1 data found
	}

}
?>
