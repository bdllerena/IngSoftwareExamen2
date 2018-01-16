<?php
include 'simpletest/autorun.php';
include 'include/Dbconfig.php';


class pruebasUnitarias extends UnitTestCase{
	function TestConexion1()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","","producto");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion2()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","selena","","producto");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion3()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","123","producto");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion4()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","","usuarios");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexions5()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","selena","123","usuarios");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion6()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","selena","123","");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion7()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","selena","","usuarios");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion8()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","","123","usuarios");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion9()
	{
		$con = new DbConfig();
		$c = mysqli_connect("","selena","123","usuarios");
		$this->assertEqual($c, $con->__construct());
	}

	function TestConexion10()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","","","producto");
		$this->assertEqual($c, $con->__construct());
	}
}
?>
