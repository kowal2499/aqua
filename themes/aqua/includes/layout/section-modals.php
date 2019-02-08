
<!-- Regulamin pobytu -->

<div class="modal fade" id="regulaminPobytu" tabindex="-1" role="dialog" aria-labelledby="myModal01">
	<div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
			
			<div class="modal-header">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	<h4 class="modal-title" id="myModal01"><?= pll__($options['aqua_terms_of_stay_title']); ?></h4>
     	</div>

      

     	<div class="modal-body">

      <?php
        $termsOfStay = urldecode($options["aqua_terms_of_stay"]);
        $decoded = json_decode($termsOfStay, true);
        if (!empty($decoded)):
      ?>


        <ol>

        <?php 
          foreach ($decoded as $row) :
        ?>

          <li><?= pll__($row["body"]); ?></li>

      <?php
        endforeach;
      ?>

        </ol>

  <?php
    endif;
  ?>

     	</div><!-- modal-body -->
     
     <div class="modal-footer">
        <a type="button" class="btn btn-default" href="<?= get_template_directory_uri(). '/assets/download/RegulaminPobytu.pdf'; ?>" download"><?= pll__("Pobierz pdf"); ?></a>
        <a type="button" class="btn btn-primary" data-dismiss="modal"><?= pll__("Zamknij"); ?></a>
     </div>

	</div><!-- modal-content -->

	</div>

</div>


<!-- Zasady rezerwacji -->

<div class="modal fade" id="zasadyRezerwacji" tabindex="-1" role="dialog" aria-labelledby="myModal02">
	<div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
			
			<div class="modal-header">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	<h4 class="modal-title" id="myModal02"><?= pll__($options['aqua_terms_of_reservation_title']); ?></h4>
     	</div>

     	<div class="modal-body">

      <?php
        $termsOfReservation = urldecode($options["aqua_terms_of_reservation"]);
        $decoded = json_decode($termsOfReservation, true);
        if (!empty($decoded)):
      ?>


        <ol>
          <?php 
            foreach ($decoded as $row) :
          ?>
            <li><?= pll__($row["body"]); ?></li>
          <?php
            endforeach;
          ?>
        </ol>
      
      <?php
        endif;
      ?>
     	
      </div><!-- modal-body -->
     
     <div class="modal-footer">
        <a type="button" class="btn btn-default" href="<?= get_template_directory_uri(). '/assets/download/ZasadyRezerwacji.pdf'; ?>" download"><?= pll__("Pobierz pdf"); ?></a>
        <a type="button" class="btn btn-primary" data-dismiss="modal"><?= pll__("Zamknij"); ?></a>
     </div>

	</div><!-- modal-content -->

	</div>

</div>

