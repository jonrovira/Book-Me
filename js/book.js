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
	});


	function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
	}

	var checkID = getURLParameter("id");

	if (checkID==211) {
		$('#book-pic').attr("src", "images/Book 1.jpg");
		$('#title').append("C++ How to Program");
		$('#edition').append("5th edition");
		$('#author').append("Paul Dietel"); 
		$('#classes').append("EECS-211");
	}

	if (checkID==213) {
		$('#book-pic').attr("src", "images/Book 2.jpg");
		$('#title').append("The C Programming Language");
		$('#edition').append("2nd edition");
		$('#author').append("Brian W. Kernighan"); 
		$('#classes').append("EECS-213");
	}

	if (checkID==311) {
		$('#book-pic').attr("src", "images/Book 3.jpg");
		$('#title').append("Data Structures and Algorithm Analysis in C++");
		$('#edition').append("3rd edition");
		$('#author').append("Mark Weiss"); 
		$('#classes').append("EECS-311");
	}
	if (checkID==2301) {
		$('#book-pic').attr("src", "images/Book 4.jpg");
		$('#title').append("C++ For Everyone");
		$('#edition').append("2nd edition");
		$('#author').append("Cay Horstmann"); 
		$('#classes').append("EECS-230");
	}

	if (checkID==2302) {
		$('#book-pic').attr("src", "images/Book 6.jpg");
		$('#title').append("Big C++");
		$('#edition').append("2nd edition");
		$('#author').append("Cay Horstmann"); 
		$('#classes').append("EECS-230");
	}

	if (checkID==2303) {
		$('#book-pic').attr("src", "images/Book 5.jpg");
		$('#title').append("Data Abstraction & Problem Solving with C++");
		$('#edition').append("6th edition");
		$('#author').append("Frank Carrano"); 
		$('#classes').append("EECS-230");
	}
});
























