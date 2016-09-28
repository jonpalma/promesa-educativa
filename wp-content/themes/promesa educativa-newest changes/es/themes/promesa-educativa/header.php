<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Somos una asociación que implementa programas educativos, creativos, permanentes, de alto impacto y cobertura que apoyan el desarrollo integral de niños y jóvenes en situación de vulnerabilidad">
        <meta name="keywords" content="Promesa,Educativa,Educación,Programas Educativos,Creativos,Alto Impacto,Desarrollo Integral,Niños,Jóvenes,Vulnerabilidad,Colegio Riberas,Se'wá,Sistema Musical,ONG,Donativos,Apoyo">
        <meta name="author" content="Mixen">
        <title>Promesa Educativa</title>
        <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url');?>/img/icon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/css/grid-gallery/component.css">
        <script src="<?php echo get_bloginfo('template_url');?>/js/grid-gallery/modernizr.custom.js"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    </head>
    <body>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-81858006-1', 'auto');
            ga('send', 'pageview');

        </script>
        <?php if ( current_user_can( 'manage_options' ) ) { show_admin_bar( true ); } ?>
        <div class="navbar">
            <div class="container-fluid brand">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo('template_url');?>/img/logo.png" alt="Promesa Educativa"></a>
                    <div class="pull-right social">
                        <div class="vertical-align">
                            <a href="https://www.facebook.com/promesaeducativaparamexico" target="_blank"><img src="<?php echo get_bloginfo('template_url');?>/img/icons/fb.png" alt="facebook"></a>
                            <a href="" target="_blank"><img src="<?php echo get_bloginfo('template_url');?>/img/icons/twitter.png" alt="twitter"></a>
                            <a href="" target="_blank"><img src="<?php echo get_bloginfo('template_url');?>/img/icons/instagram.png" alt="instagram"></a>
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
                        <li><a class="vertical-align" href="<?php echo home_url(); ?>">Inicio</a></li>
                        <li><a class="vertical-align" href="quienes-somos">¿Quiénes Somos?</a></li>
                        <li class="dropdown">
                            <a class="vertical-align dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programas</a>
                            <ul class="dropdown-menu">
                                <li><a href="riberas">Colegio Riberas</a></li>
                                <li><a href="sewa">Sistema Musical Se’Wá</a></li>
                            </ul>
                        </li>
                        <li><a class="vertical-align" href="galeria">Galería</a></li>
                        <li><a class="vertical-align" href="transparencia">Transparencia</a></li>
                        <li><a class="vertical-align" href="contacto">Contacto</a></li>
                        <li><a class="vertical-align" href="voluntariado">Voluntariado</a></li>
                        <li><a class="vertical-align" href="donaciones">Dona Aquí</a></li>
                    </ul>
                </div>
            </div>
        </nav>