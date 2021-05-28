<?php
include('header-con-sesion.php');
include('conexion.php');
?>

<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-auto bg-light p-5" style="width: 50%;">

            <form action="modificar.php" method="POST" enctype="multipart/form-data">

                <?php
                $id = isset( $_GET["id"])?$_GET["id"] : "";
                include_once("conexion.php");
                $sql = "SELECT * FROM pokemons WHERE id_manual = '$id'";
                $result = $con->query($sql);

                while ($fila = $result->fetch_assoc()){

                ?>

                <h3 class="text-center">MODIFICAR POKEMON: <?php echo $fila["nombre"];?></h3>

                <div class="input-group p-2 justify-content-center">
                    <h4>ID: <?php echo $fila["id"];?> </h4>
                </div>

                <div class="input-group p-2">
                    <input class="form-control" type="text" id="altura" name="altura" placeholder="Altura">
                </div>
                <div class="input-group p-2">
                    <input class="form-control" type="text" id="peso" name="peso" placeholder="Peso">
                </div>
                <div class="input-group p-2">
                    <input class="form-control" type="text" id="habilidad" name="habilidad" placeholder="Habilidad">
                </div>
                <div class="input-group justify-content-between">

                    <div class="w-50 p-2">
                        <label class="form-label">Tipo de Pokemon</label>
                        <select name="tipo1" class="form-select">
                            <option>Fuego</option>
                            <option>Agua</option>
                            <option>Bicho</option>
                            <option>Electrico</option>
                            <option>Planta</option>
                            <option>Veneno</option>
                            <option>Volador</option>

                        </select>
                    </div>

                    <div class="w-50 p-2">
                        <label class="form-label">Tipo de Pokemon (Opcional)</label>
                        <select name="tipo2" class="form-select">
                            <option></option>
                            <option>Fuego</option>
                            <option>Agua</option>
                            <option>Bicho</option>
                            <option>Electrico</option>
                            <option>Planta</option>
                            <option>Veneno</option>
                            <option>Volador</option>
                        </select>
                    </div>

                </div>

                <div class="input-group p-2">
                    <textarea class="form-control" type="text"  rows="3" name="descripcion" placeholder="Descripcion del Pokemon"></textarea>
                </div>
                <div class="input-group p-2">
                    <input name="imagen" id="imagen" type="file"/>
                </div>
                <br>
                <input type="submit" name="modificar" class="btn btn-primary w-100" value="Modificar">
            </form>
        </div>
    </div>
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
