<?php
include('conexion.php');

/*	$idusuario = $_SESSION['id'];

	$sql = "SELECT id, usuario
			FROM Login
			WHERE id = '$idusuario'";

	$resultado = $con->query($sql);
	$row = $resultado->fetch_assoc(); */


?>

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

            <div class="col-md-6 pt-2 d-flex justify-content-end">
                <form class="d-flex col-4 justify-content-end" action="logout.php" method="post">

                    <!--	<h4>  <?php// echo utf8_decode($row['usuario']); ?> </h4>		-->

                    <button button type="submit" class="btn btn-primary col-6">Salir</button>
                </form>
            </div>
        </div>
    </div>
</header>