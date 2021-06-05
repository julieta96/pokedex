<?php
session_start();

if( !isset($_SESSION["usuario"]) ){
    header("location:index.php");
    exit();
}

include('conexion.php');
include('header-con-sesion.php');
include('busqueda-pokemon.php');

if(isset($_GET['baja'])){

    $idBaja=$_GET['idBaja'];

    $eliminarPokemon = "delete from Pokemons
                            where id_manual='".$idBaja."'";

    if($con->query($eliminarPokemon) == true){
        include('busqueda-pokemon.php');
        echo"
	            <div class='alert alert-success text-center container' role='alert'>
	                Se elimino correctamente
	            </div>";

        echo"
	            <table class='table container'>
                    <thead class='text-center'>
                        <tr>
                            <th scope='col'>Nro</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Altura</th>
                            <th scope='col' class='pe-5 ps-5'>Peso</th>
                            <th scope='col'>Habilidad</th>
                            <th scope='col'>Tipo</th>
                            <th scope='col'>Descripcion</th>
                            <th scope='col'>Imagen</th>
                            <th scope='col'>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>";

                        include_once('tabla-pokemon.php');
    }else{
        echo"
	                <div class='alert alert-danger text-center container' role='alert'>
	                    Error! No se pudo eliminar, intente de nuevo.
	                </div>";

        echo"
	                <table class='table container'>
                        <thead>
                            <tr>
                                <th scope='col'>Nro</th>
                                <th scope='col'>Nombre</th>
                                <th scope='col'>Altura</th>
                                <th scope='col' class='pe-5 ps-5'>Peso</th>
                                <th scope='col'>Habilidad</th>
                                <th scope='col'>Tipo</th>
                                <th scope='col'>Descripcion</th>
                                <th scope='col'>Imagen</th>
                                <th scope='col'>Acciones</th>
                             </tr>
                        </thead>
                        <tbody>";
        include('tabla-pokemon.php');
    }

}
