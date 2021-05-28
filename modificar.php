<?php

if (isset($_POST['modificar'])) {

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

    $id = isset( $_GET["id"])?$_GET["id"] : "";

    include_once("conexion.php");

    $sql2 = "SELECT * FROM pokemons WHERE id_manual = '$id'";

    $result2 = $con->query($sql2);

    while ($fila = $result2->fetch_assoc()){

        if($tipo_dos == ""){
            $sql = "UPDATE pokemons
            SET altura = '$altura', 
            peso = '$peso', 
            habilidad = '$habilidad', 
            tipo = 'recursos/img/pokemons/tipo/$tipo.png', 
            descripcion = '$descrip', 
            imagen = 'recursos/img/pokemons/$imgFile'
            WHERE id = $id";

            $result = $con->query($sql);
        }
        else{
            $sql = "UPDATE pokemons
            SET altura = '$altura', 
            peso = '$peso', 
            habilidad = '$habilidad', 
            tipo = 'recursos/img/pokemons/tipo/$tipo.png', 
            tipo_dos = 'recursos/img/pokemons/tipo/$tipo_dos.png', 
            descripcion = '$descrip', 
            imagen = 'recursos/img/pokemons/$imgFile'
            WHERE id = $id";

            $result = $con->query($sql);
        }

        /*header("location:pagina-logueado.php");
        exit();*/

        // $con->close();

    }
    header("location:pagina-logueado.php");
    exit();
    $con->close();

}

?>