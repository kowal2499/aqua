<?php ?>

<!-- Slider Wrapper -->
	<input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
	<input type="radio" name="slider" class="slide-radio2" id="slider_2">
	<input type="radio" name="slider" class="slide-radio3" id="slider_3">
	<input type="radio" name="slider" class="slide-radio4" id="slider_4">
 
	<div class="slider-pagination">
		<label for="slider_1" class="page1"></label>
		<label for="slider_2" class="page2"></label>
		<label for="slider_3" class="page3"></label>
		<label for="slider_4" class="page4"></label>
	</div>

	<div class="weather-nest">
		<?php echo do_shortcode('[aqua_weather]'); ?>
	</div>

	<div class="slider-navigation arrow-left">
		<i class="fa fa-angle-left fa-4x"></i>
	</div>

	<div class="slider-navigation arrow-right">
		<i class="fa fa-angle-right fa-4x"></i>
	</div> 

	<div class="static-logo">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aqua.png" alt="AQUA Apartament logo">
	</div>

	<div class="slider-scroll-me-down">
			<a data-scroll href="#apartament"><i class="fa fa-angle-down fa-3x"></i></a>
	</div>
 
	<!-- Slider #1 -->
	<div class="slider slide-1" style="background-image: url('<?= $options['slider_image01']; ?>');">

		<div class="content-bottom">
			<div class="outline">
				<h2><?= pll__($options['slider_bigTxt01']); ?></h2>
			</div>
			<div class="sentence"><?= pll__($options['slider_smallTxt01']); ?></div>
			<a data-scroll href="<?= $options['slider_linkDest01'] ?>" class="btn"><?= pll__($options['slider_linkTxt01']); ?></a>
		</div>

	</div>
 
	<!-- Slider #2 -->
	<div class="slider slide-2" style="background-image: url('<?= $options['slider_image02']; ?>');">
		
		<div class="content-bottom">
			<div class="outline">
				<h2><?= pll__($options['slider_bigTxt02']); ?></h2>
			</div>
			<div class="sentence"><?= pll__($options['slider_smallTxt02']); ?></div>
			<a data-scroll href="<?= $options['slider_linkDest02'] ?>" class="btn"><?= pll__($options['slider_linkTxt02']); ?></a>
		</div>
		
	</div>
 
	<!-- Slider #3 -->
	<div class="slider slide-3" style="background-image: url('<?= $options['slider_image03']; ?>');">
		
		<div class="content-bottom">
			<div class="outline">
				<h2><?= pll__($options['slider_bigTxt03']); ?></h2>
			</div>
			<div class="sentence"><?= pll__($options['slider_smallTxt03']); ?></div>
			<a data-scroll href="<?= $options['slider_linkDest03'] ?>" class="btn"><?= pll__($options['slider_linkTxt03']); ?></a>
		</div>

	</div>
 
	<!-- Slider #4 -->
	<div class="slider slide-4" style="background-image: url('<?= $options['slider_image04']; ?>');">
		
		<div class="content-bottom">
			<div class="outline">
				<h2><?= pll__($options['slider_bigTxt04']); ?></h2>
			</div>
			<div class="sentence"><?= pll__($options['slider_smallTxt04']); ?></div>
			<a data-scroll href="<?= $options['slider_linkDest04'] ?>" class="btn"><?= pll__($options['slider_linkTxt04']); ?></a>
		</div>
	
	
	</div>
