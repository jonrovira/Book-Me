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
		<link href="css/sell.css" rel="stylesheet">
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

				<div id="outline">
					<div id="example">
						<img src="images/Sell-Form-Example.png">
					</div>
					<form id="info">
						<div id="facebook">
							<a id="login-modal" data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><i class="fa fa-facebook"></i><span>Log in with Facebook (Required)</span></a>
						</div>
						<h3>Describe your book...</h3>
						<h6>All fields are required</h6>
						<div class="btn-group">
						 	<button id="department-category" type="button" class="btn btn-danger">Department</button>
						 	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
						  	<ul class="dropdown-menu" role="menu">
						    	<li id="ART"><a href="#">ART</a></li>
						    	<li id="DSGN"><a href="#">DSGN</a></li>
						    	<li id="EECS"><a href="#">EECS</a></li>
						    	<li id="GEN_MUS"><a href="#">GEN_MUS</a></li>
						    	<li id="MUSICOL"><a href="#">MUSICOL</a></li>
						    	<li id="PHYS"><a href="#">PHYS</a></li>
						  	</ul>
						</div>
						<div class="btn-group">
						 	<button id="course-number" type="button" class="btn btn-danger">Course Number</button>
						 	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
						  	<ul class="dropdown-menu" role="menu">
						    	<li id="101"><a href="#">101</a></li>
						    	<li id="111"><a href="#">111</a></li>
						    	<li id="211"><a href="#">211</a></li>
						    	<li id="212"><a href="#">212</a></li>
						    	<li id="213"><a href="#">213</a></li>
						    	<li id="214"><a href="#">214</a></li>
						  	</ul>
						</div><br>
						<input type="text" id="title-field" placeholder="Title"><br>
						<input type="text" id="author-field" placeholder="Author"><br>
						<input type="text" id="edition-field" placeholder="Edition"><br>
						<input type="text" placeholder="Price">
						<div id="condition">
							<h3>Condition</h3>
							<input type="radio"><h6>New</h6><br>
							<input type="radio"><h6>Used - Like New</h6><br>
							<input type="radio"><h6>Used - Good</h6><br>
							<input type="radio"><h6>Used - Poor</h6><br><br>
						</div>
						<button id="submit" type="submit" href="#">Submit post</button>
					</form>
				</div>

				<!-- Modal -->
				<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				        		<button type="button" class="btn btn-primary" data-dismiss="modal">Log In</button>
				      		</div> 
				    	</div>
				  	</div>
				</div>

			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/sell.js"></script>
	</body>

</html>