<div class="container-fluid">
    <div class="row">
      <h2><?= pll__($options["aqua_map_h1"]); ?>
      	<div class="lead"><?= pll__($options["aqua_map_lead"]); ?></div>
      </h2>

      <div id="map" style="width:100%;height:400px;"></div>

      <input type="hidden" id="aqua_map_options" value="<?php
      	$map_options = array(
      		"longitude" => $options["aqua_map_longitude"],
      		"latitude" => $options["aqua_map_latitude"],
      		"zoom" => $options["aqua_map_zoom"],
      		"pointers" => $options["aqua_map_pointers"]
      	);
      	echo htmlspecialchars(json_encode($map_options));
      ?>">
      
    </div>
</div>

<div class="container">
	<div class="row text-center">

<?php 
		$pointersDb = urldecode($options["aqua_map_pointers"]);
    $decoded = json_decode($pointersDb, true);
    if (!empty($decoded)):
		  foreach ($decoded as $row) :
?>
			<div class="signpost">
				<i class="fa <?= $row["icon"]; ?> fa-1x" aria-hidden="true"></i>
				&nbsp;&nbsp;<?= pll__($row["title"]); ?> <div class="distance"><?= $row["dist"]; ?></div>
			</div>
<?php
		  endforeach;
    endif;
?>
	
	</div><!-- row -->
</div>