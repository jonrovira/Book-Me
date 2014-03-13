$(document).ready(function() {
	
	// Redirect to searchResults.php
	$('#srch-term').keypress(function(e){
	    if (e.which == 13){
	        window.location.href = "searchResults.php";
	    }
	});

});