<?php
session_start();

if(isset($_SESSION["usuario"]) ){
      header("location:pagina-logueado.php");
      exit();
  	}

$user=isset($_POST['usuario'])?$_POST['usuario']:"";
$pass=isset($_POST['password'])?$_POST['password']:"";

if(validarUsuario($user,$pass)==true){

 
  
  $_SESSION["usuario"] = $user;
  header("location:pagina-logueado.php");
  exit();

}else{
	header("location:index.php");
	exit();
}

function validarUsuario($user,$pass){
     
    include('conexion.php');

    $query="select * 
    		from Login
    		where usuario='".$user."' and password='".$pass."'";

    $resultadoDB= $con->query($query);

    if (mysqli_num_rows($resultadoDB) > 0) {
   
        while($fila = mysqli_fetch_assoc($resultadoDB)) {

             $usuarioDB= $fila['usuario'];
             $passwordDB =$fila['password'];

        }

        if($usuarioDB==$user && $passwordDB==$pass){

        	return true;

        }
    }

	return false;

}
