<?php
include '../simpletest/autorun.php';
include '../include/Dbconfig.php';

//Kelly Landázuri

class pruebasUnitarias extends UnitTestCase{
function testPruebasUnitariasIdMenor()
  {
    $funciones = new funciones();
    $id=12;
    $expected='true';
    $result= $funciones->delete($id,'product');
    $this->assertEqual($result, $expected, 'Prueba pasada')
  }
  function testPruebasUnitarisIdMayor()
  {
    $funciones = new funciones();
    $id=1111;
    $expected='true';
    $result= $funciones->delete($id,'product');
    $this->assertEqual($result, $expected, 'Prueba pasada')
  }
  function testPruebasUnitariasIdRandom()
  {
    $funciones = new funciones();
    $id=243;
    $expected='true';
    $result= $funciones->delete($id,'product');
    $this->assertEqual($result, $expected, 'Prueba pasada')
  }
  function testPruebasUnitariasIdCero()
  {
    $funciones = new funciones();
    $id=0;
    $expected='false';
    $result= $funciones->delete($id,'product');
    $this->assertEqual($result, $expected, 'Prueba pasada')
  }
  function testPruebasUnitariasIdNegativo()
  {
    $funciones = new funciones();
    $id=-2;
    $expected='false';
    $result= $funciones->delete($id,'product');
    $this->assertEqual($result, $expected, 'Prueba pasada')
  }
}
?>