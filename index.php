<?php
session_start();
include('conexion.php');
include('busqueda-pokemon.php');


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

    <!--------------------- HEADER -------------------------------->
    <header>
        <div class="container">
            <div class="row py-3">
                <div class="col">
                    <a href="index.php"><img src="recursos/img/logo/logo.png" width="50" height="50"></a>
                </div>

                <div class="col-md-3">
                    <h1 class="text-center">POKEDEX</h1>
                </div>

                <div class="col-md-6 pt-2">
                    <form class="d-flex mx-5 col-4" action="login.php" method="post">
                        <input type="text" name="usuario"  class="form-control mx-2 col-1" placeholder="usuario">
                        <input type="password" name="password" class="form-control mx-2 col-1" placeholder="contraseña">
                        <button button type="submit" class="btn btn-primary col-6">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!--------------------- BUSQUEDA -------------------------------->

    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <form class="d-flex col" action="index.php" method="get">
                    <input type="text"  class="form-control" name="buscar" placeholder="Ingrese nombre, tipo o numero de pokemon">
                    <button type="submit" class="btn btn-primary" name="boton">Quien es este pokemon?</button>
                </form>
            </div>
        </div>
    </div>

    <!--------------------- TABLA -------------------------------->

    <table class="table container">
        <thead class="text-center">
        <tr>
            <th scope="col">Nro</th>
            <th scope="col">Nombre</th>
            <th scope="col">Altura</th>
            <th scope="col" class="pe-5 ps-5">Peso</th>
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

        if(isset($_GET['boton'])){

            include('obtener-pokemon-sin-sesion.php');

        }else{
            include('busqueda-pokemon.php');
            include('tabla-sin-sesion.php');
        }

        ?>
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