<?php
session_start();
include('header-con-sesion.php');
  $usuario="root";
  $password="291121okayj";
  $servidor="localhost";
  $nombrebasedatos="pokedex";
  $con= new mysqli($servidor,$usuario,$password,$nombrebasedatos)or die("error de conexion".mysql_error());
?>

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
            $tipo=$fila["descripcion"];
          echo $tipo;
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
            $tipo=$fila["descripcion"];
          echo $tipo;
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
<button class="btn btn-primary form-control btn-block container mx-5">NUEVO POKEMON</button>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>

<?php
$con->close();

?>