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
		<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
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

				<div>
					<form class="form-horizontal" role="form">

						<div class="info-block" id="you-info">
							<div class="info-title"><h4>You</h4></div>
							<div class="info-section">
								<h4>To communicate with buyers, log in using Facebook.</h4>
								<div class="form-group">
						        	<label class="col-sm-2 control-label">Facebook</label>
									<a id="login-modal" data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><i class="fa fa-facebook"></i> Log in</a>
						      	</div>
								<div class="form-group">
						        	<label class="col-sm-2 control-label">Your Name</label>
						        	<div class="text-field">
						          		<input type="text" class="form-control" placeholder="Will Chou">
						        	</div>
						      	</div>
						    </div>
						</div>

						<div class="info-block" id="book-info">
							<div class="info-title"><h4>Textbook</h4></div>
							<div class="info-section">
								<h4>Help us advertise your book. Fill in its information below.</h4>
								<div class="form-group">
									<label class="col-sm-2 control-label">Course</label>
									<div class="btn-group">
							        	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							        		Department <span class="caret"></span>
							        	</button>
							        	<ul class="dropdown-menu" role="menu">
							          		<li><a href="#">ANTHRO</a></li>
							          		<li><a href="#">BIO</a></li>
							          		<li><a href="#">BME</a></li>
							          		<li><a href="#">CHEM</a></li>
							          		<li><a href="#">EECS</a></li>
							        	</ul>
							      	</div>
						      		<div class="btn-group">
							        	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							          		Class Number <span class="caret"></span>
							        	</button>
							        	<ul class="dropdown-menu" role="menu">
							          		<li><a href="#">101</a></li>
							          		<li><a href="#">110</a></li>
							          		<li><a href="#">202</a></li>
							          		<li><a href="#">211</a></li>
							          		<li><a href="#">213</a></li>
							        	</ul>
							      	</div>
								</div>
						      	<div class="form-group">
						        	<label class="col-sm-2 control-label">Title</label>
						        	<div class="text-field">
						          		<input type="text" class="form-control" placeholder="C++ How to Program">
						        	</div>
						      	</div>
						      	<div class="form-group">
						        	<label class="col-sm-2 control-label">Author</label>
						        	<div class="text-field">
						          		<input type="text" class="form-control" placeholder="Paul Dietel">
						        	</div>
						      	</div>
						      	<div class="form-group">
						        	<label class="col-sm-2 control-label">Price</label>
						        	<div class="text-field">
						          		<input type="text" class="form-control" placeholder="$100.00">
						        	</div>
						      	</div>
						      	<div class="form-group">
									<label class="col-sm-2 control-label">Condition</label>
									<div class="btn-group">
							        	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							          		Choose one <span class="caret"></span>
							        	</button>
							        	<ul class="dropdown-menu" role="menu">
							          		<li><a href="#">New</a></li>
							          		<li><a href="#">Used - Like New</a></li>
							          		<li><a href="#">Used - Good Condition</a></li>
							          		<li><a href="#">Used - Poor Condition</a></li>
							        	</ul>
							      	</div>
								</div>
						      	<div class="form-group">
						        	<label class="col-sm-2 control-label">Edition</label>
						        	<div class="text-field">
						          		<input type="text" class="form-control" placeholder="3rd">
						        	</div>
						      	</div>
							</div>
						</div>

						<div id="submit">
							<button type="button" id="submit-button" class="btn btn-default btn-sm">Submit</button>
						</div>
				    </form>
				</div>

				<!-- Modal -->
				<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				 	<div class="modal-dialog">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        		<h4 class="modal-title"><img src="images/Facebook-logo.png"> Facebook Login</h4>
				      		</div>
				      		<div class="modal-body">
					      		<form class="form-horizontal" role="form">
						        	<div class="form-group">
							        	<label class="col-sm-4 control-label">Email</label>
							        	<div class="col-sm-6">
							          		<input type="email" class="form-control" placeholder="Name">
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
				        		<button type="button" class="btn btn-primary">Log In</button>
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