<?php ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-okolica" href="#collapse-okolica" aria-expanded="true" aria-controls="collapse-okolica">Sekcja okolica</a></h4>
		</div>
		<div class="panel-body panel-collapse collapse" id="collapse-okolica">
			<div class="row">

				<div class="col-md-12">
          <div class="form-group">
              <label for="aqua_okolica_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_okolica_h1" value="<?= $options['aqua_okolica_h1']; ?>">
          </div>

          <div class="form-group">
              <label for="aqua_okolica_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_okolica_lead" value="<?= $options['aqua_okolica_lead']; ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
