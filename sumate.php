<?php include('header.php'); ?>
<div class="wrapper sumate">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BANNER  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="banner">
		<div class="container text-center vertical-align">
			<h1 class="banner-header">DONACIONES</h1>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* VOLUNTARIADO  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="voluntariado spacing">
		<div class="container">
			<div class="col-sm-6">
				<h3 class="gray-green">¿Deseas ser voluntario o hacer tus prácticas profesionales</h3>
				<h1>con nosotros?</h1>
				<p class="text">
					Intégrate a un excelente ambiente de trabajo, además puedes liberar horas de servicio social o de prácticas profesionales.<br>
					¡Acércate a nosotros y contribuye al cambio social que todos queremos para nuestra ciudad!
				</p>
			</div>
			<div class="col-sm-6">
				<input class="input-green" type="text" name="name" id="name" placeholder="Nombre" required>
				<input class="input-green" type="text" name="email" id="email" placeholder="Correo electrónico" required>
				<textarea class="input-green" name="message" id="message" cols="30" rows="7" placeholder="Información Adicional"></textarea>
				<input class="submit pull-right green-btn" type="submit" value="Enviar">
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* EMPRESAS/DONANTES  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="donantes spacing">
		<div class="container">
			<div class="col-sm-6">
				<h3>Empresas o donantes</h3>
				<h1 class="white">particulares</h1>
				<p class="text white">
					Existen varias formas en las que te puedes sumar a nuestra causa:
				</p>
				<ul class="white">
					<li>Apadrina un niño Se'Wá por sólo $350.00 MXN al mes, 1 US Dólar al día.</li>
					<li>Apadrina un niño Colegio Riberas con $2,550.00 MXN mensuales.</li>
				</ul>
				
				<p class="text white">
					Tus aportaciones pueden ser mensuales, semestrales o anuales, tú eliges:
				</p>
				<ul class="white">
					<li>Aportación en especie</li>
					<li>Donativo en efectivo</li>
				</ul>
				
				<p class="text white">Envíanos tu información y nosotros nos pondremos en contacto contigo.</p>
			</div>
			<div class="col-sm-6">
				<input class="input-white" type="text" name="name" id="name" placeholder="Nombre" required>
				<input class="input-white" type="text" name="email" id="email" placeholder="Correo electrónico" required>
				<textarea class="input-white" name="message" id="message" cols="30" rows="7" placeholder="Información Adicional"></textarea>
				<input class="submit pull-right green-btn" type="submit" value="Enviar">
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* DONACIONES  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="donacion spacing" id="donacion">
		<div class="container text-center">
			<h1 class="header green">QUIERO HACER UNA DONACIÓN A:</h1>
			<p class="text">Selecciona con un click a cuál de nuestros programas deseas donar:</p>
			<div class="col-sm-6"><img class="img-responsive center-block" src="img/programas/smtf.png" alt=""><a class="gray-btn white center-block" href="">DONAR</a></div>
			<div class="col-sm-6"><img class="img-responsive center-block" src="img/programas/riberas.png" alt=""><a class="green-btn white center-block" href="">DONAR</a></div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>