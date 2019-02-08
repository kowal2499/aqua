<?php

function aqua_save_options() {
	if (!current_user_can('edit_theme_options')) {
		wp_die(__('Nie masz uprawnień by przebywać na tej stronie.'));
	}

	check_admin_referer('aqua_options_verify');

	$options = get_option('aqua_options');

	$options['slider_image01']			  =	esc_url_raw($_POST['aqua_input_image01']);
	$options['slider_bigTxt01']				=	sanitize_text_field($_POST['aqua_input_bigTxt01']);
	$options['slider_smallTxt01']			=	sanitize_text_field($_POST['aqua_input_smallTxt01']);
	$options['slider_linkTxt01']			=	sanitize_text_field($_POST['aqua_input_linkTxt01']);
	$options['slider_linkDest01']			=	sanitize_text_field($_POST['aqua_input_linkDest01']);

	$options['slider_image02']			  =	esc_url_raw($_POST['aqua_input_image02']);
	$options['slider_bigTxt02']				=	sanitize_text_field($_POST['aqua_input_bigTxt02']);
	$options['slider_smallTxt02']			=	sanitize_text_field($_POST['aqua_input_smallTxt02']);
	$options['slider_linkTxt02']			=	sanitize_text_field($_POST['aqua_input_linkTxt02']);
	$options['slider_linkDest02']			=	sanitize_text_field($_POST['aqua_input_linkDest02']);

	$options['slider_image03']			  =	esc_url_raw($_POST['aqua_input_image03']);
	$options['slider_bigTxt03']				=	sanitize_text_field($_POST['aqua_input_bigTxt03']);
	$options['slider_smallTxt03']			=	sanitize_text_field($_POST['aqua_input_smallTxt03']);
	$options['slider_linkTxt03']			=	sanitize_text_field($_POST['aqua_input_linkTxt03']);
	$options['slider_linkDest03']			=	sanitize_text_field($_POST['aqua_input_linkDest03']);

	$options['slider_image04']			  =	esc_url_raw($_POST['aqua_input_image04']);
	$options['slider_bigTxt04']				=	sanitize_text_field($_POST['aqua_input_bigTxt04']);
	$options['slider_smallTxt04']			=	sanitize_text_field($_POST['aqua_input_smallTxt04']);
	$options['slider_linkTxt04']			=	sanitize_text_field($_POST['aqua_input_linkTxt04']);
	$options['slider_linkDest04']			=	sanitize_text_field($_POST['aqua_input_linkDest04']);

	$options['aqua_zalety_h1']				= sanitize_text_field($_POST['aqua_zalety_h1']);
	$options['aqua_zalety_lead']			=	sanitize_text_field($_POST['aqua_zalety_lead']);
	$options['aqua_zalety_lead_sport'] =	sanitize_text_field($_POST['aqua_zalety_lead_sport']);

	$options['aqua_dla_dzieci_h1']				= sanitize_text_field($_POST['aqua_dla_dzieci_h1']);
	$options['aqua_dla_dzieci_lead']				= sanitize_text_field($_POST['aqua_dla_dzieci_lead']);

	$options['assets_row']				=	$_POST['aqua_input_assets_row'];
	$options['assets_class']			=	sanitize_text_field($_POST['aqua_input_assets_class']);
	$options['assets_offset']			=	sanitize_text_field($_POST['aqua_input_assets_offset']);
	$options['assets_last']				=	sanitize_text_field($_POST['aqua_input_assets_last_offset']);

	$options['sport_row']				=	$_POST['aqua_input_sport_row'];
	$options['sport_class']				=	sanitize_text_field($_POST['aqua_input_sport_class']);
	$options['sport_offset']			=	sanitize_text_field($_POST['aqua_input_sport_offset']);
	$options['sport_last']				=	sanitize_text_field($_POST['aqua_input_sport_last_offset']);

	$options['section_image01']			  =	esc_url_raw($_POST['aqua_input_section_image01']);
	$options['section_image02']			  =	esc_url_raw($_POST['aqua_input_section_image02']);

	// gallery

	$options['aqua_galeria_h1']			=	sanitize_text_field($_POST['aqua_galeria_h1']);
	$options['aqua_galeria_lead']			=	sanitize_text_field($_POST['aqua_galeria_lead']);

	// calendar

	$options['aqua_txt_calendar']			= $_POST['aqua_txt_calendar'];
	$options['aqua_calendar_h1']			=	sanitize_text_field($_POST['aqua_calendar_h1']);
	$options['aqua_calendar_lead']			=	sanitize_text_field($_POST['aqua_calendar_lead']);
	$options['aqua_calendar_desc1']			=	esc_html($_POST['aqua_calendar_desc1']);
	$options['aqua_calendar_desc2']			=	esc_html($_POST['aqua_calendar_desc2']);
	$options['aqua_calendar_desc3']			=	esc_html($_POST['aqua_calendar_desc3']);
	$options['aqua_calendar_days_names']			=	sanitize_text_field($_POST['aqua_calendar_days_names']);
	$options['aqua_calendar_months_names']			=	sanitize_text_field($_POST['aqua_calendar_months_names']);


	// contact form

	$options['aqua_contact_h1']			= sanitize_text_field($_POST['aqua_contact_h1']);
	$options['aqua_contact_lead']			=	sanitize_text_field($_POST['aqua_contact_lead']);
	$options['aqua_contact_email']			=	sanitize_text_field($_POST['aqua_contact_email']);
	$options['aqua_contact_phone']			=	sanitize_text_field($_POST['aqua_contact_phone']);
	$options['aqua_contact_facebook']			=	sanitize_text_field($_POST['aqua_contact_facebook']);
	$options['aqua_contact_iban']			=	sanitize_text_field($_POST['aqua_contact_iban']);
	$options['aqua_contact_address']			=	esc_html($_POST['aqua_contact_address']);
	$options['aqua_contact_form']			=	sanitize_text_field($_POST['aqua_contact_form']);

	// google map

	$options['aqua_map_h1']			= sanitize_text_field($_POST['aqua_map_h1']);
	$options['aqua_map_lead']			=	sanitize_text_field($_POST['aqua_map_lead']);
	$options['aqua_map_longitude']			=	sanitize_text_field($_POST['aqua_map_longitude']);
	$options['aqua_map_latitude']			=	sanitize_text_field($_POST['aqua_map_latitude']);
	$options['aqua_map_zoom']			=	sanitize_text_field($_POST['aqua_map_zoom']);
	$options['aqua_map_pointers']			=	($_POST['aqua_map_pointers']);
	$options['aqua_map_apikey']			=	sanitize_text_field($_POST['aqua_map_apikey']);

	// okolica

	$options['aqua_okolica_h1']			= sanitize_text_field($_POST['aqua_okolica_h1']);
	$options['aqua_okolica_lead']			=	sanitize_text_field($_POST['aqua_okolica_lead']);
	
	// opisy

	$options['aqua_opisy_h1']			= sanitize_text_field($_POST['aqua_opisy_h1']);
	$options['aqua_opisy_lead']			=	sanitize_text_field($_POST['aqua_opisy_lead']);

	// cenniki

	$options['aqua_terms_h1']		=	sanitize_text_field($_POST['aqua_terms_h1']);
	$options['aqua_terms_lead']		=	sanitize_text_field($_POST['aqua_terms_lead']);
	$options['aqua_terms_key_rules']		=	$_POST['aqua_terms_key_rules'];

	$options['aqua_terms_of_stay'] = $_POST['aqua_terms_of_stay'];
	$options['aqua_terms_of_reservation'] = $_POST['aqua_terms_of_reservation'];

	$options['aqua_terms_of_stay_title'] = sanitize_text_field($_POST['aqua_terms_of_stay_title']);
	$options['aqua_terms_of_reservation_title'] = sanitize_text_field($_POST['aqua_terms_of_reservation_title']);

	




	update_option('aqua_options', $options);
	wp_redirect(admin_url('admin.php?page=aqua_theme_options&status=1'));
}


