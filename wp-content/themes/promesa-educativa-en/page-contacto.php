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
						<span class="green direccion"><?php echo CFS()->get('direccion_title');?></span><br>
						<?php echo CFS()->get('direccion_text');?>
					</p>
					<p class="text">
						<span class="green telefono"><?php echo CFS()->get('telefonos_title');?></span><br>
						<?php
						$telefonosArray = CFS()->get('telefonos_array');
						foreach($telefonosArray as $telefono) {
							echo '<span class="green">'.$telefono['lugar'].'</span> '.$telefono['numero'].'<br>';
						}
						?>
					</p>
					<p class="text">
						<span class="green correo"><?php echo CFS()->get('correo_title');?></span><br>
						<?php echo CFS()->get('correo');?>
					</p>
				</div>
				<div class="col-sm-6">
					<h1 class="header green"><?php echo CFS()->get('forma_title');?></h1>
					<?php echo do_shortcode('[contact-form-7 id="156" title="Contacto"]'); ?>
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