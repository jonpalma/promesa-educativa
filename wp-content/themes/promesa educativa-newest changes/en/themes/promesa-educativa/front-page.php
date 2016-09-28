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
        <video autoplay loop>
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
        <img class="hidden-xs vertical-align" src="<?php bloginfo('template_url')?>/img/nosotros/child2.png" alt="Decoration">
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
                <h1 class="header green">OUR PROGRAMS ARE:</h1>
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
                    <h1 class="white header">Educative Alliances</h1>
                </div>
            </div>
            <div class="container light-spacing">
                <?php
                $arrayEducativas = CFS()->get('educativas_array');
                $arrayLength = count($arrayEducativas);
                $arrayEnd = end($arrayEducativas);
                $counter = 0;
                foreach( $arrayEducativas as $alianza ) {
                    if($counter == 0 || $counter%4 == 0) {
                        echo '<div class="row no-margin">';
                    }
                ?>
                <div class="col-sm-3 col-xs-6">
                    <img class="img-responsive center-block" src="<?php echo $alianza['img'];?>" alt="Integridad">
                </div>
                <?php
                    $counter++;
                    if($counter%4 == 0 || $alianza == $arrayEnd) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="ong">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">ONG Alliances</h1>
                </div>
            </div>
            <div class="container light-spacing">
                <?php
                $arrayOng = CFS()->get('ong_array');
                $arrayLength = count($arrayOng);
                $arrayEnd = end($arrayOng);
                $counter = 0;
                foreach( $arrayOng as $alianza ) {
                    if($counter == 0 || $counter%4 == 0) {
                        echo '<div class="row no-margin">';
                    }
                ?>
                <div class="col-sm-3 col-xs-6">
                    <img class="img-responsive center-block" src="<?php echo $alianza['img'];?>" alt="Integridad">
                </div>
                <?php
                    $counter++;
                    if($counter%4 == 0 || $alianza == $arrayEnd) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="gubernamentales">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">Gubernamental Alliances</h1>
                </div>
            </div>
            <div class="container light-spacing">
                <?php
                $arrayGubern = CFS()->get('gubernamentales_array');
                $arrayLength = count($arrayGubern);
                $arrayEnd = end($arrayGubern);
                $counter = 0;
                foreach( $arrayGubern as $alianza ) {
                    if($counter == 0 || $counter%4 == 0) {
                        echo '<div class="row no-margin">';
                    }
                ?>
                <div class="col-sm-3 col-xs-6">
                    <img class="img-responsive center-block" src="<?php echo $alianza['img'];?>" alt="Integridad">
                </div>
                <?php
                    $counter++;
                    if($counter%4 == 0 || $alianza == $arrayEnd) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="otras">
            <div class="small-banner">
                <div class="vertical-align">
                    <h1 class="white header">Other Alliances</h1>
                </div>
            </div>
            <div class="container light-spacing no-spacing-bottom">
                <?php
                $arrayOtras = CFS()->get('otras_array');
                $arrayLength = count($arrayOtras);
                $arrayEnd = end($arrayOtras);
                $counter = 0;
                foreach( $arrayOtras as $alianza ) {
                    if($counter == 0 || $counter%4 == 0) {
                        echo '<div class="row no-margin">';
                    }
                ?>
                <div class="col-sm-3 col-xs-6">
                    <img class="img-responsive center-block" src="<?php echo $alianza['img'];?>" alt="Integridad">
                </div>
                <?php
                    $counter++;
                    if($counter%4 == 0 || $alianza == $arrayEnd) {
                        echo '</div>';
                    }
                }
                ?>
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
            <div class="parallax"><img src="<?php bloginfo('template_url')?>/img/parallax/bg2.jpg" alt="Parallax Bg"></div>
            <div class="container text-center">
                <div class="vertical-align">
                    <h1 class="white header"><?php echo CFS()->get('donaciones_title');?></h1>
                    <p class="text white">
                        <?php echo CFS()->get('donaciones_text');?>
                    </p>
                    <a class="white green-btn center-block" href="donaciones">Ways to Donate</a>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VIDEO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="video text-center">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php bloginfo('template_url')?>/img/banner/bg.jpg" alt="Parallax Bg"></div>
            <div class="vertical-align caption">
                <h1 class="white header">Watch Institutional Video</h1>
                <a href="#video-modal" data-toggle="modal" data-target="#video-modal"><img class="img-responsive center-block" src="<?php bloginfo('template_url')?>/img/video/play.png" alt=""></a>
            </div>
        </div>
        <div class="modal fade" id="video-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/bi738igrDW0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Back</button>				
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>