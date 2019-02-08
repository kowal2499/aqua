<?php

	$options = get_option('aqua_options');

	// SLIDER
	$widget_name = "slider";
	pll_register_string($widget_name, $options['slider_bigTxt01']);
	pll_register_string($widget_name, $options['slider_bigTxt02']);
	pll_register_string($widget_name, $options['slider_bigTxt03']);
	pll_register_string($widget_name, $options['slider_bigTxt04']);

	pll_register_string($widget_name, $options['slider_smallTxt01']);
	pll_register_string($widget_name, $options['slider_smallTxt02']);
	pll_register_string($widget_name, $options['slider_smallTxt03']);
	pll_register_string($widget_name, $options['slider_smallTxt04']);

	pll_register_string($widget_name, $options['slider_linkTxt01']);
	pll_register_string($widget_name, $options['slider_linkTxt02']);
	pll_register_string($widget_name, $options['slider_linkTxt03']);
	pll_register_string($widget_name, $options['slider_linkTxt04']);

	// OPIS
	$widget_name = "opisy";
	pll_register_string($widget_name, $options['aqua_opisy_h1']);
	pll_register_string($widget_name, $options['aqua_opisy_lead']);

	$res = get_option('widget_aqua_opis_widget');
	foreach ($res as $item) {
			pll_register_string($widget_name, $item['description'], true);
	}

	// ZALETY
	$widget_name = "zalety";
	pll_register_string($widget_name, $options['aqua_zalety_h1']);
	pll_register_string($widget_name, $options['aqua_zalety_lead']);
	pll_register_string($widget_name, $options['aqua_zalety_lead_sport']);
	
	$res = get_option('widget_aqua_zalety_widget');
	foreach ($res as $item) {
			pll_register_string($widget_name, $item['title']);
			pll_register_string($widget_name, $item['description']);
	}

	// ZALETY DLA DZIECI
	$widget_name = "zalety dla dzieci";
	pll_register_string($widget_name, $options['aqua_dla_dzieci_h1']);
	pll_register_string($widget_name, $options['aqua_dla_dzieci_lead']);
	$res = get_option('widget_aqua_dla_dzieci_widget');
	foreach ($res as $item) {
			pll_register_string($widget_name, $item['title']);
	}

	// GALERIA
	$widget_name = "galeria";
	pll_register_string($widget_name, $options['aqua_galeria_h1']);
	pll_register_string($widget_name, $options['aqua_galeria_lead']);
	$res = get_option('widget_aqua_galeria_widget');
	foreach ($res as $item) {
			pll_register_string($widget_name, $item['title']);
	}

	// REZERWACJE
	$widget_name = "rezerwacje";
	pll_register_string($widget_name, $options['aqua_calendar_h1']);
	pll_register_string($widget_name, $options['aqua_calendar_lead']);
	pll_register_string($widget_name, $options['aqua_calendar_desc1']);
	pll_register_string($widget_name, $options['aqua_calendar_desc2']);
	pll_register_string($widget_name, $options['aqua_calendar_desc3']);
	pll_register_string($widget_name, $options['aqua_calendar_days_names']);
	pll_register_string($widget_name, $options['aqua_calendar_months_names']);

	// OKOLICA / ATRAKCJE
	$widget_name = "okolica/atrakcje";
	pll_register_string($widget_name, $options['aqua_okolica_h1']);
	pll_register_string($widget_name, $options['aqua_okolica_lead']);

	$res = get_option('widget_aqua_atrakcje_widget');
	foreach ($res as $item) {
		if (!empty($item['title'])) {
			pll_register_string($widget_name, $item['title']);
			pll_register_string($widget_name, $item['description'], true);
		}
	}

	// FORMULARZ
	$widget_name = "formularz";
	pll_register_string($widget_name, 'Twoje imię');
	pll_register_string($widget_name, 'Email');
	pll_register_string($widget_name, 'Telefon');
	pll_register_string($widget_name, 'Treść wiadomości');
	pll_register_string($widget_name, 'Wyślij');
	pll_register_string($widget_name, 'Formularz szybkiego kontaktu');

	pll_register_string($widget_name, 'Podaj swój telefon lub poprawny adres email.');
	pll_register_string($widget_name, 'Wpisz treść wiadomości.');
	pll_register_string($widget_name, 'Wysłano wiadomość - dziękujemy.');
	pll_register_string($widget_name, 'Formularz wypełniony poprawnie, ale wystąpił wewnętrzny błąd podczas wysyłania wiadomości. Wiadomość nie została wysłana.');


	pll_register_string($widget_name, $options['aqua_contact_h1']);
	pll_register_string($widget_name, $options['aqua_contact_lead']);
	pll_register_string($widget_name, $options['aqua_contact_form']);

	// GOOGLE MAP
	pll_register_string($widget_name, $options["aqua_map_h1"]);
	pll_register_string($widget_name, $options["aqua_map_lead"]);
	$res = urldecode($options['aqua_map_pointers']);
	$decoded = json_decode($res, true);

	if (!empty($decoded)) {
		foreach ($decoded as $row) {
			pll_register_string($widget_name, $row["title"]);
		}
	}

	// RULES & PRICE LISTS

	pll_register_string($widget_name, $options["aqua_terms_h1"]);
	pll_register_string($widget_name, $options["aqua_terms_lead"]);
	$keyRules = urldecode($options["aqua_terms_key_rules"]);
  $decoded = json_decode($keyRules, true);

	if (!empty($decoded)) {
		foreach ($decoded as $row) {
			pll_register_string($widget_name, $row["body"]);
		}
	}

	$termsStay = urldecode($options["aqua_terms_of_stay"]);
  $decoded = json_decode($termsStay, true);

	if (!empty($decoded)) {
		foreach ($decoded as $row) {
			pll_register_string($widget_name, $row["body"]);
		}
	}

	$termsReservation = urldecode($options["aqua_terms_of_reservation"]);
  $decoded = json_decode($termsReservation, true);

	if (!empty($decoded)) {
		foreach ($decoded as $row) {
			pll_register_string($widget_name, $row["body"]);
		}
	}

	pll_register_string("rules", "Pobierz pdf");
	pll_register_string("rules", "Zamknij");
	pll_register_string("rules", "Regulamin pobytu");
	pll_register_string("rules", "Zasady rezerwacji");
	pll_register_string("rules", "SEZON NISKI");
	pll_register_string("rules", "SEZON WYSOKI");
	pll_register_string("rules", "od 01 października<br>do 30 kwietnia");
	pll_register_string("rules", "od 01 maja<br>do 30 września");
	pll_register_string("rules", "doba");

	


	
	// OTHER
	pll_register_string("other", "design &amp; wykonanie");
	pll_register_string("other", "Apartament Aqua Ustronie Morskie");

	// WEATHER WIDGET
	pll_register_string("pogoda", "POGODA TERAZ");
	pll_register_string("pogoda", "JUTRO");
	pll_register_string("pogoda", "POJUTRZE");

		
