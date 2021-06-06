<?php
include('header-con-sesion.php');
include('conexion.php');
?>
  
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-auto bg-light p-5" style="width: 50%;">
                
                <form action="subir.php" method="POST" enctype="multipart/form-data">

                    <h3 class="text-center">SUBIR UN POKEMON</h3>

                    <div class="input-group p-2">
                        <input class="form-control" type="number" id="id_manual" name="id_manual" placeholder="Id del Pokemon">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre del Pokemon">
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
                    <div class="row">
                        <div class="col-sm-6" >
                            <a class="btn btn-danger w-100" href="index.php" role="button">Cancelar</a>
                        </div>

                        <div class="col-sm-6" >
                            <input type="submit" name="subir" class="btn btn-primary w-100" value="Subir">
                        </div>
                    </div>
                </form>
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
