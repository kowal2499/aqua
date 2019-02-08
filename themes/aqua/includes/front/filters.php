<?php

// add language switcher to the primary menu

function add_menu_lang_switcher($items, $args) {
	if ($args->theme_location == 'primary') {
		$pl = get_template_directory_uri() . "/assets/img/PL.png";
		$de = get_template_directory_uri() . "/assets/img/DE.png";
		$gb = get_template_directory_uri() . "/assets/img/GB.png";  
		return $items . '
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="flags"><img src="'.$pl.'" alt=""></span>&nbsp;<span class="caret"></span></a>
					<ul class="dropdown-menu">
            <li><a href="#"><span class="flags"><img src="'.$de.'" alt=""></span> DE</a></li>
            <li><a href="#"><span class="flags"><img src="'.$gb.'" alt=""></span> GB</a></li>
      		</ul>
		</li>';
	}

	return $items;
}




function add_menu_atts($atts, $item, $args) {
	$atts['data-scroll'] = 'true';
	// $atts['data-toggle'] = 'collapse';
  // $atts['data-target'] = '#navbar-primary.in';
	return $atts;
}



// add_filter( 'nav_menu_link_attributes', 'wpse121123_contact_menu_atts', 10, 3 );
// function wpse121123_contact_menu_atts( $atts, $item, $args )
// {
//   // The ID of the target menu item
//   $menu_target = 123;

//   // inspect $item
//   // if ($item->ID == $menu_target) {
    
//   // }
//   return $atts;
// }