<?php
include 'simpletest/autorun.php';
include 'include/Dbconfig.php';


class pruebasUnitarias extends UnitTestCase{
	function testPruebasUnitariasPrecio()
	{
		$id=1234;
		$con = "12.90";
		$sql="select precio from product where codigo LIKE '" .$id. "%'";
		$rs=mysqli_query($cnn,$sql);
		$this->assertEqual($c, $con->__construct());
	}
	function testPruebasUnitariasnombre()
	{
		$id=1234;
		$con = "teclado";
		$sql="select nombre from product where codigo LIKE '" .$id. "%'";
		$rs=mysqli_query($cnn,$sql);
		$this->assertEqual($c, $con->__construct());
	}
	function testPruebasUnitariasStock()
	{
		$id=1234;
		$con = 9;
		$sql="select stock from product where codigo LIKE '" .$id. "%'";
		$rs=mysqli_query($cnn,$sql);
		$this->assertEqual($c, $con->__construct());
	}
	function testPruebasUnitariasLetras()
	{
		$id=1234;
		$con = "12sda";
		$sql="select nombre from product where codigo LIKE '" .$id. "%'";
		$rs=mysqli_query($cnn,$sql);
		$this->assertEqual($c, $con->__construct());
	}
	function testPruebasUnitariasNumeros()
	{
		$id=1234;
		$con = "12sda";
		$sql="select nombre from product where codigo LIKE '" .$id. "%'";
		$rs=mysqli_query($cnn,$sql);
		$this->assertEqual($c, $con->__construct());
	}

}
?>
