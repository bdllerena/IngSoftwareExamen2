<?php
 include 'simpletest/autorun.php';
 include 'include/funciones.php'; 
 
 class pruebasUnitarias extends UnitTestCase{
 	function testNodevuelvedatos()
 	{
 		$Data = new getData("select * from usuario");
		$expect_Result=false;
 		$this->assertEqual($expect_Result, $Data);
 	}
	function testEjecutaleer()
 	{
 		$Data = new execute("select * from producto;");
		$expect_Result=true;
 		$this->assertEqual($expect_Result, $Data);
 	}
	
	function testNoejecutaleer()
 	{
 		$Data = new execute("select * from users;");
		$expect_Result=false;
 		$this->assertEqual($expect_Result, $Data);
 	}
  }
?>