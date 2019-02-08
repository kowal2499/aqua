<?php ?>

<div class="container">
    <div class="row">  
        <h2><?= pll__($options['aqua_dla_dzieci_h1']);?>
            <div class="lead"><?= pll__($options['aqua_dla_dzieci_lead']);?></div>
        </h2>

        <div class="info-box ver-grey" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/img/dladzieci.jpg"; ?>');">
                    
        <div class="row">

            <?php if (is_active_sidebar('aqua_sekcja_apartament_dzieci')) {
                        dynamic_sidebar('aqua_sekcja_apartament_dzieci'); } ?>

        </div>

        <div class="sign ver-grey">
            <img src="<?php echo get_template_directory_uri() . "/assets/img/balloon.png"; ?>" alt="">
        </div>


    </div>


    </div>
</div>