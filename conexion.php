  <?php  
    $usuario="root";
	$password="291121okayj";
	$servidor="localhost";
	$nombrebasedatos="pokedex";
	$con= new mysqli($servidor,$usuario,$password,$nombrebasedatos)or die("error de conexion".mysql_error());