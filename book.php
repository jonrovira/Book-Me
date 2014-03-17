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
						<a class="thumbnail"><img id="book-pic" /></a>
					</div>
					<div id="book-title-info">
						<h2 id="title"></h2>
						<h5 id="edition"></h5>
						<h4 id="author"></h4>
						<h5 id="classes"></h5>
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
								<td><h3 class="btn" data-toggle="modal" data-target="#login-modal">Message</h3></td>
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
								<td><h3 class="btn" data-toggle="modal" data-target="#login-modal">Message</h3></td>
							</tr>
							<tr>
								<td>$117</td>
								<td>Used - Like New</td>
								<td>Jon Rovira</td>
								<td><h3 class="btn" data-toggle="modal" data-target="#login-modal">Message</h3></td>
							</tr>
							<tr>
								<td>$122</td>
								<td>New</td>
								<td>Christina Kim</td>
								<td><h3 class="btn" data-toggle="modal" data-target="#login-modal">Message</h3></td>
							</tr>
							<tr>
								<td>$130</td>
								<td>Used - Like New</td>
								<td>Will Chou</td>
								<td><h3 class="btn" data-toggle="modal" data-target="#login-modal">Message</h3></td>
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

		<!-- Modal for Facebook Login-->
		<div class="modal fade bs-example-modal-lg" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		 	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel"><img src="images/Facebook-logo.png"> Facebook Login</h4>
		      		</div>
		      		<div class="modal-body">
			      		<form class="form-horizontal" role="form">
				        	<div class="form-group">
					        	<label class="col-sm-4 control-label">Email</label>
					        	<div class="col-sm-6">
					          		<input type="email" class="form-control" placeholder="Email or Phone">
					        	</div>
				      		</div>
				      		<div class="form-group">
					        	<label class="col-sm-4 control-label">Password</label>
					        	<div class="col-sm-6">
					          		<input type="email" class="form-control" placeholder="Password">
					        	</div>
			      			</div>
			      		</form>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		        		<button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#myModal">Log In</button>
		      		</div> 
		    	</div>
		  	</div>
		</div>

		<!-- Modal for Facebook Messenger-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<!-- buyer's name --> 
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		        <h4 class="modal-title" id="myModalLabel">
		        	<img src="images/Facebook-logo.png" width="30" height ="30"> William Chou</h4>
		      </div>
		      <!-- speech bubbles and conversation goes here --> 
		      <div class="modal-body">
		       	<div class = "bubbleSender"><p id="chatText"> Hey, I'd like to buy your C++ How to Program for EECS 211</p></div>
			       	<img src="images/wildcat-willie.jpg" id="senderPic">
			       	<div class = "bubbleReceiver"><p id="chatText"> Cool, when do you want to meet? </p></div>
		       	<div class ="bubbleSender"><p id="chatText"> How about Tech at 3PM tomorrow? </p>
		       	</div>
			       	<img src="images/wildcat-willie.jpg" id="senderPic">
			       	<div class ="bubbleReceiver"><p id="chatText"> Sounds good. See you tomorrow! </p>
			       	</div>
		      </div>
		      <!-- user inputs text in modal footer --> 
		      <div class="modal-footer">
		      	<div class="form-group">
		        	<div class="col-sm-10" id="messagebox">
		          		<input type="message" class="form-control">
		        	</div>
		        	<button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
      			</div>
		        
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