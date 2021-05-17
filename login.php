<?php
session_start();


$user=isset($_POST['usuario'])?$_POST['usuario']:"";
$pass=isset($_POST['password'])?$_POST['password']:"";

if(validarUsuario($user,$pass)==true){

  $user=$_SESSION["usuario"];
  $pass=$_SESSION["password"];

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
