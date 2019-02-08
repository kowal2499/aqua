<?php

function aqua_activate() {
	$theme_options		= get_option('aqua_options');
	if (!$theme_options) {
		$options  = array(
			'slider_image01'		=> '',
			'slider_bigTxt01'		=> '',
			'slider_smallTxt01'	=> '',
			'slider_linkTxt01'  => '',
			'slider_linkDest01' => '',

			'slider_image02'		=> '',
			'slider_bigTxt02'		=> '',
			'slider_smallTxt02'	=> '',
			'slider_linkTxt02'  => '',
			'slider_linkDest02' => '',

			'slider_image03'		=> '',
			'slider_bigTxt03'		=> '',
			'slider_smallTxt03'	=> '',
			'slider_linkTxt03'  => '',
			'slider_linkDest03' => '',

			'slider_image04'		=> '',
			'slider_bigTxt04'		=> '',
			'slider_smallTxt04'	=> '',
			'slider_linkTxt04'  => '',
			'slider_linkDest04' => '',

			'assets_row' => 1,
			'assets_class' => '',
			'assets_offset' => '',
			'assets_last' => '',

			'sport_row' => 1,
			'sport_class' => '',
			'sport_offset' => '',
			'sport_last' => '',

			'section_image01' => '',
			'section_image02' => ''

			);
		add_option('aqua_options', $options);
	}

}
