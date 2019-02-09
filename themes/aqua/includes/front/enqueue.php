<?php

function aqua_enqueue() {

	// STYLES

	$options = get_option('aqua_options');

	wp_register_style('aqua_main', get_template_directory_uri() . '/assets/build/style.css', $ver='2.0');
	wp_register_style('aqua_fonts',
			'https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin-ext');

	wp_register_style('aqua_fonts-awesome', 
			get_template_directory_uri() . '/assets/vendor/fontawesome/css/font-awesome.min.css');

	wp_enqueue_style('aqua_fonts');
	wp_enqueue_style('aqua_main');
	wp_enqueue_style('aqua_fonts-awesome');

	// SCRIPTS

	wp_register_script('aqua_jquery', get_template_directory_uri() . '/assets/vendor/jquery-3.2.1.min.js', array(), false, true);
	wp_register_script('aqua_owl', get_template_directory_uri() . '/node_modules/owl.carousel/dist/owl.carousel.min.js', array(), false, true);
	wp_register_script('aqua_bootstrap', get_template_directory_uri() . '/node_modules/bootstrap3/dist/js/bootstrap.min.js', array(), false, true);
	wp_register_script('aqua_lightbox', get_template_directory_uri() . '/node_modules/simplelightbox/dist/simple-lightbox.min.js', array(), false, true);
	wp_register_script('aqua_scroll', get_template_directory_uri() . '/assets/vendor/smooth-scroll.min.js', array(), false, true);
	wp_register_script('aqua_imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded.pkgd.min.js', array(), false, true);
	wp_register_script('aqua_hero', get_template_directory_uri() . '/assets/scripts/hero-slider.js', array(), false, true);
	wp_register_script('aqua_calendar', get_template_directory_uri() . '/assets/scripts/calendar.js', array(), false, true);
	wp_register_script('aqua_main', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true);
	wp_register_script('aqua_mailer', get_template_directory_uri() . '/assets/scripts/mailer.js', array(), false, true);
	wp_register_script('aqua_google_map', "https://maps.googleapis.com/maps/api/js?callback=myMap&key=$options[aqua_map_apikey]", array(), false, true);
	wp_register_script('aqua_inview', get_template_directory_uri() . '/assets/scripts/jquery.inview.min.js', array(), false, true);

	



	wp_enqueue_script('aqua_jquery');
	wp_enqueue_script('aqua_bootstrap');
	wp_enqueue_script('aqua_owl');
	wp_enqueue_script('aqua_lightbox');
	wp_enqueue_script('aqua_scroll');
	wp_enqueue_script('aqua_imagesloaded');
	wp_enqueue_script('aqua_calendar');
	wp_enqueue_script('aqua_hero');
	wp_enqueue_script('aqua_mailer');
	wp_enqueue_script('aqua_inview');

	wp_enqueue_script('aqua_main');
	wp_enqueue_script('aqua_google_map');

}