<?php include('header.php'); ?>
<div class="wrapper sumate">
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

    <!--/* VOLUNTARIADO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="voluntariado spacing">
        <div class="container">
            <div class="row no-margin">
                <div class="col-sm-6">
                    <h3 class="gray-green"><?php echo CFS()->get('practicas_small_title');?></h3>
                    <h1><?php echo CFS()->get('practicas_main_title');?></h1>
                    <p class="text">
                        <?php echo CFS()->get('practicas_text');?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <?php echo do_shortcode('[contact-form-7 id="165" title="Voluntariado/Prácticas Profesionales"]');?>
                </div>
            </div>
            <div class="row no-margin light-spacing no-spacing-top">
                <div class="col-sm-12">
                    <h3 class="gray-green"><? echo CFS() -> get('participar_title'); ?></h3>
                </div>
                <div class="col-sm-6">
                    <p class="text">
                        <? echo CFS() -> get('participar_riberas'); ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="text">
                        <? echo CFS() -> get('participar_sewa'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>