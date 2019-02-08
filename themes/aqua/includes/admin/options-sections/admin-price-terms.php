<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#panel-options" href="#collapse-cennik" aria-expanded="true" aria-controls="collapse-cennik">Cennik i Regulaminy</a></h4>
    </div>
    <div class="panel-body panel-collapse collapse" id="collapse-cennik">
        <div class="row">

            <div class="col-md-12">
                

                <div class="form-group">
                    <label for="aqua_terms_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_terms_h1" value="<?= $options['aqua_terms_h1']; ?>">
                </div>

                <div class="form-group">
                    <label for="aqua_terms_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
                    <input type="text" class="form-control" name="aqua_terms_lead" value="<?= $options['aqua_terms_lead']; ?>">
                </div>

                


<!-- 


    ### Zasady ze strony głównej


-->

                <input type="hidden" class="form-control" id="aqua_terms_key_rules" name="aqua_terms_key_rules" value="<?php echo $options['aqua_terms_key_rules']; ?>">

                <div class="admin-list">
                    <h4>Ważne zasady, widoczne bezpośrednio na stronie głównej</h4>
                    
                    <div id="existing-rules"></div>

                    <p>Nowa ważna zasada:</p>

                    <div class="addNew">
                        <label for="new_rule_Body">Treść: </label>
                        <input type="text" name="new_rule_Body" id="new_rule_Body" class="form-control" style="width: 50%">

                        <button class="btn btn-success" id="add-new-rule" type="button">Dodaj</button>
                    </div>
                </div>

<!-- 


    ### Regulamin pobytu


-->

                

                <input type="hidden" class="form-control" id="aqua_terms_of_stay" name="aqua_terms_of_stay" value="<?php echo $options['aqua_terms_of_stay']; ?>">


                <div class="admin-list">
                    <h4>Regulamin pobytu</h4>

                    <div class="form-group">
                        <label for="aqua_terms_of_stay_title"><?= __('Tytuł nad punktami', 'aqua'); ?></label>
                        <input type="text" class="widefat" name="aqua_terms_of_stay_title" value="<?= $options['aqua_terms_of_stay_title']; ?>" >
                    </div>

                    <div id="terms-of-stay"></div>


                    <div class="addNew">
                        <label for="new_term">Nowy punkt: </label>
                        <textarea name="new_term" id="new_term" class="form-control" style="width: 100%" rows="3"></textarea>

                        <button class="btn btn-success" id="add-new-term" type="button">Dodaj</button>
                    </div>
                </div>


<!-- 


    ### Regulamin rezerwacji


-->


                <input type="hidden" class="form-control" id="aqua_terms_of_reservation" name="aqua_terms_of_reservation" value="<?php echo $options['aqua_terms_of_reservation']; ?>">

                <div class="admin-list">
                    <h4>Regulamin rezerwacji</h4>
                    
                    <div class="form-group">
                        <label for="aqua_terms_of_reservation_title"><?= __('Tytuł nad punktami', 'aqua'); ?></label>
                        <input type="text" class="widefat" name="aqua_terms_of_reservation_title" value="<?= $options['aqua_terms_of_reservation_title']; ?>" >
                    </div>

                    <div id="terms-of-reservation"></div>

                    <div class="addNew">
                        <label for="new_reservation_term">Nowy punkt: </label>
                        <textarea name="new_reservation_term" id="new_reservation_term" class="form-control" style="width: 100%" rows="3"></textarea>

                        <button class="btn btn-success" id="add-new-reservation-term" type="button">Dodaj</button>
                    </div>
                </div>


            

            </div><!-- .col -->

        </div>
    </div>




</div>