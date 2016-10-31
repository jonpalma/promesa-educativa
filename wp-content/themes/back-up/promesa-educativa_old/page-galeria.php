<?php include('header.php'); ?>
<div class="wrapper galeria">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BANNER  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="banner">
		<div class="container text-center vertical-align">
			<h1 class="banner-header"><?php echo CFS()->get('banner_caption');?></h1>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* RIBERAS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="spacing">
		<div class="container text-center">
			<h1 class="header green"><?php echo CFS()->get('riberas_title');?></h1>
			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid purple">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<?php 
						$riberasArray = CFS()->get('riberas_array');
						foreach($riberasArray as $galeria){
							if($galeria['triple'] == true) {
								echo '<li class="triple">';
							} else if($galeria['double'] == true) {
								echo '<li class="double">';
							} else {
								echo '<li>';
							}
							if($galeria['doubleH'] == true) {
								echo '<figure class="doubleH">';
							} else {
								echo '<figure>';
							}
							echo '
									<img src="'.$galeria['img'].'" alt="Galería"/>
								</figure>
							</li>';
						}
						?>
					</ul>
				</section>
				<section class="slideshow">
					<ul>
						<?php
						$riberasArray = CFS()->get('riberas_array');
						foreach($riberasArray as $galeria){
							echo '<li>';
							echo '
							<figure>
								<img class="vertical-align img-responsive center-block" src="'.$galeria['img'].'" alt="Galería"/>
							</figure>';
							echo '</li>';
						}
						?>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navega con el teclado</div>
				</section><!-- // slideshow -->
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* SE´WÁ  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="spacing">
		<div class="container text-center">
			<h1 class="header green"><?php echo CFS()->get('sewa_title');?></h1>
			<div id="grid-gallery2" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid green">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<?php 
						$sewaArray = CFS()->get('sewa_array');
						foreach($sewaArray as $galeria){
							if($galeria['triple'] == true) {
								echo '<li class="triple">';
							} else if($galeria['double'] == true) {
								echo '<li class="double">';
							} else {
								echo '<li>';
							}
							if($galeria['doubleH'] == true) {
								echo '<figure class="doubleH">';
							} else {
								echo '<figure>';
							}
							echo '
									<img src="'.$galeria['img'].'" alt="Galería"/>
								</figure>
							</li>';
						}
						?>
					</ul>
				</section>
				<section class="slideshow">
					<ul>
						<?php
						$sewaArray = CFS()->get('sewa_array');
						foreach($sewaArray as $galeria){
							echo '<li>';
							echo '
							<figure>
								<img class="vertical-align img-responsive center-block" src="'.$galeria['img'].'" alt="Galería"/>
							</figure>';
							echo '</li>';
						}
						?>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navega con el teclado</div>
				</section><!-- // slideshow -->
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* SANTA ANA DE CHINARRAS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="spacing">
		<div class="container text-center">
			<h1 class="header green"><?php echo CFS()->get('santa_title');?></h1>
			<div id="grid-gallery3" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid fadeout">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<?php 
						$santaArray = CFS()->get('santa_array');
						foreach($santaArray as $galeria){
							if($galeria['triple'] == true) {
								echo '<li class="triple">';
							} else if($galeria['double'] == true) {
								echo '<li class="double">';
							} else {
								echo '<li>';
							}
							if($galeria['doubleH'] == true) {
								echo '<figure class="doubleH">';
							} else {
								echo '<figure>';
							}
							echo '
									<img src="'.$galeria['img'].'" alt="Galería"/>
								</figure>
							</li>';
						}
						?>
					</ul>
				</section>
				<section class="slideshow">
					<ul>
						<?php
						$santaArray = CFS()->get('santa_array');
						foreach($santaArray as $galeria){
							echo '<li>';
							echo '
							<figure>
								<img class="vertical-align img-responsive center-block" src="'.$galeria['img'].'" alt="Galería"/>
							</figure>';
							echo '</li>';
						}
						?>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navega con el teclado</div>
				</section><!-- // slideshow -->
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* TOCANDO EL FUTURO  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="spacing">
		<div class="container text-center">
			<h1 class="header green"><?php echo CFS()->get('futuro_title');?></h1>
			<div id="grid-gallery4" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid fadeout">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<?php 
						$futuroArray = CFS()->get('futuro_array');
						foreach($futuroArray as $galeria){
							if($galeria['triple'] == true) {
								echo '<li class="triple">';
							} else if($galeria['double'] == true) {
								echo '<li class="double">';
							} else {
								echo '<li>';
							}
							if($galeria['doubleH'] == true) {
								echo '<figure class="doubleH">';
							} else {
								echo '<figure>';
							}
							echo '
									<img src="'.$galeria['img'].'" alt="Galería"/>
								</figure>
							</li>';
						}
						?>
					</ul>
				</section>
				<section class="slideshow">
					<ul>
						<?php
						$futuroArray = CFS()->get('futuro_array');
						foreach($futuroArray as $galeria){
							echo '<li>';
							echo '
							<figure>
								<img class="vertical-align img-responsive center-block" src="'.$galeria['img'].'" alt="Galería"/>
							</figure>';
							echo '</li>';
						}
						?>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navega con el teclado</div>
				</section><!-- // slideshow -->
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* HUGO SÁNCHEZ  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="spacing">
		<div class="container text-center">
			<h1 class="header green"><?php echo CFS()->get('hugo_title');?></h1>
			<div id="grid-gallery5" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid fadeout">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<?php 
						$hugoArray = CFS()->get('hugo_array');
						foreach($hugoArray as $galeria){
							if($galeria['triple'] == true) {
								echo '<li class="triple">';
							} else if($galeria['double'] == true) {
								echo '<li class="double">';
							} else {
								echo '<li>';
							}
							if($galeria['doubleH'] == true) {
								echo '<figure class="doubleH">';
							} else {
								echo '<figure>';
							}
							echo '
									<img src="'.$galeria['img'].'" alt="Galería"/>
								</figure>
							</li>';
						}
						?>
					</ul>
				</section>
				<section class="slideshow">
					<ul>
						<?php
						$hugoArray = CFS()->get('hugo_array');
						foreach($hugoArray as $galeria){
							echo '<li>';
							echo '
							<figure>
								<img class="vertical-align img-responsive center-block" src="'.$galeria['img'].'" alt="Galería"/>
							</figure>';
							echo '</li>';
						}
						?>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navega con el teclado</div>
				</section><!-- // slideshow -->
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>