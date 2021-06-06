<?php

include_once("conexion.php");

if (isset($_POST['modificar'])) {

    $id = isset( $_POST["id-pokemon"])?$_POST["id-pokemon"] : "";
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

    if ($tipo == "" and $tipo_dos =="" and $descrip == "" and $imgFile ==""){
        $modificar1 = "UPDATE pokemons
                        SET id_manual = '$id_m',
                        nombre = '$nombre',
                        altura = '$altura', 
                        peso = '$peso', 
                        habilidad = '$habilidad' 
                        WHERE id = $id";

        $result = $con->query($modificar1);


    }
    elseif ($tipo_dos =="" and $descrip == "" and $imgFile ==""){
        $modificar2 = "UPDATE pokemons
                        SET id_manual = '$id_m',
                        nombre = '$nombre',
                        altura = '$altura', 
                        peso = '$peso', 
                        habilidad = '$habilidad', 
                        tipo = 'recursos/img/pokemons/tipo/$tipo.png',
                        tipo_dos = null 
                        WHERE id = $id";

        $modificar_2 =

        $result = $con->query($modificar2);
    }
    elseif ($descrip == "" and $imgFile ==""){
        $modificar3 = "UPDATE pokemons
                        SET id_manual = '$id_m', 
                        nombre = '$nombre',
                        altura = '$altura', 
                        peso = '$peso', 
                        habilidad = '$habilidad', 
                        tipo = 'recursos/img/pokemons/tipo/$tipo.png', 
                        tipo_dos = 'recursos/img/pokemons/tipo/$tipo_dos.png'
                        WHERE id = $id";

        $result = $con->query($modificar3);
    }
    elseif ($tipo == "" and $tipo_dos =="" and $imgFile ==""){
        $modificar4 = "UPDATE pokemons
                        SET id_manual = '$id_m',
                        nombre = '$nombre',
                        altura = '$altura', 
                        peso = '$peso', 
                        habilidad = '$habilidad', 
                        descripcion = '$descrip'
                        WHERE id = $id";

        $result = $con->query($modificar4);
    }
    elseif ($tipo == "" and $tipo_dos =="" and $descrip == ""){
        $modificar5 = "UPDATE pokemons
                        SET nombre = '$nombre',
                        altura = '$altura', 
                        peso = '$peso', 
                        habilidad = '$habilidad',
                        imagen = 'recursos/img/pokemons/$imgFile'
                        WHERE id = $id";

        $result = $con->query($modificar5);
    }
    else{
        $modificar6 = "UPDATE pokemons
                        SET id_manual = '$id_m',
                        nombre = '$nombre',
                        altura = '$altura', 
                        peso = '$peso', 
                        habilidad = '$habilidad', 
                        tipo = 'recursos/img/pokemons/tipo/$tipo.png', 
                        tipo_dos = 'recursos/img/pokemons/tipo/$tipo_dos.png',
                        imagen = 'recursos/img/pokemons/$imgFile'
                        WHERE id = $id";

        $result = $con->query($modificar6);

    }

    header("location:pagina-logueado.php");
    exit();
    $con->close();

}

?>
