<?php
include('header-con-sesion.php');
?>
  
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-auto bg-light p-5">
                <form action="subir.php" method="get">
                    <div class="input-group p-2">
                        <input class="form-control" type="number" id="id_manual" name="id_manual" placeholder="Id">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="nombre">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="altura" name="altura" placeholder="altura">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="peso" name="peso" placeholder="peso">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="habilidad" name="habilidad" placeholder="habilidad">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="tipo" name="tipo" placeholder="tipo">
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="tipo_dos" name="tipo_dos" placeholder="tipo_dos">
                    </div>
                    <div class="input-group p-2">
                        <textarea class="form-control" type="text" id="exampleFormControlTextarea1" rows="3" name="descripcion"placeholder="descripcion"></textarea>
                    </div>
                    <div class="input-group p-2">
                        <input class="form-control" type="text" id="imagen" name="imagen" placeholder="imagen">
                    </div>
                    <input type="submit" class="btn btn-success w-100" value="Subir">
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
