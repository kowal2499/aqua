<?php ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-opisy" href="#collapse-opisy" aria-expanded="true" aria-controls="collapse-opisy">Sekcja opisy</a></h4>
		</div>
		<div class="panel-body panel-collapse collapse" id="collapse-opisy">
			<div class="row">

				<div class="col-md-12">
          <div class="form-group">
              <label for="aqua_opisy_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_opisy_h1" value="<?= $options['aqua_opisy_h1']; ?>">
          </div>

          <div class="form-group">
              <label for="aqua_opisy_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_opisy_lead" value="<?= $options['aqua_opisy_lead']; ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
