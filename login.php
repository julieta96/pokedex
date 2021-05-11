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

function validarUsuario($u,$p){

	return $u=='j' && $p='1234';

}
