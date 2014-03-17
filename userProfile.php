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
		<link href="css/userProfile.css" rel="stylesheet">
		<style> li{display:inline;}</style>

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
					<div class="profile-head">
						<div id="user-image">
							<img src="images/Willie.jpg" />
						</div>
						<div class="user-info">
							<h1 id="user-id"> Willie Wildcat</h1>
							<h2 id="loc">Evanston, IL <h2>
						</div>
					</div>

					<div><br>

					</div>
					<div id="book-list" >
						<table id="sellers" class="table">
							<tr>
								<h2 id="table-title">Book(s) Willie's Selling:</h2>
							</tr>
							<tr>
								<th>
									<div id="book-image">
										<img src="images/How-To-Program.jpg">
									</div>
								</th>
								<th>
									<div id="book-title-info">
										<h2 id="title"><a href="/book.php" style="color:#444444">C++ How to Program</a></h2>
										<h5 id="edition">8th edition</h5>
										<h4 id="author">Paul Dietel</h4>
										<h5 id="classes">EECS-211</h5>
										<h4 id="price">Price: $80</h4>
									</div>		
								</th>			
							</tr>
							<tr>
								<th>
									<div id="book-image">
										<img src="images/AI-Book.jpg">
									</div>
								</th>
								<th>
									<div id="book-title-info">
										<h2 id="title"><a href="/book.php" style="color:#444444">Artificial Intelligence: A Modern Approach</a></h2>
										<h5 id="edition">3rd edition</h5>
										<h4 id="author">Stuart Russell, Peter Norvig</h4>
										<h5 id="classes">EECS-348</h5>
										<h4 id="price">Price: $120</h4>
									</div>
								</th>						
							</tr>
							<tr>
								<th>
									<div id="book-image">
										<img src="images/Design-Book.jpg">
									</div>
								</th>
								<th>
									<div id="book-title-info">
										<h2 id="title"><a href="/book.php" style="color:#444444">The Non-Designer's Design Book</a></h2>
										<h5 id="edition">3rd edition</h5>
										<h4 id="author">Robin Williams</h4>
										<h5 id="classes">EECS-330</h5>
										<h4 id="price">Price: $65</h4>
									</div>
								</th>					
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