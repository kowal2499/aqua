<?php 
	$res = get_option('sidebars_widgets');

	// czy mamy załadowany sidebar aqua_sekcja_okolica ?
	if (array_key_exists('aqua_sekcja_okolica', $res)) {

		$order = array();
		// weź wszystkie widgety z aqua_sekcja_okolica i zapisz ich kolejność
		foreach ($res['aqua_sekcja_okolica'] as $item) {
			$order[] = substr($item, strpos($item, '-') + 1 );
		}

		// pobierz wszystkie instancje aqua_sekcja_okolica i pracuj według ich kolejności w sidebarze
		$widgets = get_option('widget_aqua_atrakcje_widget');

	}

?>

	<div class="container">
		<div class="row">
			<h2>
				<?= pll__($options['aqua_okolica_h1']); ?>
				<div class="lead"><?= pll__($options['aqua_okolica_lead']); ?></div>
			</h2>

<?php

	$widget_data = array();

	foreach ($order as $i) {
		if (!empty($widgets[$i]['title'])) {
			$line = array(
				"title" => $widgets[$i]["title"],
				"uploaded_image" => $widgets[$i]["uploaded_image"],
				"description" => $widgets[$i]["description"],
				"img_alt" => $widgets[$i]["img_alt"]
				);
			array_push($widget_data, $line);
		}
	}
?>
			<!-- Menu z tytułami okolicznych miejsc -->
			<div class="carousel-page-links" id="links-spots">
				<ul>
				<?php 
				$first = true;
				foreach ($widget_data as $record): ?>
					<li class="<?php if ($first) { echo "active"; $first = false; } ?>"><?php echo pll__($record["title"]); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>

			<!-- właściwy opis i obrazek -->
			<div class="owl-carousel" id="carousel-spots">
				<?php foreach ($widget_data as $record): ?>

					<div class="item" >
						<div class="row">

						<div class="col-sm-4">
							<img src="<?php echo $record['uploaded_image']; ?>" alt="<?= $record['img_alt'];?>" class="img-responsive">
						</div>
						<div class="col-sm-8">
							<div class="description">
								<h3><?php echo pll__($record["title"]); ?></h3>
								<?php echo pll__($record["description"]); ?>
							</div>
						</div>

						</div>
					</div>


				<?php endforeach; ?>
				<?php #if (is_active_sidebar('aqua_sekcja_okolica')) {
						#dynamic_sidebar('aqua_sekcja_okolica'); } ?>
			</div>

		</div>
	</div>