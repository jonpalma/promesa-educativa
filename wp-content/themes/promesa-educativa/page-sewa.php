<?php $navbar_style = 'navbar-black'; ?>
<?php include('header.php'); ?>
<div class="wrapper sewa">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner">
        <img class="banner-img" src="<?php echo CFS()->get('banner'); ?>" alt="Banner">
        <div class="container text-center vertical-align">
            <img src="<?php bloginfo('template_url')?>/img/programas/sewa-logo.png" alt="SEWA">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONÓCENOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conocenos spacing">
        <div class="container text-center">
            <div class="col-sm-8">
                <h1 class="header green2"><?php echo CFS()->get('conocenos_title');?></h1>
                <p class="text black text-justify">
                    <?php echo CFS()->get('conocenos_text');?>
                </p>
            </div>
            <img class="vertical-align hidden-xs" src="<?php bloginfo('template_url')?>/img/programas/sewa/violin.jpg">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VIDEO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="video text-center">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php bloginfo('template_url')?>/img/parallax/video-sewa.jpg"></div>
            <div class="vertical-align caption">
                <h1 class="white header">Ver Video</h1>
                <a href="#video-modal" data-toggle="modal" data-target="#video-modal"><img class="img-responsive center-block" src="<?php bloginfo('template_url')?>/img/video/play.png" alt=""></a>
            </div>
        </div>
        <div class="modal fade" id="video-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/c0LO0dZh26E" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Regresar</button>				
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MISIÓN/VISIÓN  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<div class="parallax-container">
<div class="parallax">
<img src="<?php bloginfo('template_url')?>/img/parallax/sewa.jpg">
</div>
<div class="container spacing text-center">
<div class="col-sm-6">
<img src="<?php echo CFS()->get('mision_img');?>" alt="Misión">
<h3 class="header green2"><?php echo CFS()->get('mision_title');?></h3>
<p class="text white text-justify">
<?php echo CFS()->get('mision_text');?>
</p>
</div>
<div class="col-sm-6">
<img src="<?php echo CFS()->get('vision_img');?>" alt="Visión">
<h3 class="header green2"><?php echo CFS()->get('vision_title');?></h3>
<p class="text white text-justify">
<?php echo CFS()->get('vision_text');?>
</p>
</div>
</div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* AGRUPACIONES MUSICALES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="agrupaciones spacing">
        <div class="container text-center">
            <h1 class="green-black">
                <?php echo CFS()->get('agrupaciones_title');?>
            </h1>
            <?php
            $arrayAgrupaciones = CFS()->get('agrupaciones_array');
            $arrayLength = count($arrayAgrupaciones);
            $arrayEnd = end($arrayAgrupaciones);
            $counter = 0;
            foreach($arrayAgrupaciones as $agrupacion) {
                if($counter == 0 || $counter%4 == 0) {
                    echo '<div class="row no-margin">';
                }
                echo '
				<div class="col-sm-3">
					<img src="'.$agrupacion['img'].'" alt="'.$agrupacion['title'].'">
					<h4 class="green2">'.$agrupacion['title'].'</h4>
					<p class="text black text-justify">
						'.$agrupacion['text'].'
					</p>
				</div>';
                $counter++;
                if($counter%4 == 0 || $valor == $arrayEnd) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CENTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="centros spacing no-spacing-bottom">
        <div class="container">
            <h1 class="header black text-center"><?php echo CFS()->get('centros_title');?></h1>
            <?php
            $arrayCentros = CFS()->get('centros_array');
            $arrayLength = count($arrayCentros);
            $arrayEnd = end($arrayCentros);
            $counter = 0;
            foreach($arrayCentros as $centro) {
                if($counter == 0 || $counter%3 == 0) {
                    echo '<div class="row no-margin">';
                }
                echo '
				<div class="col-sm-4">
					<div class="element-container">
						<img src="'.$centro['centro_img'].'" alt="Foto" class="img-responsive">
						<div class="text-container">
							<h3 class="white">'.$centro['centro_name'].'</h3>
							<p class="text white">'.$centro['centro_text'].'</p>
						</div>
					</div>
				</div>';
                $counter++;
                if($counter%3 == 0 || $centro == $arrayEnd) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    <div class="musica-armonia light-spacing">
        <div class="container">
            <img src="<?php echo CFS() -> get('armonia_img');?>" class="center-block img-responsive">
            <p class="text text-justify">
                <?php echo CFS() -> get('armonia_text');?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MAPA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="googleMap" id="Map" position="promesa-educativa"></div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* COLABORADORES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="container spacing text-center">
        <h1 class="header green2">COLABORADORES</h1>
        <p class="text">
            <?php 
            $arrayColaboradores = CFS()->get('colaboradores_array');
            foreach( $arrayColaboradores as $colaborador) {
                echo $colaborador['name'].'<br>';
            } ?>
        </p>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* EVENTOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="eventos spacing no-padding-top">
        <div class="container text-center">
            <h1 class="header black"><?php echo CFS()->get('eventos_title');?></h1>
            <?php
            $arrayEventos = CFS()->get('eventos_array');
            $arrayLength = count($arrayEventos);
            $arrayEnd = end($arrayEventos);
            foreach($arrayEventos as $evento) {
                echo '<div class="row no-margin table-row">';
                echo '
				<div class="col-sm-4">
					<h3 class="green2">'.$evento['evento_name'].'</h3>
					<p class="gray">'.$evento['evento_date'].'</p>
				</div>
				<div class="col-sm-8 black-bg">
					<p class="text white">
						'.$evento['evento_text'].'
					</p>
				</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>