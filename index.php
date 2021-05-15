<?php
 session_start();
 include('conexion.php');
   

if(isset($_SESSION['usuario'])){

	header("location:pagina-logueado.php");
	exit();
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POKEDEX</title>
	<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
 	
</head>
<body>

	<header  class="d-flex flex-col">
	  <section class="d-flex flex-row mb-5 col-6 mt-3">
		<div class="logo col-2 mx-2">
			<img src="recursos/img/logo/logo.png" width="50" height="50">
		</div>
		<div class="text-center d-inline-flex col-4 mx-5">
			<h1 class="text-center">POKEDEX</h1>
		</div>
		<form class="form-group d-flex flex-row mx-5 col-6" action="login.php" method="post">
			<input type="text" name="usuario"  class="form-control mx-2 col-1" placeholder="usuario">
			<input type="password" name="password" class="form-control mx-2 col-1" placeholder="contraseña">
			<button button type="submit" class="btn btn-primary col-4">Ingresar</button>
		</form>
	  </section>
	</header>
	<section class="d-flex flex-col mb-3 col">

		<form class="form-group d-flex flex-col col" action="index.php" method="get">
			<input type="text"  class="form-control" name="buscar" placeholder="Ingrese nombre, tipo o numero de pokemon"><button type="submit" class="btn btn-primary">Quien es este pokemon?</button>
		</form>
	 </section>

  <table class="table container">
  <thead>
    <tr>
      <th scope="col">Nro</th>
      <th scope="col">Nombre</th>
      <th scope="col">Altura</th>
      <th scope="col">Peso</th>
      <th scope="col">Habilidad</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
  	   <?php 

		$buscar = isset( $_GET["buscar"])?$_GET["buscar"] : "";
		if($buscar==""){
			$sql="SELECT * FROM Pokemons";
		}

  	   $sql="SELECT * FROM Pokemons";
  	   $result = $con->query($sql);
  	   $pokemons = Array();

  	   foreach($pokemons as $pokemon){}

  	   	if (mysqli_num_rows($result) > 0) {
   
		    while($fila = mysqli_fetch_assoc($result)) {
		        $c = Array();
		        $pokemon['id'] =  $fila["id_manual"];
		        $pokemon['nombre'] =  $fila["nombre"];
		        $pokemon['altura'] =  $fila["altura"];
		        $pokemon['peso'] =  $fila["peso"];
		        $pokemon['habilidad'] =  $fila["habilidad"];
		        $pokemon['tipo'] =  $fila["tipo"];
		        if($fila["tipo_dos"]!=null){

		        $pokemon['tipo_dos'] =  $fila["tipo_dos"];

		        }
		        $pokemon['descripcion'] =  $fila["descripcion"];
		        $pokemon['imagen'] =  $fila["imagen"];
		        $pokemons[] = $pokemon;
    		}


  		}

  		foreach ( $pokemons as $pokemon){
                    echo   "<tr>
                                <td>" . $pokemon['id'] . "</td>
                                <td>" . $pokemon['nombre'] . "</td>
                                <td>" . $pokemon['altura'] . "</td>
                                <td>" . $pokemon['peso'] . "</td>
                                <td>" . $pokemon['habilidad'] . "</td>
                                <td><img src=recursos/img/pokemons/tipo/" .$pokemon['tipo']. ".png width=70 height=70>";

	                            if($pokemon["tipo_dos"]!=null){

			        			  echo" <img src=recursos/img/pokemons/tipo/".$pokemon['tipo_dos']. ".png width=70 height=70></td>";

			        			}else{
			        				 echo"</td>";
			        			} 

                              echo "<td>" . $pokemon['descripcion'] . "</td>
                                   <td> <img src=" . $pokemon['imagen'] . " width=75 height=75 ></td>

                             </tr>";
                }?>

  	
    <tr>
    </tr>
  </tbody>
</table>

	<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>

</body>
</html>

<?php
$con->close();

?>