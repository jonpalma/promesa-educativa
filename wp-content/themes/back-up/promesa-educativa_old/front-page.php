<?php get_header(); ?>
<div class="wrapper">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner">
        <!--<iframe id="ytplayer" type="text/html" src="https://www.youtube.com/embed/mcixldqDIEQ?rel=0&autoplay=1&controls=0&showinfo=0&loop=1&iv_load_policy=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
<script>
var tag = document.createElement('script');

tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
player = new YT.Player('ytplayer', {
events: {
'onReady': onPlayerReady
}
});
}

function onPlayerReady() {
player.playVideo();
// Mute!
player.mute();
}
</script>-->
        <video autoplay loop muted>
            <source src="<?php echo bloginfo('template_url'); ?>/video/banner.mp4" type="video/mp4">
        </video>
        <div class="container text-center vertical-align">
            <h1 class="banner-header"><?php echo CFS()->get('banner_caption');?></h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros spacing" id="nosotros">
        <img class="hidden-xs vertical-align" src="<?php bloginfo('template_url')?>/img/nosotros/child2.png">
        <div class="container">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 no-padding">
                <h1 class="header green text-center"><?php echo CFS()->get('about_us_title');?></h1>
                <p class="text text-justify">
                    <?php echo CFS()->get('about_us_text');?>
                </p>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROGRAMAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="programas">
        <div class="container text-center">
            <div class="vertical-align">
                <h1 class="header green">NUESTROS PROGRAMAS SON:</h1>
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <img class="img-responsive center-block" src="<?php echo CFS()->get('riberas_img');?>" alt="Colegio Riberas">
                        <p class="text text-justify">
                            <?php echo CFS()->get('riberas_text');?>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive center-block" src="<?php echo CFS()->get('sewa_img');?>" alt="Sistema Musical">
                        <p class="text text-justify">
                            <?php echo CFS()->get('sewa_text');?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ALIANZAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="alianzas text-center">
        <div class="educativas">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">Alianzas Educativas</h1>
                </div>
            </div>
            <div class="container light-spacing">
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/conservatorio.png" alt="Conservatorio de Música"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/cecytech.png" alt="CECYTECH"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/facultad.png" alt="Facultad de Artes"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/kipp.png" alt="KIPP"></div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/tec.png" alt="Tec de Monterrey"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/networks.png" alt="Networks of Schools"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/la-salle.png" alt="Universidad La Salle"></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">SECyD</p></div>
                </div>
            </div>
        </div>
        <div class="ong">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">Alianzas ONG</h1>
                </div>
            </div>
            <div class="container light-spacing">
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/casa-hogar.png" alt="Casa Hogar de Niñas"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/fechac.png" alt="FECHAC"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/immujer.png" alt="IMMUJER"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/comunidad.png" alt="Comunidad y Familia"></div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/vicentinas.png" alt="Vicentinas"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/world-book.png" alt="World is a Book"></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Centro comunitario para Educar a la Familia, A.C.</p></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Siembra y Cosecha, A.C.</p></div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Promotora para el Desarrollo del Niño, A.C.</p></div>
                </div>
            </div>
        </div>
        <div class="gubernamentales">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">Alianzas Gubernamentales</h1>
                </div>
            </div>
            <div class="container light-spacing">
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/ayuntamiento.png" alt="Ayuntamiento Chihuahua"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/cultura.png" alt="Secretaría de Cultura"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/dif.png" alt="dif"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/musica-armonia.png" alt="Música Armonía"></div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/instituto-cultura.png" alt="Instituto de la Cultura"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/fech.png" alt="FECH"></div>
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/gobierno.png" alt="Gobierno del Estado"></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Cento Comunitario Riberas</p></div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Atención Ciudadana</p></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Secretaria de Educación, Cultura y Deporte</p></div>
                </div>
            </div>
        </div>
        <div class="otras">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">Otras Alianzas</h1>
                </div>
            </div>
            <div class="container light-spacing no-spacing-bottom">
                <div class="row no-margin">
                    <div class="col-sm-3 col-xs-6"><img class="vertical-align center-block img-responsive" src="<?php bloginfo('template_url')?>/img/alianzas/santa-rosa.png" alt="Conservatorio de Música"></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Parroquia de nuestra Señora de Fátima</p></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Parroquia de San José de Ávalos</p></div>
                    <div class="col-sm-3 col-xs-6"><p class="text vertical-align">Parroquia de San Antonio de Padua</p></div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticias spacing" id="noticias">
        <div class="container text-center">
            <h1 class="header orange"><?php echo CFS()->get('noticias_title');?></h1>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
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
                                    <div class="vertical-align"><p class="white text"><?php echo $post->post_content; ?></p></div>
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DONACIONES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="donaciones">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php bloginfo('template_url')?>/img/parallax/bg2.jpg"></div>
            <div class="container text-center">
                <div class="vertical-align">
                    <h1 class="white header"><?php echo CFS()->get('donaciones_title');?></h1>
                    <p class="text white">
                        <?php echo CFS()->get('donaciones_text');?>
                    </p>
                    <a class="white green-btn center-block" href="donaciones">Formas de donar</a>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VIDEO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="video text-center">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php bloginfo('template_url')?>/img/banner/bg.jpg"></div>
            <div class="vertical-align caption">
                <h1 class="white header">Ver Video Institucional</h1>
                <a href="#video-modal" data-toggle="modal" data-target="#video-modal"><img class="img-responsive center-block" src="<?php bloginfo('template_url')?>/img/video/play.png" alt=""></a>
            </div>
        </div>
        <div class="modal fade" id="video-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/bi738igrDW0" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Regresar</button>				
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>