<?php

if (isset($_POST['subir'])) {
    
    $id_m = isset( $_POST["id_manual"])?$_POST["id_manual"] : "";
    $nombre = isset( $_POST["nombre"])?$_POST["nombre"] : "";
    $altura = isset( $_POST["altura"])?$_POST["altura"] : "";
    $peso = isset( $_POST["peso"])?$_POST["peso"] : "";
    $habilidad = isset( $_POST["habilidad"])?$_POST["habilidad"] : "";
    $descrip = isset( $_POST["descripcion"])?$_POST["descripcion"] : "";
    
    $tipo=strtolower($_POST['tipo1']);
    $tipo_dos=strtolower($_POST['tipo2']);
 
    $imgFile = $_FILES['imagen']['name'];
    $tmp_dir = $_FILES['imagen']['tmp_name'];

    $upload_dir = 'recursos/img/pokemons/'; 
  
    move_uploaded_file($tmp_dir,$upload_dir.$imgFile);

    include_once("conexion.php");

    if($tipo_dos == ""){
        $sql = "INSERT INTO pokemons (id_manual, nombre, altura, peso, habilidad, tipo, descripcion, imagen) 
        VALUES ('$id_m', '$nombre', '$altura', '$peso', '$habilidad', 'recursos/img/pokemons/tipo/$tipo.png', '$descrip', 'recursos/img/pokemons/$imgFile')";

        $result = $con->query($sql);
    }
    else{
        $sql = "INSERT INTO pokemons (id_manual, nombre, altura, peso, habilidad, tipo, tipo_dos, descripcion, imagen) 
        VALUES ('$id_m', '$nombre', '$altura', '$peso', '$habilidad', 'recursos/img/pokemons/tipo/$tipo.png', 'recursos/img/pokemons/tipo/$tipo_dos.png', '$descrip', 'recursos/img/pokemons/$imgFile')";

        $result = $con->query($sql);
    }

    header("location:pagina-logueado.php");
    exit();

    $con->close();

}

?>