<?php
include 'simpletest/autorun.php';
include 'include/Dbconfig.php';


class pruebasUnitarias extends UnitTestCase{
	function testPruebasUnitarias1()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","","producto");
		$this->assertEqual($c, $con->__construct());
	}

	function testPruebasUnitarias2()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","selena","","producto");
		$this->assertEqual($c, $con->__construct());
	}

	function testPruebasUnitarias3()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","123","producto");
		$this->assertEqual($c, $con->__construct());
	}

	function testPruebasUnitarias4()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","","usuarios");
		$this->assertEqual($c, $con->__construct());
	}

	function testPruebasUnitarias5()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","selena","123","usuarios");
		$this->assertEqual($c, $con->__construct());
	}
}
?>
