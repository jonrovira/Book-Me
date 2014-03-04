$(document).ready(function() {
	
	// Redirect to searchResults.php
	$('#submit-btn').click(function() {
		window.location.href = "searchResults.php";
	});
	$(document).keypress(function(e){
	    if (e.which == 13){
	        $("#submit-btn").click();
	    }
	});

});