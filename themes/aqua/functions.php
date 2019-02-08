<?php

// SETUP

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('wide', 600, 200, array( 'center', 'center'));
add_image_size('box', 300, 200, array( 'center', 'center'));
add_image_size('tall', 300, 406, array( 'center', 'center'));

// Includes
require(get_template_directory() . '/includes/front/enqueue.php');
require(get_template_directory() . '/includes/front/filters.php');

require(get_template_directory() . '/includes/admin/menu.php');
require(get_template_directory() . '/includes/admin/options-page.php');
require(get_template_directory() . '/includes/admin/save-data.php');
require(get_template_directory() . '/includes/admin/init.php');

require(get_template_directory() . '/includes/setup.php');
require(get_template_directory() . '/includes/activate.php');

// Action & Filter Hooks
add_action('wp_enqueue_scripts', 'aqua_enqueue');
add_action('after_setup_theme', 'aqua_setup_theme');
add_action('after_switch_theme', 'aqua_activate');
add_action('admin_menu', 'aqua_admin_menu');
add_action('admin_init', 'aqua_admin_init');

add_action('widgets_init', 'aqua_widgets');
// add_filter('wp_nav_menu_items', 'add_menu_lang_switcher', 10, 2);
add_filter('nav_menu_link_attributes', 'add_menu_atts', 10, 3 );

// Set polylang custom strings
require(get_template_directory() . '/includes/admin/polylang.php');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
