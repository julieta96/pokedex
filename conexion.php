  <?php  
    $usuario="admin";
	$password="12345";
	$servidor="localhost";
	$nombrebasedatos="pokedex";
	$con= new mysqli($servidor,$usuario,$password,$nombrebasedatos)or die("error de conexion".mysql_error());