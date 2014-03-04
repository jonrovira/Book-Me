$(document).ready(function() {

	// Sliders
	$('#price-slider').slider().on('slide', function(ev){
		$('#price-bar').val(function(index, value) {
			return '$' + String(ev.value);
		});
	});
	$('#price-bar:text').val(function(index, value) {
		return ('$300');
	});

	// Visit user profile
	$('tr:nth-child(1) td:nth-child(3)').click(function() {
		window.location.href = "userProfile.php";
	})


});