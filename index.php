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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	
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

		<form class="form-group d-flex flex-col col">
			<input type="text"  class="form-control" name="buscar" placeholder="Ingrese nombre, tipo o numero de pokemon"><button type="submit" class="btn btn-primary">Quien es este pokemon?</button>
		</form>
	 </section>

  <table class="table container">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Tipo</th>
      <th scope="col">Numero</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
      	<?php 
            
		 
			$sql = "select p.imagen 
			 		from pokemons p
			 		where p.nombre like '%pikachu%'";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
					echo"<img src=".$fila["imagen"]." style='width: 5rem; height: 80px'>";
			 }
				

      	?>
      </th>
      <td>
      	<?php 
   
			$sql = "select t.descripcion 
			 		from tipo t inner join 
			 		pokemons p on p.tipo=t.id
			 		where p.nombre like '%pikachu%'";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
					 echo"<img src=".$fila["descripcion"]." style='width: 5rem; height: 80px'>";
			 }
				

      	?>
      </td>
      <td>
      		<?php 
   
			$sql = "select p.id 
			 		from  pokemons p 
			 		where p.nombre like '%pikachu%'";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
			 	    $id=$fila["id"];
					echo $id;
			 }
				

      	?>
      </td>
      <td>
      		<?php 
   
			 $sql = "select p.nombre 
			 		from  pokemons p 
			 		where p.id=1";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
			 	    $nom=$fila["nombre"];
					echo $nom;
			 }
				
      	?>
      </td>
    </tr>
    <tr>
      <th scope="row">
      	 	<?php 
            
		 
			$sql = "select p.imagen 
			 		from pokemons p
			 		where p.nombre like '%squirtle%'";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
					echo"<img src=".$fila["imagen"]." style='width: 5rem; height: 80px'>";
			 }

			 ?>
      </th>
      <td><?php 
   
			$sql = "select t.descripcion 
			 		from tipo t inner join 
			 		pokemons p on p.tipo=t.id
			 		where p.nombre like '%squirtle%'";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
					 echo"<img src=".$fila["descripcion"]." style='width: 5rem; height: 80px'>";
			 }
				

      	?></td>
      <td>
      	<?php 
   
			$sql = "select p.id 
			 		from  pokemons p 
			 		where p.nombre like '%squirtle%'";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
			 	    $id=$fila["id"];
					echo $id;
			 }
				

      	?>
      </td>
      <td>
      		<?php 
   
			 $sql = "select p.nombre 
			 		from  pokemons p 
			 		where p.id=2";
			$result = $con->query($sql);
			$resultArray=$result->fetch_all(MYSQLI_ASSOC);
			 foreach($resultArray as $fila){
			 	    $nom=$fila["nombre"];
					echo $nom;
			 }
				
      	?>
      </td>
    </tr>
  </tbody>
</table>

	<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>

</body>
</html>

<?php
$con->close();

?>