<?php
session_start();
include('header-con-sesion.php');
include('conexion.php');
?>

	<section class="d-flex flex-col mb-3 col">

		<form class="form-group d-flex flex-col col">
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
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
       <?php 

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
                                <td><img src=" . $pokemon['tipo'] . "width=70 height=70>";

                              if($pokemon["tipo_dos"]!=null){

                      echo" <img src=".$pokemon['tipo_dos']. "width=70 height=70></td>";

                    }else{
                       echo"</td>";
                    } 

                              echo "<td>" . $pokemon['descripcion'] . "</td>
                                   <td> <img src=" . $pokemon['imagen'] . " width=75 height=75 ></td>
                                   <td>
                                   <button type='button' class='btn btn-warning ms-auto'>MODIFICACION</button>
                                   <br>
                                   <button type='button' class='btn btn-danger ms-auto'>BAJA</button>
                                   </td>

                             </tr>";
                }?>

    
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