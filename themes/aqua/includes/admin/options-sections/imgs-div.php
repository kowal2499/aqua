<?php ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-dividers" href="#collapse-dividers" aria-expanded="true" aria-controls="collapse-dividers">Zdjęcia rozdzielające</a></h4>
    </div>

    <div class="panel-body panel-collapse collapse" id="collapse-dividers">
        <div class="row">


            <div class="col-md-6">
                <h4>Obrazek 01</h4>

                <?php
                    if (empty($options['section_image01'])) {
                        $section_image01 = get_template_directory_uri() . '/assets/img/no-image.jpg';
                    } else {
                        $section_image01 = $options['section_image01'];
                    }
                ?>
                <img src="<?= $section_image01; ?>" alt="" id="aqua_input_section_image01img" width="50%"><br><br>
                
                <div class="form-group">
                    <input type="hidden" class="form-control" name="aqua_input_section_image01" value="<?= $options['section_image01']; ?>" id="aqua_input_section_image01input">
                </div>

                <button type="button" class="btn btn-primary btn-sm upload-image" data-related="aqua_input_section_image01">Dodaj obrazek</button>
                <button type="button" class="btn btn-danger btn-sm remove-image" data-related="aqua_input_section_image01" data-noimage="<?= get_template_directory_uri() . '/assets/img/no-image.jpg'; ?>">Usuń obrazek</button>
                <br><br>

            </div>

            <div class="col-md-6">
                <h4>Obrazek 02</h4>

                <?php
                    if (empty($options['section_image02'])) {
                        $section_image02 = get_template_directory_uri() . '/assets/img/no-image.jpg';
                    } else {
                        $section_image02 = $options['section_image02'];
                    }
                ?>
                <img src="<?= $section_image02; ?>" alt="" id="aqua_input_section_image02img" width="50%"><br><br>
                
                <div class="form-group">
                    <input type="hidden" class="form-control" name="aqua_input_section_image02" value="<?= $options['section_image02']; ?>" id="aqua_input_section_image02input">
                </div>

                <button type="button" class="btn btn-primary btn-sm upload-image" data-related="aqua_input_section_image02">Dodaj obrazek</button>
                <button type="button" class="btn btn-danger btn-sm remove-image" data-related="aqua_input_section_image02" data-noimage="<?= get_template_directory_uri() . '/assets/img/no-image.jpg'; ?>">Usuń obrazek</button>
                <br><br>


            </div>

        </div>
    </div>
</div>