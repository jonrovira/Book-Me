<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Book Me provides Northwestern students with a quick and easy way to buy and sell textbooks from fellow students and compare prices with online vendors">
		<meta name="autor" content="Jon Rovira, William Chou, Christina Kim, Divir Gupta">
		<link rel="shortcut icon" href="images/favicon.ico"> <!--MAKE THIS-->

		<title>Book Me</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/global.css" rel="stylesheet">
		<link href="css/itemPage.css" rel="stylesheet">
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

				<div id="content">
					<div id="book-image">
						<img src="images/How-To-Program.jpg" />
					</div>
					<div id="book-title-info">
						<h2>C++ How to Program</h2>
						<h4>Paul Dietel</h4>
					</div>
					<div id="seller-list" class="panel panel-default">
						<table class="table">
							<tr id="categories">
								<td>Price <span class="caret"></span></td>
								<td>Condition <span class="caret"></span></td>
								<td>Seller <span class="caret"></span></td>
							</tr>
							<tr>
								<td>$80</td>
								<td>Used - Good</td>
								<td>W. Wildcat</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$100</td>
								<td>New</td>
								<td>Amazon</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$105</td>
								<td>Used</td>
								<td>Sally S.</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>

</html>