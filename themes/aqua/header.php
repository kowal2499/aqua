<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"           content="http://aqua-wordpress.hekko24.pl/" />
	  <meta property="og:type"          content="website" />
	  <meta property="og:title"         content="Apartament AQUA Ustronie Morskie" />
	  <meta property="og:description"   content="Komfortowy wypoczynek nad Bałtykiem" />
	  <meta property="og:image"         content="<?= get_template_directory_uri() . '/assets/img/logo.png'; ?>" />

		<?php wp_head(); ?>
	</head>
	<body data-spy="scroll" data-target="#navbar-primary" data-offset="250" id="home" class="preload-active">
		<?php include_once("analyticstracking.php") ?>

		<div id="preloader">
	    <div class="static-logo">
	      <img src="<?= get_template_directory_uri() . '/assets/img/logo_aqua.png'; ?>" alt="">
	      
	    </div>
	    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </div>

		<div class="navigation">
			<div class="container">
				<nav class="navbar navbar-default">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-primary" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php
							$logo_light = get_template_directory_uri() . "/assets/img/logo-light.png";
							$logo_dark = get_template_directory_uri() . "/assets/img/logo-dark.png";
						?>
						<a data-scroll class="navbar-brand" href="<?= get_home_url(); ?>"><img src="<?php echo $logo_light; ?>" alt="" id="upper-logo" data-light="<?php echo $logo_light; ?>" data-dark="<?php echo $logo_dark; ?>"></a>
					</div>

					<div class="collapse navbar-collapse" id="navbar-primary">
						<?php wp_nav_menu(array(
							'theme_location'			=> 'primary',
							'container'						=> false,
							'menu_class'					=> 'nav navbar-nav navbar-right'
							)
						); ?>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div><!-- /.container -->        
		</div><!-- ./navigation -->