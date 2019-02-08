jQuery(function($) {
	
	var frame = wp.media({
		title: 'Wybierz lub prześlij obrazek',
		button: { text: 'Wybierz' },
		multiple: false
	});

	var destination;

	$(".upload-image").click(function(e) {
		e.preventDefault();
		destination = $(e.srcElement).data('related');
		frame.open();
	});

	$(".remove-image").click(function(e) {
		e.preventDefault();
		destination = $(e.srcElement).data('related');
		noImage = $(e.srcElement).data('noimage');
		$("#"+destination+"img").attr("src", noImage);
		$("input#"+destination+"input").val("");
		
	});

	frame.on('select', function() {
		var attachment = frame.state().get('selection').first().toJSON();
		
		// update admin fields
		$("#"+destination+"img").attr("src", attachment.url);
		$("input#"+destination+"input").val(attachment.url);
	});

});