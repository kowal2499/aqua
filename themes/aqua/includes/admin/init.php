<?php

function aqua_admin_enqueue() {

	if (!isset($_GET['page']) || $_GET['page'] != 'aqua_theme_options') {
		return;
	}
	wp_register_style('aqua_bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.min.css');
	wp_register_style('aqua_admin-style', get_template_directory_uri() . '/assets/styles/admin.css');
	wp_register_style('aqua_fonts-awesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/font-awesome.min.css');

	wp_enqueue_style('aqua_fonts-awesome');
	wp_enqueue_style('aqua_bootstrap');
	wp_enqueue_style('aqua_admin-style');

	wp_register_script('aqua_options', get_template_directory_uri() . '/assets/scripts/admin-options.js', array(), false, true);
	wp_register_script('aqua_mappointers', get_template_directory_uri() . '/assets/scripts/admin-mappointers.js', array(), false, true);
	wp_register_script('aqua_bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array(), false, true);
	
	wp_enqueue_media();
	wp_enqueue_script('aqua_options');
	wp_enqueue_script('aqua_mappointers');
	wp_enqueue_script('aqua_bootstrap');

}

function aqua_admin_init() {
	add_action('admin_enqueue_scripts', 'aqua_admin_enqueue');
	add_action('admin_post_aqua_save_options', 'aqua_save_options');
}



