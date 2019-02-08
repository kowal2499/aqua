<?php 
$options = get_option('aqua_options');
get_header(); ?>

	

	<section id="erla-fscreen-slider">
  	<?php include (get_template_directory() . "/includes/layout/slider.php"); ?>
  </section>

  <div id="modal-boxes">
		<?php include (get_template_directory() . "/includes/layout/section-modals.php"); ?>
	</div>

	<section id="apartament" class="sekcja animate">
		<?php require(get_template_directory() . '/includes/layout/section_opisy.php'); ?>
	</section>

	<section id="zalety" class="sekcja darker animate" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/img/background01.jpg"; ?>');">
		<?php require(get_template_directory() . '/includes/layout/section_zalety.php'); ?>
	</section>
	<section id="dladzieci" class="sekcja animate">
		<?php require(get_template_directory() . '/includes/layout/section_dla_dzieci.php'); ?>
	</section>

	<?php require(get_template_directory() . '/includes/layout/section-obrazek01.php'); ?>

	<div id="nasza-galeria" class="animate darker">
	<section id="galeria" class="sekcja ">
		<?php require(get_template_directory() . '/includes/layout/section_galeria.php'); ?>
	</section>
	<section id="galeria-mobile" class="sekcja">
		<?php require(get_template_directory() . '/includes/layout/section_galeria_mobilna.php'); ?>
	</section>
	</div>
	
	

	<section id="okolica" class="sekcja animate">
		<?php require(get_template_directory() . '/includes/layout/section_okolica.php'); ?>
	</section>


	<section id="dostepnosc" class="sekcja darker animate">
		<?php require(get_template_directory() . '/includes/layout/section_rezerwacje.php'); ?>
	</section>
	
	<?php require(get_template_directory() . '/includes/layout/section-obrazek02.php'); ?>

	<section id="cennik" class="sekcja animate">
		<?php require(get_template_directory() . '/includes/layout/section_cennik.php'); ?>
	</section>

	<section id="adres" class="sekcja darker animate">
		<?php require(get_template_directory() . '/includes/layout/section_footer.php'); ?>
	</section>

	<section id="mapa" class="sekcja animate">
		<?php require(get_template_directory() . '/includes/layout/section_google_map.php'); ?>
	</section>

	<section id="kontakt" class="sekcja darker animate">
		<?php require(get_template_directory() . '/includes/layout/section_form.php'); ?>
	</section>
	

<?php get_footer(); 
