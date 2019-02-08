<?php

	$res = get_option('sidebars_widgets');
	// $options = get_option('aqua_options');

	$assets_per_row = $options['assets_row'];
	$assets_class = $options['assets_class'];
	$assets_orphant_class = $options['assets_last'];
	$assets_offset_class = $options['assets_offset'];

	$sport_per_row = $options['sport_row'];
	$sport_class = $options['sport_class'];
	$sport_orphant_class = $options['sport_last'];
	$sport_offset_class = $options['sport_offset'];



	// czy mamy załadowany sidebar aqua_sekcja_apartament_zalety ?
	if (array_key_exists('aqua_sekcja_apartament_zalety', $res)) {

		$order = array();
		// weź wszystkie widgety z aqua_sekcja_apartament_zalety i zapisz ich kolejność
		foreach ($res['aqua_sekcja_apartament_zalety'] as $item) {
			$order[] = substr($item, strpos($item, '-') + 1 );
		}

		// pobierz wszystkie instancje widget_aqua_zalety_widget i pracuj według ich kolejności w sidebarze
		$widgets = get_option('widget_aqua_zalety_widget');
	}
?>


<div class="container">
	<div class="row">
		<h2>
			<?= pll__($options['aqua_zalety_h1']); ?>
			<div class="lead"><?= pll__($options['aqua_zalety_lead']); ?></div>
		</h2>

		<div class="row">

			<?php #if (is_active_sidebar('aqua_sekcja_apartament_zalety')) {
				#dynamic_sidebar('aqua_sekcja_apartament_zalety'); } ?>

			<?php
				$count = 1;
				$offset = "";
				$rowCount = 0;
				foreach ($order as $i):
					if ($count == 1) {
						echo '<div class="row">';
						$offset = $assets_offset_class . " ";
						$rowCount++;
					} else {
						$offset = "";
					}

					// jeśli jesteśmy na ostatnim wierszu to nadaj specjalny offset
					if ($rowCount == (ceil(count($order) / $assets_per_row))) {
						if (($assets_orphant_class) and ($count == 1)) {
							$offset = $assets_orphant_class. " ";
						}
					}

			?>

			<div class="<?= $offset . $assets_class; ?>">
	        	<div class="asset" >
	        		<img src="<?= $widgets[$i]['uploaded_image']; ?>" alt="<?= $widgets[$i]['img_alt']; ?>">
	        		<h3><?= pll__($widgets[$i]["title"]); ?></h3>
	        		<?php if (!empty($widgets[$i]["description"])) : ?>
	                <div class="horiz-center-wrapper">
	                    <div class="horiz-center">
	        		      <p><?= pll__($widgets[$i]["description"]); ?></p>
	                    </div>
	                </div>
	            	<?php endif; ?>
	        	</div>
	        </div>

			

			<?php
					
					if (($count % $assets_per_row) == 0) {
						echo '</div><!-- /.row -->';
						$count = 1;
					} else {
						$count++;
					}
				endforeach;

				if ($count <> 1) {
					echo '</div><!-- /.row -->';
				}
			?>



		</div>
	</div>


	<?php
		// ############ PODSEKCJA "SPORT" ############

	$res = get_option('sidebars_widgets');

	// czy mamy załadowany sidebar aqua_sekcja_apartament_sport ?
	if (array_key_exists('aqua_sekcja_apartament_sport', $res)) {

		$order = array();
		// weź wszystkie widgety z aqua_sekcja_apartament_sport i zapisz ich kolejność
		foreach ($res['aqua_sekcja_apartament_sport'] as $item) {
			$order[] = substr($item, strpos($item, '-') + 1 );
		}

		// pobierz wszystkie instancje widget_aqua_zalety_widget i pracuj według ich kolejności w sidebarze
		$widgets = get_option('widget_aqua_zalety_widget');
	}

	?>


	<div class="row">
		<h2><div class="lead"><?= pll__($options['aqua_zalety_lead_sport']); ?></div></h2>
		<?php // if (is_active_sidebar('aqua_sekcja_apartament_sport')) {
				// dynamic_sidebar('aqua_sekcja_apartament_sport'); } ?>


		<?php
				$count = 1;
				$offset = "";
				$rowCount = 0;
				foreach ($order as $i):
					if ($count == 1) {
						echo '<div class="row">';
						$offset = $sport_offset_class . " ";
						$rowCount++;
					} else {
						$offset = "";
					}

					// jeśli jesteśmy na ostatnim wierszu to nadaj specjalny offset
					if ($rowCount == (ceil(count($order) / $sport_per_row))) {
						if (($sport_orphant_class) and ($count == 1)) {
							$offset = $sport_orphant_class. " ";
						}
					}

			?>

			<div class="<?= $offset . $sport_class; ?>">
	        	<div class="asset" >
	        		<img src="<?= $widgets[$i]['uploaded_image']; ?>" alt="<?= $widgets[$i]['img_alt']; ?>">
	        		<h3><?= pll__($widgets[$i]["title"]); ?></h3>
	        		<?php 
	        			$description = pll__($widgets[$i]["description"]);
	        		if (!empty($description)) : ?>
	                <div class="horiz-center-wrapper">
	                    <div class="horiz-center">
	        		      <p><?= $description; ?></p>
	                    </div>
	                </div>
	            	<?php endif; ?>
	        	</div>
	        </div>

			

			<?php
					
					if (($count % $sport_per_row) == 0) {
						echo '</div><!-- /.row -->';
						$count = 1;
					} else {
						$count++;
					}
				endforeach;

				if ($count <> 1) {
					echo '</div><!-- /.row -->';
				}
			?>



	</div>

</div>