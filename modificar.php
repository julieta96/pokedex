<?php


$id = isset( $_POST["id"])?$_POST["id"] : "";
$nombre = isset( $_POST["nombre"])?$_POST["nombre"] : "";
$altura = isset( $_POST["altura"])?$_POST["altura"] : "";
$peso = isset( $_POST["peso"])?$_POST["peso"] : "";
$habilidad = isset( $_POST["habilidad"])?$_POST["habilidad"] : "";
$tipo = isset( $_POST["tipo"])?$_POST["tipo"] : "";
$tipo_dos = isset( $_POST["tipo_dos"])?$_POST["tipo_dos"] : "";
$imagen = isset( $_POST["imagen"])?$_POST["imagen"] : "";
$descripcion = isset( $_POST["descripcion"])?$_POST["descripcion"] : "";

include_once("conexion.php");

$sql = "UPDATE pokemons SET nombre = '$nombre', altura = '$altura', peso = '$peso', habilidad = '$habilidad', tipo = '$tipo', tipo_dos = '$tipo_dos', imagen = '$imagen', descripcion = '$descripcion' WHERE id ='$id';";

$result = $con->query($sql);

header("location:pagina-logueado.php");

exit();

$con->close();



?>