<?php include('header.php'); ?>
<div class="wrapper sumate">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DONACIONES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="donacion banner" id="donacion">
        <img class="banner-img" src="<?php echo CFS()->get('banner'); ?>" alt="Banner">
        <div class="container text-center vertical-align">
            <h1 class="banner-header"><?php echo CFS()->get('banner_caption_2');?></h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* EMPRESAS/DONANTES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="donantes spacing">
        <div class="container">
            <div class="col-sm-6">
                <h3><?php echo CFS()->get('empresas_small_title');?></h3>
                <h1 class="white"><?php echo CFS()->get('empresas_big_title');?></h1>
                <p class="text white">
                    <?php echo CFS()->get('empresas_text');?>
                </p>
            </div>
            <div class="col-sm-6">
                <?php echo do_shortcode('[contact-form-7 id="166" title="Empresas/Donantes Particulares"]');?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DONACIÓN  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="donacion spacing">
        <div class="container text-center">
            <h1 class="header green"><?php echo CFS()->get('donaciones_title');?></h1>
            <p class="text"><?php echo CFS()->get('donaciones_text');?></p>
            <div class="row no-margin">
                <div class="col-sm-6">
                    <img class="img-responsive center-block" src="<?php echo CFS()->get('riberas_img');?>" alt="">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="ME3RGDEBAT5G8">
                        <input type="submit" class="green-btn white center-block" border="0" name="submit" value="DONAR">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <p class="text text-left">
                        <strong>DEPÓSITO O TRANSFERENCIA:</strong><br>
                        <?php echo CFS()->get('deposito_riberas');?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive center-block" src="<?php echo CFS()->get('sewa_img');?>" alt="">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="NUTU4H2J8RSGG">
                        <input type="submit" class="gray-btn white center-block" border="0" name="submit" value="DONAR">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <p class="text text-left">
                        <strong>DEPÓSITO O TRANSFERENCIA:</strong><br>
                        <?php echo CFS()->get('deposito_sewa');?>
                    </p>
                </div>
            </div>
            <p class="text formato">
                Si usted requiere comprobación fiscal  de su donativo, favor de llenar el formato y solicitarlo la dirección <a class="mail-to" href="mailto:contacto@promesaeducativa.org">contacto@promesaeducativa.org</a>
            </p>
        </div>
        <div class="container">
            <div class="col-sm-12"><?php echo do_shortcode('[contact-form-7 id="172" title="Formulario para Donación"]'); ?></div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>