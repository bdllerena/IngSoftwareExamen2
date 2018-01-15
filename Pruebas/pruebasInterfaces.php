function conexion_bdd()
	{

	$user = "root";
	$password = "";
	$servidor = "localhost";
	$db = "espe";
	$c = mysqli_connect($servidor,$user,$password,$db); // cadena de conexion`
	mysqli_set_charset($c,"utf8");  // instruccion para que se visualice tildes, caracteres especiales
	return $c;

	}
