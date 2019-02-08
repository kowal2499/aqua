<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-slider" href="#collapse-slider" aria-expanded="true" aria-controls="collapse-slider">Pokaz slajdów</a></h4>
    </div>
    <div class="panel-body panel-collapse collapse" id="collapse-slider">
        <div class="row">


            <?php
                $elm = array('01', '02', '03', '04');
                foreach ($elm as $i):
            ?>

            <div class="col-md-3">
                <h4>Obrazek <?= $i; ?></h4>

                <?php
                    if (empty($options['slider_image'.$i])) {
                        $image = get_template_directory_uri() . '/assets/img/no-image.jpg';
                    } else {
                        $image = $options['slider_image'.$i];
                    }
                ?>
                <img src="<?= $image; ?>" alt="" id="<?= "aqua_adminslide".$i."img"; ?>" width="100%"><br><br>
                
                <div class="form-group">
                    <input type="hidden" class="form-control" name="aqua_input_image<?= $i; ?>" value="<?= $options['slider_image'.$i]; ?>" id="<?= "aqua_adminslide".$i."input"; ?>">
                </div>

                <button type="button" class="btn btn-primary btn-sm upload-image" data-related="aqua_adminslide<?= $i; ?>">Dodaj obrazek</button>
                <button type="button" class="btn btn-danger btn-sm remove-image" data-related="aqua_adminslide<?= $i; ?>" data-noimage="<?= get_template_directory_uri() . '/assets/img/no-image.jpg'; ?>">Usuń obrazek</button>
                <br><br>

                <div class="form-group">
                    <label for=""><?= __('Duży opis', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_bigTxt<?= $i; ?>" value="<?= $options['slider_bigTxt'.$i]; ?>">
                </div>
                <div class="form-group">
                    <label for=""><?= __('Mały opis', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_smallTxt<?= $i; ?>" value="<?= $options['slider_smallTxt'.$i]; ?>">
                </div>
                <div class="form-group">
                    <label for=""><?= __('Opis na odnośniku', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_linkTxt<?= $i; ?>" value="<?= $options['slider_linkTxt'.$i]; ?>">
                </div>
                <div class="form-group">
                    <label for=""><?= __('Cel odnośnika', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_linkDest<?= $i; ?>" value="<?= $options['slider_linkDest'.$i]; ?>">
                </div>
            </div>

            <?php
                endforeach;
            ?>
        
        </div>
    </div>
</div>