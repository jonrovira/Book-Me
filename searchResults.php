<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Textbook Exchange</title>
  <link rel="shortcut icon" href="images/Textbook-Xchange-Favicon.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/global.css" rel="stylesheet">
  <link rel="stylesheet" href="css/searchResults.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="searchResults.js"></script>
</head>


<body>
<div class="container">

	<?php include 'header.html'; ?>

	<div class="input-group">
		<input type="text" class="form-control" placeholder="C++">
		<div class="input-group-btn">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		</div>
	</div>

	<div class="lead"> Showing <b>1 – 3</b> of <b>10</b> results for <b>C++<b> </div>
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

	<ul class="box">
		<li>
			<div class="image">
			<a href="#"><img src="images/Book 1.jpg"></a>
			</div>
			<div class= "details">
				<h4><a href="#">C++: How To Program</a></h4>
				Paul Deitel
				<br>Edition: 8
				<br><div class="purple"><a href="#">EECS:211</a></div>
			</div>
		</li>
		<li>
			<div class="image">
			<a href="#"><img src="images/Book 2.jpg"></a>
			</div>
			<div class="details">
				<h4><a href="#">The C Programming Language</a></h4>
				Brian W. Kernighan
				<br>Edition: 2
				<br><div class="purple"><a href="#">EECS:213</a></div>

			</div>
		</li>
		<li>
			<div class="image">
			<a href="#"><img src="images/Book 3.jpg"></a>
			</div>
			<div class= "details">
				<h4><a href="#">Data Structures and Algorithm Analysis in C++</a></h4>
				Mark Weiss
				<br>Edition: 3
				<br><div class="purple"><a href="#">EECS:311</a></div>

			</div>
		</li>
	</ul>
</div>	
</body>
</html>