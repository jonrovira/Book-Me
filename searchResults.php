<!DOCTYPE html>
<html lang="en">
	<head>
  		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Textbook Exchange provides Northwestern students with a quick and easy way to buy and sell textbooks from fellow students and compare prices with online vendors">
		<meta name="author" content="Jon Rovira, William Chou, Christina Kim, Divir Gupta">
		<link rel="shortcut icon" href="images/Textbook-Xchange-Favicon.png">

		<title>Textbook Exchange</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="css/global.css" rel="stylesheet">
		<link href="css/searchResults.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>

		<div class="my-container">
			<?php include 'header.html'; ?>

			<nav class="navbar navbar-default" role="navigation">
			  	<div class="container-fluid">
			    	<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
				      	<a class="navbar-brand" href="#">Filters</a>
				    </div>

			    	<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav">
				        	<li><a>Sort By:</a></li>
				        	<li class="dropdown active">
				          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Class <b class="caret"></b></a>
				          		<ul class="dropdown-menu">
				          			<li class="active"><a href="#">Class</a></li>
				            		<li><a href="#">Title</a></li>
				            		<li><a href="#">Author</a></li>
				            		<li><a href="#">Edition</a></li>
				         		</ul>
				        	</li>
				        	<li><a>View:</a></li>
				        	<li class="dropdown active">
				          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">8 <b class="caret"></b></a>
				          		<ul class="dropdown-menu">
				            		<li><a href="#">4</a></li>
				            		<li class="active"><a href="#">8</a></li>
				            		<li><a href="#">12</a></li>
				         		</ul>
				        	</li>
				      	</ul>
				      <ul class="nav navbar-nav navbar-right">
				        	<li><a>Showing <b>1 – 6</b> of <b>6</b> results for <b>C++</b></a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>

			<div id="box-wrapper">
			<ul class="box">
				<li id="211-book">
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
				<li id="213-book">
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
				<li id="311-book">
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
				<li id="230-book-c-for-everyone">
					<div class="image">
					<a href="#"><img src="images/Book 4.jpg"></a>
					</div>
					<div class= "details">
						<h4><a href="#">C++ For Everyone</a></h4>
						Cay Horstmann
						<br>Edition: 2
						<br><div class="purple"><a href="#">EECS:230</a></div>

					</div>
				</li>
				<li id="230-book-big-c">
					<div class="image">
					<a href="#"><img src="images/Book 6.jpg"></a>
					</div>
					<div class= "details">
						<h4><a href="#">Big C++</a></h4>
						Cay Horstmann
						<br>Edition: 2
						<br><div class="purple"><a href="#">EECS:230</a></div>

					</div>
				</li>
				<li id="230-book-data-abstraction">
					<div class="image">
					<a href="#"><img src="images/Book 5.jpg"></a>
					</div>
					<div class= "details">
						<h4><a href="#">Data Abstraction & Problem Solving with C++</a></h4>
						Frank Carrano
						<br>Edition: 6
						<br><div class="purple"><a href="#">EECS:230</a></div>

					</div>
				</li>
			</ul>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/searchResults.js"></script>
	</body>
</html>