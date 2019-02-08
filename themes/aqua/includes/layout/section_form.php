
<div class="container">

  <div class="row">

    <h2>
      <?= pll__($options["aqua_contact_form"]); ?>
    </h2>

    <div class="info-box">
    <p><?= pll__('Formularz szybkiego kontaktu'); ?></p>


      <form id="aqua-form" class="form" method="post" action="<?= get_template_directory_uri() . '/includes/mailer.php'; ?>">


        <div class="col-md-4">
          <div class="form-group">

            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
              <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="<?= pll__('Twoje imię'); ?>">
            </div>

            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>
              <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="<?= pll__('Email'); ?>">
            </div>

            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-phone fa-fw"></i></div>
              <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="<?= pll__('Telefon'); ?>">
            </div>

            <div id="messanger"></div>

            <input type="hidden" name="msg-phone-required" value="<?= pll__("Podaj swój telefon lub poprawny adres email."); ?>">
            <input type="hidden" name="msg-body-required" value="<?= pll__("Wpisz treść wiadomości."); ?>">
            <input type="hidden" name="msg-ok" value="<?= pll__("Wysłano wiadomość - dziękujemy."); ?>">
            <input type="hidden" name="msg-internal-error" value="<?= pll__("Formularz wypełniony poprawnie, ale wystąpił wewnętrzny błąd podczas wysyłania wiadomości. Wiadomość nie została wysłana."); ?>">
            <input type="hidden" name="msg-dest-email" value="<?= $options["aqua_contact_email"]; ?>">          
          
          </div>
        </div>
        <div class="col-md-8">
    
            <div class="input-group">
              <div class="input-group textbox">
                  <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                  <textarea id="exampleTextarea" name="message" class="form-control" rows="9" placeholder="<?= pll__('Treść wiadomości'); ?>" ></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-default"><?= pll__('Wyślij'); ?></button>
            
        </div>


        <div class="sign">
          <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
        </div>

      </form>

    </div><!-- contact form -->

    <hr>
    
  </div>


  
</div><!-- container -->


