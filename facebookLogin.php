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
		<link href="css/facebookLogin.css" rel="stylesheet">
		<!-- HTML Shim and Respond.js IE8 support of HTML elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/htmlshiv/3.7.0/htmlshiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<div id="wrapper">
			<div id="container">

				<?php include 'header.html'; ?>
				<!-- Begin the modal for Facebook Login here--> 
				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg" id="login-modal" data-toggle="modal" data-target=".bs-example-modal-lg">
				  Launch Facebook Login
				</button>

				<!-- Modal -->
				<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">
				        	<img src="images/Facebook-logo.png" width="30" height="30"> Facebook Login</h4>
				      </div>
				      <div class="modal-body">
					      <form class="form-horizontal" role="form">
					        <div class ="form-group" id="input-email-phone">
						        <label for ="inputEmailPhone" class = "col-sm-4 control-label"><font color ="#694489">Email or Phone</font></label>
						        <div class ="col-sm-6">
						          <input type ="email" class = "form-control" id="inputEmailPhone" placeholder="Name">
						        </div>
					      	</div>
					      	<div class ="form-group" id="input-password">
						        <label for ="inputPassword" class = "col-sm-4 control-label"><font color ="#694489">Password</font></label>
						        <div class ="col-sm-6">
						          <input type ="email" class = "form-control" id="inputPassword" placeholder="Password">
						        </div>
					      	</div>
					      	<div class="form-group" id="remember-me-checkbox">
							    <div class="col-sm-offset-4 col-sm-10">
							      <div class="checkbox">
							        <label>
							          <input type="checkbox"> Remember me
							        </label>
							      </div>
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
	</body>

</html>