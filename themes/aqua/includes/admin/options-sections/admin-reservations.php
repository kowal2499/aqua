<?php ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-rezerwacje" href="#collapse-rezerwacje" aria-expanded="true" aria-controls="collapse-rezerwacje">Rezerwacje</a></h4>
    </div>
    <div class="panel-body panel-collapse collapse" id="collapse-rezerwacje">
        <div class="row">

            <div class="col-md-12">
                

                <div class="form-group">
                    <label for="aqua_calendar_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_calendar_h1" value="<?= $options['aqua_calendar_h1']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_calendar_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_calendar_lead" value="<?= $options['aqua_calendar_lead']; ?>">
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="aqua_calendar_desc1"><?= __('Opis 1', 'aqua'); ?></label>
                            <input type="text" class="form-control" name="aqua_calendar_desc1" value="<?php echo stripslashes($options['aqua_calendar_desc1']); ?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="aqua_calendar_desc2"><?= __('Opis 2', 'aqua'); ?></label>
                            <input type="text" class="form-control" name="aqua_calendar_desc2" value="<?php echo stripslashes($options['aqua_calendar_desc2']); ?>">
                        </div>                        
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="aqua_calendar_desc3"><?= __('Opis 3', 'aqua'); ?></label>
                            <input type="text" class="form-control" name="aqua_calendar_desc3" value="<?php echo stripslashes($options['aqua_calendar_desc3']); ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="aqua_calendar_months_names"><?= __('Nazwy miesięcy', 'aqua'); ?></label>
                            <input type="text" class="form-control" name="aqua_calendar_months_names" value="<?php echo stripslashes($options['aqua_calendar_months_names']); ?>">
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="aqua_calendar_days_names"><?= __('Nazwy dni tygodnia', 'aqua'); ?></label>
                            <input type="text" class="form-control" name="aqua_calendar_days_names" value="<?php echo stripslashes($options['aqua_calendar_days_names']); ?>">
                        </div>  
                    </div>
                </div>

                

                <h4><?= __('Zarezerwowane terminy', 'aqua'); ?></h4>

                <div class="form-group">
                    <textarea name="aqua_txt_calendar" id="aqua_txt_calendar" cols="150" rows="10"><?= $options['aqua_txt_calendar']; ?></textarea>
                </div>

            </div>

        </div>
    </div>
</div>