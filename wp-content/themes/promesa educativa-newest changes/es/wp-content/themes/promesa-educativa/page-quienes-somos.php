<?php include('header.php'); ?>
<div class="wrapper quienes">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner">
        <img class="banner-img" src="<?php echo CFS()->get('banner'); ?>" alt="Banner">
        <div class="container text-center vertical-align">
            <h1 class="banner-header"><?php echo CFS()->get('banner_caption');?></h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* HISTORIA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="historia spacing" id="historia">
        <div class="container">
            <img class="vertical-align hidden-xs" src="<?php bloginfo('template_url')?>/img/quienes/historia/girl.png">
            <div class="col-sm-4 hidden-xs">
            </div>
            <div class="col-sm-8 no-padding">
                <h1 class="header green text-center"><?php echo CFS()->get('historia_title');?></h1>
                <p class="text text-justify">
                    <?php echo CFS()->get('historia_text');?>
                </p>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MISIÓN/VISIÓN  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="mision spacing">
        <div class="container text-center">
            <div class="row no-margin">
                <div class="col-sm-6">
                    <img class="img-responsive center-block" src="<?php echo CFS()->get('mision_img');?>" alt="Misión">
                    <h3 class="header gray"><?php echo CFS()->get('mision_title');?></h3>
                    <p class="text text-justify">
                        <?php echo CFS()->get('mision_text');?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive center-block" src="<?php echo CFS()->get('vision_img');?>" alt="Visión">
                    <h3 class="header gray"><?php echo CFS()->get('vision_title');?></h3>
                    <p class="text text-justify">
                        <?php echo CFS()->get('vision_text');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRESENTACIÓN CORPORATIVA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="presentacion spacing no-spacing-top">
        <div class="container text-center">
            <h1 class="header green">DESCARGA NUESTRA</h1>
            <a href="<?php echo bloginfo('template_url'); ?>/pdf/presentacion_corporativa.pdf" class="white green-btn center-block" target="_blank">PRESENTACIÓN CORPORATIVA</a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VALORES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="valores spacing">
        <div class="container text-center">
            <h1 class="header white"><?php echo CFS()->get('valores_title');?></h1>
            <?php
            $arrayValores = CFS()->get('valores_array');
            $arrayLength = count($arrayValores);
            $arrayEnd = end($arrayValores);
            $counter = 0;
            foreach( $arrayValores as $valor ) {
                if($counter == 0 || $counter%6 == 0) {
                    echo '<div class="row no-margin">';
                }
                if($counter == 0 && $arrayLength < 6) {
                    echo '<div class="col-sm-1"></div>';
                }
            ?>
            <div class="col-sm-2">
                <img class="img-responsive center-block" src="<?php echo $valor['valor_img'];?>" alt="Integridad">
                <p class="white"><?php echo $valor['valor_name'];?></p>
            </div>
            <?php
                if($valor == $arrayEnd && $arrayLength < 6) {
                    echo '<div class="col-sm-1"></div>';
                }
                $counter++;
                if($counter%6 == 0 || $valor == $arrayEnd) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONSEJO DIRECTIVO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="directivo light-spacing">
        <img class="hidden-xs" src="<?php bloginfo('template_url')?>/img/quienes/consejo/orchestra.png">
        <div class="container text-center">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 no-padding">
                <h1 class="header green">CONSEJO DIRECTIVO</h1>
                <table class="text">
                    <tbody>
                        <?php $arrayDirectivo = CFS()->get('directivo_array');
             foreach( $arrayDirectivo as $directivo) {
                 echo '<tr>';
                 echo '<td class="text-right">'.$directivo['name'].'</td>';
                 echo '<td class="text-right"><span>'.$directivo['job_title'].'</span></td>';
                 echo '</tr>';
             } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONSEJO OPERATIVO/VOLUNTARIOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="operativo">
        <div class="container">
            <h1 class="header green text-center">EQUIPO OPERATIVO</h1>
            <table class="text">
                <tbody>
                    <?php 
                    $arrayOperativo = CFS()->get('operativo_array');
                    foreach( $arrayOperativo as $operativo) {
                        echo '<tr>';
                        echo '<td class="text-right">'.$operativo['name'].'</td>';
                        echo '<td class="text-left"><span>'.$operativo['job_position'].'</span></td>';
                        echo '</tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>