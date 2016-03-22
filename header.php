<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Promesa Educativa</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/grid-gallery/component.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/grid-gallery/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="container-fluid brand">
				<div class="container">
					<a class="navbar-brand" href="#"><img src="img/logo.png" alt="Promesa Educativa"></a>
					<div class="pull-right social">
						<div class="vertical-align">
							<a href=""><img src="img/icons/fb.png" alt="facebook"></a>
							<a href=""><img src="img/icons/twitter.png" alt="twitter"></a>
							<a href=""><img src="img/icons/instagram.png" alt="instagram"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default <?php if(isset($navbar_style)) { echo $navbar_style; } else { echo 'navbar-green'; } ?>" id="navbar">
			<div class="container-fluid navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a class="vertical-align" href="index.php">Inicio</a></li>
						<li><a class="vertical-align" href="quienes-somos.php">¿Quiénes Somos?</a></li>
						<li class="dropdown">
						<a class="vertical-align dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programas</a>
						<ul class="dropdown-menu">
							<li><a href="sewa.php">Sistema Musical Se’Wa</a></li>
							<li><a href="riberas.php">Colegio Riberas</a></li>
						</ul>
						</li>
						<li><a class="vertical-align" href="galeria.php">Galería</a></li>
						<li><a class="vertical-align" href="transparencia.php">Transparencia</a></li>
						<li><a class="vertical-align" href="contacto.php">Contacto</a></li>
						<li><a class="vertical-align" href="sumate.php">Súmate</a></li>
						<li><a class="vertical-align" href="sumate.php#donacion">Dona Aquí</a></li>
					</ul>
				</div>
			</div>
		</nav>