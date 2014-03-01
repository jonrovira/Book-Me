$(document).ready(function() {

	$('#price-bar:text').val(function(index, value) {
		return ('$300');
	});

	// Sliders
	$('#price-slider').slider().on('slide', function(ev){
		$('#price-bar').val(function(index, value) {
			return '$' + String(ev.value);
		});
	});
});