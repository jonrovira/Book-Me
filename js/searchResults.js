$(document).ready(function() {

	// Nav bar placeholder
	$('#srch-term').attr('placeholder','C++');

	// Redirect to book.php
	$('#211-book').click(function() {
		window.location.href = "book.php?id=211";
	});

	$('#213-book').click(function() {
		window.location.href = "book.php?id=213";
	});

	$('#311-book').click(function() {
		window.location.href = "book.php?id=311";
	});

	$('#230-book-c-for-everyone').click(function() {
		window.location.href = "book.php?id=2301";
	});

	$('#230-book-big-c').click(function() {
		window.location.href = "book.php?id=2302";
	});

	$('#230-book-data-abstraction').click(function() {
		window.location.href = "book.php?id=2303";
	});

});