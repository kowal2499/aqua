<div class="container">
	
  <h2>
  	<?= pll__($options['aqua_terms_h1']); ?>
  	<div class="lead"><?= pll__($options['aqua_terms_lead']); ?></div>		
  </h2>


  <div class="row">

  <div class="col-sm-offset-3 col-sm-3">

  	<div class="p-cell center-block">
			<div class="p-head">
			    <?= pll__("SEZON NISKI"); ?>
			</div>

			<div class="p-body">
		    <div class="p-value">
		        <div class="p-number">
		        	360
							<div class="p-currency">PLN</div>
		        	<div class="p-pcs"><?= pll__("doba"); ?></div>
		        </div>
		    </div>

		    <div class="p-desc">
		        <?= pll__("od 01 października<br>do 30 kwietnia"); ?>
		    </div>
			</div>
	  </div>
  	
  </div>

  <div class="col-sm-3">
  	
  	<div class="p-cell center-block">
			<div class="p-head">
			    <?= pll__("SEZON WYSOKI"); ?>
			</div>

			<div class="p-body">
		    <div class="p-value">
		        <div class="p-number">
		        	420
							<div class="p-currency">PLN</div>
		        	<div class="p-pcs"><?= pll__("doba"); ?></div>
		        </div>
		    </div>

		    <div class="p-desc">
		        <?= pll__("od 01 maja<br>do 30 września"); ?>
		    </div>
			</div>
	  </div>

  </div>

  </div><!-- row -->

  <div class="row">

  <?php
  	$keyRules = urldecode($options["aqua_terms_key_rules"]);
  	$decoded = json_decode($keyRules, true);
  	if (!empty($decoded)):

  ?>
  	<hr>

  	<?php 
  		foreach ($decoded as $row) :
  	?>

  		<div class="rule"><?= pll__($row["body"]); ?></div>
  		<img src="<?= get_template_directory_uri(). '/assets/img/favicon.png'; ?>">
  	

  	<?php
  		endforeach;
  	?>


  	<hr>

  <?php
  	endif;
  ?>


  </div>

  <div class="row">

  	<div class="col-sm-offset-3 col-sm-3">
  		<a class="btn" data-toggle="modal" data-target="#regulaminPobytu"><?= pll__("Regulamin pobytu"); ?></a>

  	</div>

  	<div class="col-sm-3">
  		<a class="btn" data-toggle="modal" data-target="#zasadyRezerwacji"><?= pll__("Zasady rezerwacji"); ?></a>
  	</div>
  </div>

  
 </div>