
   

    <?php

        include('header-con-sesion.php');

        $id = isset( $_GET["id"])?$_GET["id"] : "";
        

        include_once("conexion.php");

        $sql = "SELECT * FROM pokemons WHERE id_manual='$id'";
        $result = $con->query($sql);

        while ($fila = $result->fetch_assoc()){
    ?>      

          <div class="content col-auto p-5 text-center rounded border">
            <div><?php echo "<img src='".$fila['imagen']."' width='80' />". $fila["nombre"]?></div>
            <div><?php echo "Altura: ".$fila["altura"] ?></div>
            <div><?php echo "Peso: ".$fila["peso"] ?></div>
            <div><?php echo "Habilidad: ".$fila["habilidad"] ?></div>
            <div><?php echo $fila["descripcion"] ?></div>
          </div>
         



         <?php   
        }

        $con->close();

        ?>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>