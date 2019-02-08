<?php ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#panel-options" href="#collapse-formularz" aria-expanded="true" aria-controls="collapse-formularz">Formularz kontaktowy &amp; stopka</a></h4>
		</div>
		<div class="panel-body panel-collapse collapse" id="collapse-formularz">
			<div class="row">

				<div class="col-md-12">
          <div class="form-group">
              <label for="aqua_contact_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_contact_h1" value="<?= $options['aqua_contact_h1']; ?>">
          </div>

          <div class="form-group">
              <label for="aqua_contact_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
              <input type="text" class="form-control" name="aqua_contact_lead" value="<?= $options['aqua_contact_lead']; ?>">
          </div>

          <hr>

          <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                      <label for="aqua_contact_email"><?= __('Email na który ma trafić wiadomość', 'aqua'); ?></label>
                      <input type="text" class="form-control" name="aqua_contact_email" value="<?php echo stripslashes($options['aqua_contact_email']); ?>">
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                      <label for="aqua_contact_phone"><?= __('Telefon', 'aqua'); ?></label>
                      <input type="text" class="form-control" name="aqua_contact_phone" value="<?php echo stripslashes($options['aqua_contact_phone']); ?>">
                  </div>                        
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                      <label for="aqua_contact_facebook"><?= __('Facebook', 'aqua'); ?></label>
                      <input type="text" class="form-control" name="aqua_contact_facebook" value="<?php echo stripslashes($options['aqua_contact_facebook']); ?>">
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                      <label for="aqua_contact_iban"><?= __('Numer konta', 'aqua'); ?></label>
                      <input type="text" class="form-control" name="aqua_contact_iban" value="<?php echo stripslashes($options['aqua_contact_iban']); ?>">
                  </div>
              </div>
          </div>

          <div class="row">
          	<div class="col-md-12">
	          	<div class="form-group">
	              <label for="aqua_contact_address"><?= __('Adres', 'aqua'); ?></label>
	              <input type="text" class="form-control" name="aqua_contact_address" value="<?= stripslashes($options['aqua_contact_address']); ?>">
	          	</div>
          	</div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <label for="aqua_contact_form"><?= __('Tekst nad formularzem', 'aqua'); ?></label>
                <input type="text" class="form-control" name="aqua_contact_form" value="<?= stripslashes($options['aqua_contact_form']); ?>">
              </div>

            </div>
          </div>

                

        </div>



			</div>
		</div>
	</div>