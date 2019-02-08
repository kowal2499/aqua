jQuery(document).ready(function($){
	$('#aqua-form').submit(function(e){
		e.preventDefault();

		// Serialize Form
		var userData = $('#aqua-form').serialize();

		// Submit Form
		$.ajax({
		 	type: 'post',
		 	dataType: "json",
		 	url: $('#aqua-form').attr('action'),
		 	data: userData,
		 	success: function(response) {

		 		// If Success
		 		if (response['success']) {
		 			$('#messanger').removeClass('alert alert-danger');
					$('#messanger').addClass('alert alert-success');
					// Clear Fields
				 	$('#exampleInputName').val('');
					$('#exampleInputEmail').val('');
					$('#exampleInputPhone').val('');
					$('#exampleTextarea').val('');
		 		} else {
		 		// Failure
		 			$('#messanger').removeClass('alert alert-success');
					$('#messanger').addClass('alert alert-danger');
		 		}
				
				// Set Message Text
				$('#messanger').text(response.msg);

				
		 	}
		});
	});
});