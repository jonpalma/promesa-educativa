<?php $navbar_style = 'navbar-yellow'; ?>
<?php include('header.php'); ?>
<div class="wrapper riberas">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner">
        <img class="banner-img" src="<?php echo CFS()->get('banner'); ?>" alt="Banner">
        <div class="container text-center vertical-align">
            <img src="<?php bloginfo('template_url')?>/img/programas/riberas-caption.png" alt="SEWA">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* QUIENES SOMOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="quienes spacing">
        <img class="vertical-align hidden-xs" src="<?php bloginfo('template_url')?>/img/programas/riberas/pencils.png">
        <div class="container text-center">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <div class="header green"><?php echo CFS()->get('quienes_title');?></div>
                <p class="text text-justify">
                    <?php echo CFS()->get('quienes_text');?>
                </p>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VIDEO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="video text-center">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php bloginfo('template_url')?>/img/parallax/video-riberas.jpg"></div>
            <div class="vertical-align caption">
                <h1 class="white header">Ver Video</h1>
                <a href="#video-modal" data-toggle="modal" data-target="#video-modal"><img class="img-responsive center-block" src="<?php bloginfo('template_url')?>/img/video/play.png" alt=""></a>
            </div>
        </div>
        <div class="modal fade" id="video-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/D4qDpsVZl-U" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Regresar</button>				
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MISION/VISION  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<div class="parallax-container">
<div class="parallax"><img src="<?php bloginfo('template_url')?>/img/parallax/riberas.jpg"></div>
<div class="container spacing text-center">
<div class="col-sm-6">
<img src="<?php echo CFS()->get('mision_img');?>" alt="Misión">
<h3 class="header white"><?php echo CFS()->get('mision_title');?></h3>
<p class="text text-justify white">
<?php echo CFS()->get('mision_text');?>
</p>
</div>
<div class="col-sm-6">
<img src="<?php echo CFS()->get('vision_img');?>" alt="Visión">
<h3 class="header white"><?php echo CFS()->get('vision_title');?></h3>
<p class="text text-justify white">
<?php echo CFS()->get('vision_text');?>
</p>
</div>
</div>
</div>
-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DATOS COLEGIO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="colegio light-spacing">
        <div class="container">
            <div class="row no-margin text-justify-normal">
                <div class="col-sm-6">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/1.jpg" class="img-responsive center-block" alt="Educación de Calidad">
                    <p class="text yellow">
                        51% destinado a la formación del carácter.<br>
                        49% formación académica.<br>
                        Enseñanza académica superior a los estándares oficiales.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/2.jpg" class="img-responsive center-block" alt="Horario Extendido">
                    <p class="text blue">
                        Los niños permanecen en el Colegio más de 41 horas por semana.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/3.jpg" class="img-responsive center-block" alt="Inglés">
                    <p class="text orange">
                        Se imparte un total de 7 horas a la semana.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/4.jpg" class="img-responsive center-block" alt="Música">
                    <p class="text purple">
                        Sesiones de música como herramienta didáctica.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/5.jpg" class="img-responsive center-block" alt="Neurodesarrollo">
                    <p class="text green-alt">
                        Desarrollo de psicomotricidad fina y gruesa, para incrementar concentración, lateralidad y retención de lo aprendido.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/6.jpg" class="img-responsive center-block" alt="Atención Psicológica">
                    <p class="text yellow">
                        Detección de problemáticas emocionales de aprendizaje o lenguaje y atención por medio de terapias psicológicas y/o familiares.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/7.jpg" class="img-responsive center-block" alt="Capacitación a Padres">
                    <p class="text purple">
                        Pláticas y talleres mensuales para padres y madres de familia.<br>
                        Pláticas formativas y académicas para padres de nuevo ingreso.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/8.jpg" class="img-responsive center-block" alt="Alimentación">
                    <p class="text blue">
                        Servicio de alimentación balanceada para complementar el desarrollo de las clases en horario extendido.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/9.jpg" class="img-responsive center-block" alt="Tecnología">
                    <p class="text yellow">
                        Aplicación de un programa de tecnológia educativa por medio del uso de tablets.
                    </p>
                    <img src="<?php echo bloginfo('template_url'); ?>/img/programas/riberas/colegio/10.jpg" class="img-responsive center-block" alt="Deportes">
                    <p class="text orange">
                        Práctica deportiva en instalaciones de primera calidad.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* KIPP  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="kipp light-spacing">
        <div class="container text-center">
            <img src="<?php echo CFS() -> get('kipp_img');?>" alt="KIPP" class="center-block img-responsive margin-bottom">
            <p class="text text-justify margin-bottom">
                <?php echo CFS() -> get('kipp_text');?>
            </p>
            <div class="table-row table-row-margin-bottom">
                <div class="col-sm-6 margin-bottom">
                    <img src="<?php echo CFS() -> get('piramide_img');?>" alt="Pirámide" class="center-block img-responsive">
                </div>
                <div class="col-sm-6 vertical-align no-vertical-align-xs">
                    <p class="text text-justify">
                        <?php echo CFS() -> get('funciona_text');?>
                    </p>
                </div>
            </div>
            <p class="text text-justify">
                <?php echo CFS() -> get('network_text');?>
            </p>
            <img src="<?php echo CFS() -> get('network_img');?>" alt="Network of Schools" class="center-block img-responsive margin-bottom">
            <p class="text text-justify">
                <?php echo CFS() -> get('mundo_text');?>
            </p>
            <img src="<?php echo CFS() -> get('mundo_img');?>" alt="Network of Schools" class="center-block img-responsive margin-bottom">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VALORES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="valores spacing no-spacing-top">
        <div class="container text-center">
            <div class="header gray-dark"><?php echo CFS()->get('valores_title');?></div>
            <?php 
            $arrayValores = CFS()->get('valores_array');
            foreach($arrayValores as $valor){
                echo '
				<div class="col-7">
					<img class="img-responsive center-block" src="'.$valor['valor_img'].'" alt="Valor">
					<p class="gray-dark">'.$valor['valor_name'].'</p>
				</div>';
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MAPA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="googleMap" id="googleMap" position="promesa-educativa"></div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticias spacing" id="noticias">
        <div class="container text-center">
            <h1 class="header orange"><?php echo CFS()->get('noticias_title');?></h1>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    if ( have_posts() ) {
                        the_post();
                        the_content();
                    }
                    ?>									  
                    <?php
                    query_posts( 'showposts=10' );
                    if ( have_posts() ) {
                        while ( have_posts() ) { 
                            the_post();
                            if($counter == 0) {
                                echo '<div class="item active">';
                            } else {
                                echo '<div class="item">';
                            }
                    ?>
                    <div class="carousel-caption">
                        <div class="row no-padding no-margin">
                            <div class="img-container">
                                <img src="<?php echo CFS()->get('img');?>" alt="Noticia" >
                            </div>
                            <div class="col-sm-6 no-padding hidden-xs">
                            </div>
                            <div class="col-sm-6 no-padding">
                                <div class="news-container text text-justify white">
                                    <div class="vertical-align"><?php echo the_content(); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            echo '</div>';
                            $counter++;
                        }
                    }
                    wp_reset_query();
                    ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>