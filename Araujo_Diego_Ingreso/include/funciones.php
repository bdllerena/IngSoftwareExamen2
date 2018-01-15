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
    function guardar($nombre, $precio, $stock, $cnn)
    {

    	$sql="insert into producto (name, price, stock) values('" . $nombre    . "'," .  $precio  .", ".$stock.")";
		$interaccionbdd="guardar";
		$ejecuta=mysqli_query($cnn, $sql);
        echo "se ejecuto";
    }
}