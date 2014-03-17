$(document).ready(function() {
	


	$('#ART').click(function() {
		$('#department-category').empty();
		$('#department-category').append("ART");
	});

	$('#DSGN').click(function() {
		$('#department-category').empty();
		$('#department-category').append("DSGN");
	});

	$('#EECS').click(function() {
		$('#department-category').empty();
		$('#department-category').append("EECS");
	});

	$('#GEN_MUS').click(function() {
		$('#department-category').empty();
		$('#department-category').append("GEN_MUS");
	});

	$('#MUSICOL').click(function() {
		$('#department-category').empty();
		$('#department-category').append("MUSICOL");
	});

	$('#PHYS').click(function() {
		$('#department-category').empty();
		$('#department-category').append("PHYS");
	});

	$('#101').click(function() {
		$('#course-number').empty();
		$('#course-number').append("101");
		$('#title-field').attr("value","Intro to Computer Science");
		$('#author-field').attr("value","Haoqi Zhang");
		
	});

	$('#111').click(function() {
		$('#course-number').empty();
		$('#course-number').append("111");
		$('#title-field').attr("value","Programming in Meta");
		$('#author-field').attr("value","Ian Horswill");
	
	});

	$('#211').click(function() {
		$('#course-number').empty();
		$('#course-number').append("211");
		$('#title-field').attr("value","Introduction to C++");
		$('#author-field').attr("value","Paul Dietel");
		
	});

	$('#212').click(function() {
		$('#course-number').empty();
		$('#course-number').append("212");
		$('#title-field').attr("value","Discrete Mathematics");
		$('#author-field').attr("value","Morteza Rahimi");
		
	});

	$('#213').click(function() {
		$('#course-number').empty();
		$('#course-number').append("213");
		$('#title-field').attr("value","The C Programming Language");
		$('#author-field').attr("value","Brian W. Kernighan");
		
	});

	$('#214').click(function() {
		$('#course-number').empty();
		$('#course-number').append("214");
		$('#title-field').attr("value","Data Structures and Algorithm Analysis in C++");
		$('#author-field').attr("value","Mark Weiss");
		
	});

});
















