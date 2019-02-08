<?php

function aqua_setup_theme() {
	register_nav_menu('primary', __('Primary Menu', 'aqua'));

	load_theme_textdomain( 'aqua', get_template_directory() . '/language' );
}

function aqua_widgets() {
	register_sidebar(array(
			'name'					=>	__('Sekcja APARTAMENT - opisy', 'aqua'),
			'id'						=>	'aqua_sekcja_apartament_opisy',
			'description'		=>	__('Opis apartamentu, główne zalety i udogodnienia. Kilka zdań tekstu i obrazek z boku', 'aqua'),
			'class'					=>	'',
			'before_widget'	=>	'',
			'after_widget'	=>	'',
			'before_title'	=>	'',
			'after_title'		=>	''
		)
	);

	register_sidebar(array(
			'name'					=>	__('Sekcja APARTAMENT - zalety', 'aqua'),
			'id'						=>	'aqua_sekcja_apartament_zalety',
			'description'		=>	__('Kluczowe zalety apartamentu. Zwięzły tutuł, obrazek i kilka słów rozwinięcia.', 'aqua'),
			'class'					=>	'',
			'before_widget'	=>	'',
			'after_widget'	=>	'',
			'before_title'	=>	'',
			'after_title'		=>	''
		)
	);

	register_sidebar(array(
			'name'					=>	__('Sekcja APARTAMENT - aktywny wypoczynek', 'aqua'),
			'id'						=>	'aqua_sekcja_apartament_sport',
			'description'		=>	__('Apartament jako baza dla aktywnego wypoczynku.', 'aqua'),
			'class'					=>	'',
			'before_widget'	=>	'',
			'after_widget'	=>	'',
			'before_title'	=>	'',
			'after_title'		=>	''
		)
	);

	register_sidebar(array(
			'name'					=>	__('Sekcja APARTAMENT - dla dzieci', 'aqua'),
			'id'						=>	'aqua_sekcja_apartament_dzieci',
			'description'		=>	__('Udogodnienia dla dzieci.', 'aqua'),
			'class'					=>	'',
			'before_widget'	=>	'',
			'after_widget'	=>	'',
			'before_title'	=>	'',
			'after_title'		=>	''
		)
	);

	register_sidebar(array(
			'name'					=>	__('Sekcja OKOLICA', 'aqua'),
			'id'						=>	'aqua_sekcja_okolica',
			'description'		=>	__('Opis okolicznej atrakcji. Wymagany tytuł, obrazek i treść.', 'aqua'),
			'class'					=>	'',
			'before_widget'	=>	'',
			'after_widget'	=>	'',
			'before_title'	=>	'',
			'after_title'		=>	''
		)
	);

	register_sidebar(array(
			'name'					=>	__('Sekcja GALERIA', 'aqua'),
			'id'						=>	'aqua_sekcja_galeria',
			'description'		=>	__('Galeria zdjęć.', 'aqua'),
			'class'					=>	'',
			'before_widget'	=>	'',
			'after_widget'	=>	'',
			'before_title'	=>	'',
			'after_title'		=>	''
		)
	);

}