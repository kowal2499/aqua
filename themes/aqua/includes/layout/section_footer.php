<div class="container">
	<div class="row">

		<h2>
			<?= pll__($options["aqua_contact_h1"]); ?>
  		<div class="lead"><?= pll__($options["aqua_contact_lead"]); ?></div>
  	</h2>

			<div class="address">
				<img src="<?= get_template_directory_uri() . "/assets/img/logo.png"; ?>" alt="">
				<p>
					<?= htmlspecialchars_decode($options['aqua_contact_address']); ?>
				</p>

				<hr width="30%">

				<p>
					<i class="fa fa-phone" aria-hidden="true"></i> <?= htmlspecialchars_decode($options['aqua_contact_phone']); ?>&nbsp;&nbsp;
				</p>

				<p>
					<i class="fa fa-send" aria-hidden="true"></i> <a href="mailto:<?= htmlspecialchars_decode($options['aqua_contact_email']); ?>"><?= htmlspecialchars_decode($options['aqua_contact_email']); ?></a>
				</p>

				<p>
					<i class="fa fa-university" aria-hidden="true"></i> <?= htmlspecialchars_decode($options['aqua_contact_iban']); ?>
				</p>

				<hr width="30%">

			</div>
        
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.9";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			  <!-- Your like button code -->

			  <div class="fb-page"
			  data-href="https://www.facebook.com/ApartamentAqua/?ref=all_category_pyml_rhc"
			  data-width="380" 
			  data-hide-cover="false"
			  data-show-facepile="false" 
			  data-show-posts="false"></div>

	</div>
</div>