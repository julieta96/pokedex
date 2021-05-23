<html>
<head>
	<meta charset="utf-8">
	<title>POKEDEX</title>
	<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
 	
</head>
<body>
<!--------------------- HEADER -------------------------------->
	<header>
		<div class="container">
			<div class="row py-3">
				<div class="col">
				<a href="index.php"><img src="recursos/img/logo/logo.png" width="50" height="50"></a>
				</div>

				<div class="col-md-3">
					<h1 class="text-center">POKEDEX</h1>
				</div>
				
				<div class="col-md-6 pt-2">
					<form class="d-flex mx-5 col-4" action="login.php" method="post">
						
						<input type="password" name="password" class="form-control mx-2 col-1" placeholder="Nombre del usuario">
						<button button type="submit" class="btn btn-primary col-6">Salir</button>
					</form>
				</div>
			</div>
		</div>
	</header>