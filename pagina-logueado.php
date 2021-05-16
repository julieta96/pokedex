<?php
session_start();
include('header-con-sesion.php');
include('conexion.php');
include('busqueda-pokemon.php');
?>

	<section class="d-flex flex-col mb-3 col">

		<form class="form-group d-flex flex-col col" method="get" action="pagina-logueado.php">
			<input type="text"  class="form-control" name="buscar" placeholder="Ingrese nombre, tipo o numero de pokemon"><button type="submit" class="btn btn-primary" name="boton">Quien es este pokemon?</button>
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
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
       <?php
      if(isset($_GET['boton'])){

        include('obtener-pokemon.php');

      }else{

       include('busqueda-pokemon.php');
       include('tabla-pokemon.php');

      }
                  
    ?>

    
    <tr>
    </tr>
  </tbody>
</table>



<button class="btn btn-primary form-control btn-block container mx-5 mb-3">NUEVO POKEMON</button>

	<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>

</body>
</html>

<?php
$con->close();

?>