<?php
include('header-con-sesion.php');
?>
  
      <div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>altura</th>
                            <th>peso</th>
                            <th>habilidad</th>
                            <th>tipo-1</th>
                            <th>tipo-2</th>
                            <th>descripcion</th>
                            <th>imagen</th>
                            <th>accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $id = isset( $_GET["id"])?$_GET["id"] : "";
 
                                include_once("conexion.php");

                                $sql = "SELECT * FROM pokemons WHERE id_manual = '$id'";

                                $result = $con->query($sql);

                                while ($fila = $result->fetch_assoc()){

                            ?> 

                            <form action="modificar.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $fila["id"];?>">
                                    <tr>
                                        <td><?php echo $fila["id"];?></td>
                                        <td><input type="text" id="nombre" name="nombre" value="<?php echo $fila["nombre"];?>"></td>
                                        <td><input type="text" id="altura" name="altura" value="<?php echo $fila["altura"];?>"></td>
                                        <td><input type="text" id="peso" name="peso" value="<?php echo $fila["peso"];?>"></td>
                                        <td><input type="text" id="habilidad" name="habilidad" value="<?php echo $fila["habilidad"];?>"></td>
                                        <td><input type="text" id="tipo" name="tipo" value="<?php echo $fila["tipo"];?>"></td>
                                        <td><input type="text" id="tipo_dos" name="tipo_dos" value="<?php echo $fila["tipo_dos"];?>"></td>
                                        <td><input type="text" id="descripcion" name="descripcion" value="<?php echo $fila["descripcion"];?>"></td>
                                        <td>
                                            <div>
                                                <?php echo "<img src='".$fila['imagen']."' width='80' />";?>
                                            </div>
                                            <div>
                                                <input type="text" id="imagen" name="imagen" value="<?php echo$fila['imagen'];?>">
                                            </div>
                                        </td>
                                        <td><input type="submit" value="modificar"></td>
                                    </tr>
                            </form>
                                   
                            <?php
                                }
                                
                                 $con->close();
                            ?>
                        </tbody>
                </table>
            </div>
        </div>
      </div>
      






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>