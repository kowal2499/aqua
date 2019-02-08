<?php

	$res = get_option('sidebars_widgets');

	// czy mamy załadowany sidebar aqua_sekcja_galeria ?
	if (array_key_exists('aqua_sekcja_galeria', $res)) {

		$order = array();
		// weź wszystkie widgety z aqua_seria_galeria i zapisz ich kolejność
		foreach ($res['aqua_sekcja_galeria'] as $item) {
			$order[] = substr($item, strpos($item, '-') + 1 );
		}

		// pobierz wszystkie instancje widget_aqua_galeria_widget i pracuj według ich kolejności w sidebarze
		$widgets = get_option('widget_aqua_galeria_widget');
		// echo "<pre>";
		foreach ($order as $i) {

			// teraz $widets[$i] wskazuje na właściwy w kolejności widget i zwraca jego dane
			// echo ($widgets[$i]["title"]."<br>");
			// echo ($widgets[$i]["description"]."<br>");
			// echo "-----<br>";	
		}
		// echo "</pre>";
	}

	function strToArray($str) {
		$tmp = explode(",", $str);
		$result = array();

		foreach ($tmp as $key) {
			$result[] = trim($key);
		}
		return $result;
	}

	function getImgLink($id, $size) {
		$result = wp_get_attachment_image_src($id, $size);

		if (!empty($result)) {
			return $result[0];
		}
		return false;
	}

	function getAlt($id) {
		return get_post_meta($id, '_wp_attachment_image_alt', true);
	}


	?>


<div class="container">
	<div class="row">

	<h2>
		<?= pll__($options['aqua_galeria_h1']); ?>
		<div class="lead"><?= pll__($options['aqua_galeria_lead']); ?></div>
	</h2>

	<div class="carousel-page-links" id="links-gallery">
		<ul>
			<?php 
				$first = true;
				foreach ($order as $i): ?>
					<li class="<?php if ($first) { echo "active"; $first = false; } ?>"><?= pll__($widgets[$i]['title']); ?></li>
			<?php endforeach; ?>
			
		</ul>
	</div>

	<div class="owl-carousel" id="carousel-gallery">
		
			<?php 
				foreach ($order as $i): 
			?>
				<div class="item gallery aqua-lightbox-gallery">
					<div class="row">
						<?php 

							$images_array = strToArray($widgets[$i]['description']); 
							$img01 = isset($images_array[0]) ? $images_array[0] : false;
							$img02 = isset($images_array[1]) ? $images_array[1] : false;
							$img03 = isset($images_array[2]) ? $images_array[2] : false;
							$img04 = isset($images_array[3]) ? $images_array[3] : false;
							$img05 = isset($images_array[4]) ? $images_array[4] : false;
							$img06 = isset($images_array[5]) ? $images_array[5] : false;
							$img07 = isset($images_array[6]) ? $images_array[6] : false;
							$img08 = isset($images_array[7]) ? $images_array[7] : false;
							$img09 = isset($images_array[8]) ? $images_array[8] : false;
                        
                            $images = [];

                            foreach ($images_array as $image) {
                                if (wp_get_attachment_image_src($image) !== false) {
                                    $images[intval($image)] = [
                                    'full' => getImgLink($image, 'full'),
                                    'wide' => getImgLink($image, 'wide'),
                                    'tall' => getImgLink($image, 'tall'),
                                    'box' => getImgLink($image, 'box'),
                                    'alt' => getAlt($image)
                                    ];
                                } else {
                                    $images[intval($image)] = false;
                                }
                            }

                            ?>

						<!-- first column -->
						<div class="col-md-6">
							<?php if ($img01 && $images[$img01]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img01]['full']; ?>"><img src="<?php echo $images[$img01]['wide']; ?>" class="img-responsive" alt="<?= $images[$img01]['alt'] ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>

						 	<div class="row inner-row">
								<div class="col-md-6">
									<?php if ($img02 && $images[$img02]): ?>
									<div class="img-wrapper">
										<a href="<?php echo $images[$img02]['full']; ?>"><img src="<?php echo $images[$img02]['box']; ?>" class="img-responsive" alt="<?= $images[$img02]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
									</div>
									<?php endif; ?>
								
								</div>

								<div class="col-md-6">
									<?php if ($img03 && $images[$img03]): ?>
									<div class="img-wrapper">
										<a href="<?php echo $images[$img03]['full']; ?>"><img src="<?php echo $images[$img03]['box']; ?>" class="img-responsive" alt="<?= $images[$img03]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
									</div>
									<?php endif; ?>
								</div>

							</div>

							<?php if ($img04 && $images[$img04]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img04]['full']; ?>"><img src="<?php echo $images[$img04]['wide']; ?>" class="img-responsive" alt="<?= $images[$img04]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>
						</div><!-- end first column -->

						<div class="col-md-3"> <!-- second column -->
							<?php if ($img05 && $images[$img05]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img05]['full']; ?>"><img src="<?php echo $images[$img05]['tall']; ?>" class="img-responsive" alt="<?= $images[$img05]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>

							<?php if ($img06 && $images[$img06]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img06]['full']; ?>"><img src="<?php echo $images[$img06]['box']; ?>" class="img-responsive" alt="<?= $images[$img06]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>
						</div> <!-- end second column -->

						<div class="col-md-3"><!-- third column -->
							<?php if ($img07 && $images[$img07]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img07]['full']; ?>"><img src="<?php echo $images[$img07]['box']; ?>" class="img-responsive" alt="<?= $images[$img07]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>
							<?php if ($img08 && $images[$img08]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img08]['full']; ?>"><img src="<?php echo $images[$img08]['box']; ?>" class="img-responsive" alt="<?= $images[$img08]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>
							<?php if ($img09 && $images[$img09]): ?>
							<div class="img-wrapper">
								<a href="<?php echo $images[$img09]['full']; ?>"><img src="<?php echo $images[$img09]['box']; ?>" class="img-responsive" alt="<?= $images[$img09]['alt']; ?>"><div class="overlay"><div class="text"><i class="fa fa-expand" aria-hidden="true"></i></div></div></a>
							</div>
							<?php endif; ?>
						
						</div><!-- end third column -->


					</div>
				</div>
			<?php endforeach; ?>
	</div>

	</div><!-- row -->
</div><!-- container -->