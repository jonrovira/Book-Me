$(document).ready(function() {
	
	// Sliders
	$('#price-slider').slider().on('slide', function(ev){
		$('#bar').val(ev.value);
	});
	$('#condition-slider').slider().on('slide', function(ev){
		$('#bar').val(ev.value);
	});
});