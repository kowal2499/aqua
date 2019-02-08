<?php

function aqua_theme_options_page() {
	$options = get_option('aqua_options');

?>
<div class="wrap">
	<div class="panel panel-primary" id="panel-options">
		<div class="panel-heading">
			<h2 class="panel-title"><?= _e('Ustawienia Szablonu AQUA', 'aqua'); ?></h2>
		</div>
		<div class="panel-body">
			<?php
				if(isset($_GET['status']) && $_GET['status'] == 1) {
			?>
					<div class="alert alert-success">Zmiany zachowane!</div>
			<?php	
				}
			?>
			
			<form method="post" action="admin-post.php">
				<input type="hidden" name="action" value="aqua_save_options">
				<?php wp_nonce_field('aqua_options_verify'); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/slider.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/admin-opisy.php"); ?>
				
				<?php require (get_template_directory() . "/includes/admin/options-sections/key-assets.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/imgs-div.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/admin-galeria.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/admin-okolica.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/admin-reservations.php"); ?>

				<?php require (get_template_directory(). "/includes/admin/options-sections/admin-price-terms.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/admin-contact-form.php"); ?>

				<?php require (get_template_directory() . "/includes/admin/options-sections/admin-google-map.php"); ?>

				<div class="form-group">
        	<button type="submit" class="btn btn-primary"><?php _e('Zapisz zmiany', 'aqua'); ?></button>
        </div>

			</form>

		</div>
		
	</div>


</div>
<?php
}