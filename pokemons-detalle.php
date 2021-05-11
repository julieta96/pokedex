<?php
session_start();
if(!isset($_SESSION['usuario'])){

  header("location:index.php");
  exit();
}
include('header-con-sesion.php');

	$img=$_GET["imagen"]; 

  echo" <div class='card mb-3 mx-auto p-3' style='width: 50rem;'>
  <img src='img/pokemons/$img' class='card-img-top' alt='...' style='width: 30rem; height: 400px'>
    <div class='card-body'>'
    <h5 class='card-title'>PIKACHU</h5>
    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class='card-text'></p>
  </div>
</div>


	<script type='text/javascript' src='js/bootstrap.min.js'></script>

</body>
</html>";