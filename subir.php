<?php

$id_manual = isset( $_GET["id_manual"])?$_GET["id_manual"] : "";
$nombre = isset( $_GET["nombre"])?$_GET["nombre"] : "";
$altura = isset( $_GET["altura"])?$_GET["altura"] : "";
$peso = isset( $_GET["peso"])?$_GET["peso"] : "";
$habilidad = isset( $_GET["habilidad"])?$_GET["habilidad"] : "";
$tipo = isset( $_GET["tipo"])?$_GET["tipo"] : "";
$tipo_dos = isset( $_GET["tipo_dos"])?$_GET["tipo_dos"] : "";
$descripcion = isset( $_GET["descripcion"])?$_GET["descripcion"] : "";
$imagen = isset( $_GET["imagen"])?$_GET["imagen"] : "";


include_once("conexion.php");



$sql = "INSERT INTO pokemons (id_manual, nombre, altura, peso, habilidad, tipo, tipo_dos, descripcion, imagen) VALUES ('$id_manual', '$nombre', '$altura', '$peso', '$habilidad', '$tipo', '$tipo_dos', '$descripcion', '$imagen')";

$result = $con->query($sql);

header("location:pagina-logueado.php");
exit();

$con->close();

?>