<?php include('header.php'); ?>
<div class="wrapper contacto">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BANNER  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="banner">
		<div class="container text-center vertical-align">
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* ESTADOS FINANCIEROS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="contacto alt-spacing" id="contacto">
		<div class="container">
			<div class="row no-margin">
				<div class="col-sm-6">
					<p class="text">
						<span class="green direccion">DIRECCIÓN: </span><br>
						Av. Teófilo Borunda #3903, Col. Santo Niño C.P. 31120 Chihuahua, Chih. México.
					</p>
					<p class="text">
						<span class="green telefono">TELÉFONO:</span><br>
						<span class="green">Oficina:</span> 3 05 64 56<br>
						<span class="green">Se’Wa:</span> 3 05 64 54<br>
						<span class="green">Riberas:</span> 1 85 12 92
					</p>
					<p class="text">
						<span class="green correo">CORREO:</span><br>
						contacto@promesaeducativa.org
					</p>
				</div>
				<div class="col-sm-6">
					<h1 class="header green">¿PODEMOS AYUDARTE?</h1>
					<form action="mailer.php" method="post">
						<input type="text" class="green-border" name="name" id="name" placeholder="Nombre">
						<input type="text" class="green-border" name="email" id="email" placeholder="Correo Electrónico">
						<input type="text" class="green-border" name="address" id="address" placeholder="Dirección">
						<input type="text" class="green-border" name="phone" id="phone" placeholder="Teléfono">
						<textarea name="info" id="info" cols="30" rows="10" placeholder="Mensaje"></textarea>
						<input class="green-btn white pull-right" type="submit" id="form-submit" value="Enviar">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* MAPA  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="googleMap" id="googleMap" position="promesa-educativa"></div>
</div>
<?php include('footer.php'); ?>