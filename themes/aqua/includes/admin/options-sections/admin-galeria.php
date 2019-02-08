<?php ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-galeria" href="#collapse-galeria" aria-expanded="true" aria-controls="collapse-galeria">Sekcja galeria</a></h4>
		</div>
		<div class="panel-body panel-collapse collapse" id="collapse-galeria">
			<div class="row">

				<div class="col-md-12">
          <div class="form-group">
              <label for="aqua_galeria_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_galeria_h1" value="<?= $options['aqua_galeria_h1']; ?>">
          </div>

          <div class="form-group">
              <label for="aqua_galeria_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_galeria_lead" value="<?= $options['aqua_galeria_lead']; ?>">
          </div>
        </div>
      </div>
    </div>
  </div>