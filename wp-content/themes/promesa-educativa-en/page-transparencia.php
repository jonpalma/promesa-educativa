<?php include('header.php'); ?>
<div class="wrapper transparencia">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BANNER  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="banner">
		<div class="container text-center vertical-align">
			<h1 class="banner-header"><?php echo CFS()->get('banner_caption');?></h1>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* ESTADOS FINANCIEROS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="parallax-container informes">
		<div class="parallax"><img class="fixed-right" src="<?php echo bloginfo('template_url')?>/img/parallax/bg-trans1.jpg" alt=""></div>
		<div class="container text-center">
			<div class="vertical-align">
				<h1 class="gray-green-header"><?php echo CFS()->get('estados_title');?></h1>
				<?php $estadosArray = CFS()->get('estados_array');
				$arrayLength = count($estadosArray);
				$arrayEnd = end($estadosArray);
				$counter = 0;
				foreach($estadosArray as $estado) {
					if($arrayLength == 1) {
						echo '
						<img src="'.$estado['img'].'" alt="Estado">
						<a href="'.$estado['pdf'].'" class="green-btn center-block" target="_blank">'.$estado['boton_name'].'</a>';
					} else {
						if($counter == 0 || $counter%2 == 0) {
							echo '<div class="row no-margin">';
						}
						echo '
						<div class="col-sm-6">
							<img src="'.$estado['img'].'" alt="Estado">
							<a href="'.$estado['pdf'].'" class="green-btn center-block" target="_blank">'.$estado['boton_name'].'</a>
						</div>';
						$counter++;
						if($counter%2 == 0 || $estado == $arrayEnd) {
							echo '</div>';
						}
					}
				}		   
				?>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* INFORMES ANUALES  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="container spacing text-center informes">
		<h1 class="gray-green-header"><?php echo CFS()->get('informes_title');?></h1>
		<?php $informesArray = CFS()->get('informes_array');
		$arrayLength = count($informesArray);
		$arrayEnd = end($informesArray);
		$counter = 0;
		foreach($informesArray as $informe) {
			if($arrayLength == 1) {
				echo '
				<img src="'.$informe['img'].'" alt="Estado">
				<a href="'.$informe['pdf'].'" class="green-btn center-block" target="_blank">'.$estado['boton_name'].'</a>';
			} else {
				if($counter == 0 || $counter%2 == 0) {
					echo '<div class="row no-margin">';
				}
				echo '
				<div class="col-sm-6">
					<img src="'.$informe['img'].'" alt="Estado">
					<a href="'.$informe['pdf'].'" class="green-btn center-block" target="_blank">'.$estado['boton_name'].'</a>
				</div>';
				$counter++;
				if($counter%2 == 0 || $informe == $arrayEnd) {
					echo '</div>';
				}
			}
		}		   
		?>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* GRÁFICAS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="container light-spacing no-padding-top">
		<img src="<?php echo CFS()->get('graphs');?>" alt="" class="center-block img-responsive">
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BOLETÍN  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="boletin">
		<img src="<?php echo bloginfo('template_url')?>/img/transparencia/boletin.png">
		<div class="parallax-container">
			<div class="parallax"><img class="fixed-right" src="<?php echo bloginfo('template_url')?>/img/parallax/bg-trans2.jpg" alt=""></div>
			<div class="container text-center">
				<div class="vertical-align">
					<div class="col-sm-4"></div>
					<div class="col-sm-8">
						<h1 class="header white first-big"><?php echo CFS()->get('boletin_title');?></h1>
						<div class="row no-margin">
						    <div class="col-sm-6">
						        <a href="<?php echo CFS()->get('boletin_pdf');?>" class="center-block white-btn gray" target="_blank"><?php echo CFS()->get('boletin_boton_name');?></a>
						    </div>
						    <div class="col-sm-6">
						        <a href="<?php echo CFS()->get('suscripcion_url');?>" class="center-block white-btn gray" target="_blank"><?php echo CFS()->get('suscripcion_boton_name');?></a>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* AVISO DE PRIVACIDAD  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="privacidad spacing">
		<div class="container text-center">
			<h1 class="header gray"><?php echo CFS()->get('aviso_title');?></h1>
			<a href="<?php echo CFS()->get('aviso_pdf');?>" class="center-block green-btn white" target="_blank"><?php echo CFS()->get('aviso_boton_name');?></a>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>