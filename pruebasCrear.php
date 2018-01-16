<?php
include 'simpletest/autorun.php';
include 'include/Dbconfig.php';


class pruebasUnitarias extends UnitTestCase{
	function testPruebasUnitariasPrecio()
	{
		$buscar = new buscar();
		$id=1234;
		$con = 12.90;
		$sql= $buscar->getData("select precio from product where codigo LIKE '" .$id. "%'");
		$this->assertEqual($con, $sql);
	}
	function testPruebasUnitariasNombre()
	{
		$buscar = new buscar();
		$id=1234;
		$con = "teclado";
		$sql= $buscar->getData("select nombre from product where codigo LIKE '" .$id. "%'");
		$this->assertEqual($con, $sql);
	}
	function testPruebasUnitariasStock()
	{
		$buscar = new buscar();
		$id=1234;
		$con = 12
		$sql= $buscar->getData("select stock from product where codigo LIKE '" .$id. "%'");
		$this->assertEqual($con, $sql);
	}
	function testPruebasUnitariasLetras()
	{
		$buscar = new buscar();
		$id=1234;
		$con = "lkij56";
		$sql= $buscar->getData("select nombre from product where codigo LIKE '" .$id. "%'");
		$this->assertEqual($con, $sql);
	}
	function testPruebasUnitariasNumeros()
	{
		$buscar = new buscar();
		$id=1234;
		$con = 345F;
		$sql= $buscar->getData("select stock from product where codigo LIKE '" .$id. "%'");
		$this->assertEqual($con, $sql);
	}

}
?>
