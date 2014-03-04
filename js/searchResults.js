$(document).ready(function() {

	// Nav bar placeholder
	$('#srch-term').attr('placeholder','C++');

	// Redirect to book.php
	$('#click-this-one').click(function() {
		window.location.href = "book.php";
	})

});