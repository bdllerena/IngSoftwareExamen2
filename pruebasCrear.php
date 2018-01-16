<?php
include 'simpletest/autorun.php';
include 'include/Dbconfig.php';


class pruebasUnitariasC extends UnitTestCase{
	function testPruebasUnitarias1()
	{
		$con = new DbConfig();
		$c = mysqli_connect("localhost","root","","producto");
		$this->assertEqual($c, $con->__construct());
	}



}
?>
