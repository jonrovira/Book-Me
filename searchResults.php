
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/searchResults.js"></script>
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
		<li>
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
		<li>
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
		<li>
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
</body>
</html>