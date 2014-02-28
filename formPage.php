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
		<link href="css/global.css" rel="stylesheet">
		<link href="css/formPage.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<div id="wrapper">
			<div id="container">
				<?php include 'header.html'; ?>
				<div>
					<form class = "form-horizontal" role = "form">
				      <div id="form-top-message">
				        Complete all fields to post a textbook sale. 
				      </div>

				      <!--form for inputting the name -->
				      <div class ="form-group" id="name-form">
				        <label for ="inputName" class = "col-sm-1 control-label"><font color ="#694489">Name</font></label>
				        <div class ="col-sm-4">
				          <input type ="email" class = "form-control" id="inputName" placeholder="Name">
				        </div>
				      </div>
				      <!-- dropdown button for selecting department-->
				      <div class = "btn-group" id="department-dropdown">
				        <button type = "button" class = "btn btn-default dropdown-toggle" data-toggle="dropdown"><font color ="#694489">
				          Department </font><span class = "caret"> </span>
				        </button>
				        <ul class = "dropdown-menu" role ="menu">
				          <li><a href = "#"><font color ="#694489">ANTHRO</font></a></li>
				          <li><a href = "#"><font color ="#694489">BIO </font></a></li>
				          <li><a href = "#"><font color ="#694489">BME </font></a></li>
				          <li><a href = "#"><font color ="#694489">CHEM </font></a></li>
				          <li><a href = "#"><font color ="#694489">EECS </font></a></li>
				        </ul>
				      </div>
				      <!-- dropdown button for selecting class number --> 
				      <div class = "btn-group" id="class-number-dropdown">
				        <button type = "button" class = "btn btn-default dropdown-toggle" data-toggle="dropdown"><font color ="#694489">
				          Class Number </font><span class = "caret"> </span>
				        </button>
				        <ul class = "dropdown-menu" role ="menu">
				          <li><a href = "#"><font color ="#694489">101</font></a></li>
				          <li><a href = "#"><font color ="#694489">110 </font></a></li>
				          <li><a href = "#"><font color ="#694489">202 </font></a></li>
				          <li><a href = "#"><font color ="#694489">211 </font></a></li>
				          <li><a href = "#"><font color ="#694489">213 </font></a></li>
				        </ul>
				      </div>

				      <!-- form for inputting the book title--> 
				      <div class ="form-group" id="book-title-form">
				        <label for ="inputTitle" class = "col-sm-1 control-label"><font color ="#694489">Title</font></label>
				        <div class ="col-sm-4">
				          <input type ="email" class = "form-control" id="inputTitle" placeholder="Title">
				        </div>
				      </div>

				      <!-- form for inputting the author--> 
				      <div class ="form-group" id="author-form">
				        <label for ="inputAuthor" class = "col-sm-1 control-label"><font color ="#694489">Author</font></label>
				        <div class ="col-sm-4">
				          <input type ="email" class = "form-control" id="inputAuthor" placeholder="Author">
				        </div>
				      </div>

				      <!-- form for inputting the price--> 
				      <div class ="form-group" id="price-form">
				        <label for ="inputPrice" class = "col-sm-1 control-label"><font color ="#694489">Price</font></label>
				        <div class ="col-sm-4">
				          <input type ="email" class = "form-control" id="inputPrice" placeholder="Price">
				        </div>
				      </div>

				      <!-- condition of book dropdown button-->
				      <div class = "btn-group" id="condition-dropdown">
				        <button type = "button" class = "btn btn-default dropdown-toggle" data-toggle="dropdown"><font color ="#694489">
				          Condition </font><span class = "caret"> </span>
				        </button>
				        <ul class = "dropdown-menu" role ="menu">
				          <li><a href = "#"><font color ="#694489">New</font></a></li>
				          <li><a href = "#"><font color ="#694489">Used - Like New </font></a></li>
				          <li><a href = "#"><font color ="#694489">Used - Good Condition  </font></a></li>
				          <li><a href = "#"><font color ="#694489">Used - Poor Condition</font></a></li>
				        </ul>
				      </div>

				      <div class ="form-group" id="edition-form">
				        <label for ="inputEdition" class = "col-sm-1 control-label"><font color ="#694489">Edition</font></label>
				        <div class ="col-sm-4">
				          <input type ="email" class = "form-control" id="inputEdition" placeholder="Edition">
				        </div>
				      </div>

				      <button type="button" id="submit-button" class="btn btn-default btn-sm">Submit</button>

				</div>

			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>

</html>