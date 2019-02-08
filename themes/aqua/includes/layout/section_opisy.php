<?php ?>

		<div class="container">
			<div class="row">
					<h2><?= pll__($options['aqua_opisy_h1']); ?>
        	<div class="lead"><?= pll__($options['aqua_opisy_lead']); ?></div></h2>
					<?php if (is_active_sidebar('aqua_sekcja_apartament_opisy')) {
						dynamic_sidebar('aqua_sekcja_apartament_opisy'); } ?>
			</div>
		</div>