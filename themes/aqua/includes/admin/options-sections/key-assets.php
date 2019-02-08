<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-assets" href="#collapse-assets" aria-expanded="true" aria-controls="collapse-assets">Zalety</a></h4>
    </div>
    <div class="panel-body panel-collapse collapse" id="collapse-assets">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                  <label for="aqua_zalety_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
                  <input type="text" class="form-control" name="aqua_zalety_h1" value="<?= $options['aqua_zalety_h1']; ?>">
                </div>

                <div class="form-group">
                  <label for="aqua_zalety_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
                  <input type="text" class="form-control" name="aqua_zalety_lead" value="<?= $options['aqua_zalety_lead']; ?>">
                </div>

                <div class="form-group">
                  <label for="aqua_zalety_lead_sport"><?= __('Opis sekcji sportowej', 'aqua'); ?></label>
                  <input type="text" class="form-control" name="aqua_zalety_lead_sport" value="<?= $options['aqua_zalety_lead_sport']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Zalety ogólne</h4>
                <div class="form-group">
                    <label for="aqua_input_assets_row"><?= __('Ilość kafelków w wierszu', 'aqua'); ?></label>
                    <input type="number" class="form-control" name="aqua_input_assets_row" value="<?= $options['assets_row']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_input_assets_class"><?= __('Klasa CSS kafelka', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_assets_class" value="<?= $options['assets_class']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_input_assets_offset"><?= __('Klasa CSS offsetu kafelka', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_assets_offset" value="<?= $options['assets_offset']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_input_assets_last_offset"><?= __('Klasa CSS offsetu dla ostatniego, niepłnego wiersza', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_assets_last_offset" value="<?= $options['assets_last']; ?>">
                </div>


            </div>

            <div class="col-md-6">
                <h4>Udogodnienia dla aktywnych</h4>
                <div class="form-group">
                    <label for="aqua_input_sport_row"><?= __('Ilość kafelków w wierszu', 'aqua'); ?></label>
                    <input type="number" class="form-control" id="aqua_input_sport_row" name="aqua_input_sport_row" value="<?= $options['sport_row']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_input_sport_class"><?= __('Klasa CSS kafelka', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_sport_class" value="<?= $options['sport_class']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_input_sport_offset"><?= __('Klasa CSS offsetu kafelka', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_sport_offset" value="<?= $options['sport_offset']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_input_sport_last_offset"><?= __('Klasa CSS offsetu dla ostatniego, niepłnego wiersza', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_input_sport_last_offset" value="<?= $options['sport_last']; ?>">
                </div>

            </div>      
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Udogodnienia dla dzieci</h4>

                <div class="form-group">
                  <label for="aqua_dla_dzieci_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
                  <input type="text" class="form-control" name="aqua_dla_dzieci_h1" value="<?= $options['aqua_dla_dzieci_h1']; ?>">                
                </div>

                <div class="form-group">
                  <label for="aqua_dla_dzieci_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
                  <input type="text" class="form-control" name="aqua_dla_dzieci_lead" value="<?= $options['aqua_dla_dzieci_lead']; ?>">
                </div>


            </div>
        </div>
    </div>
</div>