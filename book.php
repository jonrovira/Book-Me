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
		<link href="css/slider.css" rel="stylesheet">
		<link href="css/book.css" rel="stylesheet">
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

				<div id="sidebar-wrapper">
		            <ul class="sidebar-nav">
		                <li class="sidebar-brand">
		                	<h4>Narrow your results</h4>
		                </li>
		                <li>
		                	<p>Price Ceiling</p>
		                	<input type="text" id="price-slider" class="span2" value="" data-slider-min="0" data-slider-max="300" data-slider-step="5" data-slider-value="300" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
		                	<input type="text" id="price-bar">
		                </li>
		                <li>
		                	<p>Textbook Type</p>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>Hardcover</p></span>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>Paperback</p></span>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>Loose-leaf</p></span>
		                </li>
		                <li>
		                	<p>Condition</p>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>Used - Poor</p></span>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>Used - Good</p></span>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>Used - Like New</p></span>
		                	<span class="input-group-addon"><input type="checkbox" checked><p>New</p></span>
		                </li>
		            </ul>
		        </div>

				<div id="content">
					<div id="book-image">
						<a class="thumbnail"><img src="images/How-To-Program.jpg" /></a>
					</div>
					<div id="book-title-info">
						<h2 id="title">C++ How to Program</h2>
						<h5 id="edition">5th edition</h5>
						<h4 id="author">Paul Dietel</h4>
						<h5 id="classes">EECS-211</h5>
						<h4 id="price-range">Price: $80 - $137	</h4>
					</div>
					<table id="categories" class="table">
							<tr>
								<td>Price <span class="caret"></span></td>
								<td>Condition <span class="caret"></span></td>
								<td>Seller <span class="caret"></span></td>
								<td></td>
							</tr>
					</table>
					<div id="seller-list" class="panel panel-default">
						<table id="sellers" class="table">
							<tr>
								<td>$80</td>
								<td>Used - Good</td>
								<td>Willie Wildcat</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$100</td>
								<td>New</td>
								<td>Amazon</td>
								<td><h3 class="btn amazon">Visit Site</h3></td>
							</tr>
							<tr>
								<td>$105</td>
								<td>Used - Like New</td>
								<td>Divir Gupta</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$117</td>
								<td>Used - Like New</td>
								<td>Jon Rovira</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$122</td>
								<td>New</td>
								<td>Christina Kim</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$130</td>
								<td>Used - Like New</td>
								<td>Will Chou</td>
								<td><h3 class="btn">Message</h3></td>
							</tr>
							<tr>
								<td>$137</td>
								<td>New</td>
								<td>Amazon</td>
								<td><h3 class="btn amazon">Visit Site</h3></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-slider.js"></script>
    	<script src="js/book.js"></script>
	</body>

</html>