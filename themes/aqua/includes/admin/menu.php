<?php

function aqua_admin_menu() {
	add_menu_page(
		'AQUA Ustawienia Szablonu',
		'Ustawienia Szablonu',
		'edit_theme_options',
		'aqua_theme_options',
		'aqua_theme_options_page'
	); 
}