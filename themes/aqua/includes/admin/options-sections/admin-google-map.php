<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#collapse-google-map" href="#collapse-google-map" aria-expanded="true" aria-controls="collapse-google-map">Mapka google</a></h4>
	</div>
	<div class="panel-body panel-collapse collapse" id="collapse-google-map">
		<div class="row">

			<div class="col-md-12">
	      <div class="form-group">
	          <label for="aqua_map_h1"><?= __('Tytuł sekcji', 'aqua'); ?></label>
	          <input type="text" class="form-control" name="aqua_map_h1" value="<?= $options['aqua_map_h1']; ?>">
	      </div>

	      <div class="form-group">
	          <label for="aqua_map_lead"><?= __('Rozwinięcie pod tytułem', 'aqua'); ?></label>
	          <input type="text" class="form-control" name="aqua_map_lead" value="<?= $options['aqua_map_lead']; ?>">
	      </div>

	      <hr>
	    </div>
	  </div>

	  <div class="row">
			<div class="col-md-3">
			    <div class="form-group">
			        <label for="aqua_map_longitude"><?= __('Długość geograficzna', 'aqua'); ?></label>
			        <input type="text" class="form-control" name="aqua_map_longitude" value="<?php echo stripslashes($options['aqua_map_longitude']); ?>">
			    </div>
			</div>

			<div class="col-md-3">
			    <div class="form-group">
			        <label for="aqua_map_latitude"><?= __('Szerokość geograficzna', 'aqua'); ?></label>
			        <input type="text" class="form-control" name="aqua_map_latitude" value="<?php echo stripslashes($options['aqua_map_latitude']); ?>">
			    </div>                        
			</div>

			<div class="col-md-3">
			    <div class="form-group">
			        <label for="aqua_map_zoom"><?= __('Zoom', 'aqua'); ?></label>
			        <input type="text" class="form-control" name="aqua_map_zoom" value="<?php echo stripslashes($options['aqua_map_zoom']); ?>">
			    </div>
			</div>

			<div class="col-md-3">
			    <div class="form-group">
			        <label for="aqua_map_apikey"><?= __('API key', 'aqua'); ?></label>
			        <input type="text" class="form-control" name="aqua_map_apikey" value="<?php echo stripslashes($options['aqua_map_apikey']); ?>">
			    </div>
			</div>


		</div>

		<div class="row">

			<div class="col-md-12">

			<input type="hidden" class="form-control" id="backend-map-pointers" name="aqua_map_pointers" value="<?php echo $options['aqua_map_pointers']; ?>">

				<div class="admin-list">
					
					<div id="existing-pointers"></div>

					<p>Nowy element:</p>

					<div class="addNew">
						<label for="pointer-title-new">Tytuł: </label>
						<input type="text" name="pointer-title-new" id="pointer-title-new" class="form-control">

						<label for="pointer-dist-new">Odległość: </label>
						<input type="text" name="pointer-dist-new" id="pointer-dist-new" class="form-control">

						<label for="pointer-icon-new">Ikona: </label>
						<select name="pointer-icon-new" id="pointer-icon-new" class="form-control">
							<option value="fa-street-view">fa-street-view</option>
							<option value="fa-plane">fa-plane</option>
							<option value="fa-car">fa-car</option>
						</select>

						<button class="btn btn-success" id="add-new-record" type="button">Dodaj</button>
					</div>

				</div>	

				
			</div>
		</div>

	</div>
</div>