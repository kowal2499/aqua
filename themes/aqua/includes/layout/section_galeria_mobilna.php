<?php

    $res = get_option('sidebars_widgets');

    // czy mamy załadowany sidebar aqua_sekcja_galeria ?
    if (array_key_exists('aqua_sekcja_galeria', $res)) {

        $order = array();
        // weź wszystkie widgety z aqua_seria_galeria i zapisz ich kolejność
        foreach ($res['aqua_sekcja_galeria'] as $item) {
            $order[] = substr($item, strpos($item, '-') + 1 );
        }

        // pobierz wszystkie instancje widget_aqua_galeria_widget i pracuj według ich kolejności w sidebarze
        $widgets = get_option('widget_aqua_galeria_widget');
    }

?>

<div class="container">
    <div class="row">

    <h2>
        <?= pll__($options['aqua_galeria_h1']); ?>
        <div class="lead"><?= pll__($options['aqua_galeria_lead']); ?></div>
    </h2>

    <?php 

    $imgCollection = array();
    foreach ($order as $i) {
        $tmpArray = strToArray($widgets[$i]['description']);
        for ($i=0; $i<count($tmpArray); $i++) {
            $imgCollection[] = $tmpArray[$i];
        }  
    } 

    ?>

    <div class="owl-carousel gallery" id="carousel-gallery-mobile">

    <?php foreach ($imgCollection as $id) : ?>
        <?php
            if (wp_get_attachment_image_src($id) === false) {
                continue;
            }
        ?>
        <div class="item">
            <div class="img-wrapper">
            <a href="<?php echo getImgLink($id, 'full'); ?>">
                <img src="<?php echo getImgLink($id, 'box'); ?>" class="img-responsive" alt="<?= getAlt($id); ?>">
                <div class="overlay">
                    <div class="text">
                    <i class="fa fa-expand" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            </div>
        </div>
    <?php endforeach; ?>

    </div>

</div>
