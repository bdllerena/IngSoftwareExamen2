<?php

class Producto
{
	//atributos
	private $nombre;
    private $precio;
    private $stock;
	//constructor
	public function __construct($nombre, $precio, $stock)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }
    //metodos
    function guardar($nombre, $precio, $stock)
    {
        $cnn=mysqli_connect("localhost","root",""); // conectarse al motor de la base de datos
        $bdd=mysqli_select_db($cnn,"espe"); 
    	$sql="insert into producto (name, price, stock) values('" . $nombre    . "'," .  $precio  .", ".$stock.")";
		$interaccionbdd="guardar";
        echo $interaccionbdd
		$ejecuta=mysqli_query($cnn, $sql);
    }
}