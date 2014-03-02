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
		<link href="css/message.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>


		<div id="wrapper">
			<div class="container">
				<?php include 'indexHeader.html'; ?>
				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				  Launch Facebook Messaging
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				        <h4 class="modal-title" id="myModalLabel">
				        	<img src="images/Facebook-logo.png" width="30" height ="30"> William Chou</h4>
				      </div>
				      <div class="modal-body">
				       	<div class = "bubbleSender"><p id="chatText"> Hey, I'd like to buy your C++ How to Program for EECS 211</p></div>
				       	<div id="receiver-container">
					       	<img src="images/wildcat-willie.jpg" id="senderPic">
					       	<div class = "bubbleReceiver"><p id="chatText"> Cool, when do you want to meet? </p></div>
					    </div>
				       	<div class ="bubbleSender"><p id="chatText"> How about Tech at 3PM tomorrow? </p>
				       	</div>
				       	<div id="receiver-container">
					       	<img src="images/wildcat-willie.jpg" id="senderPic">
					       	<div class ="bubbleReceiver"><p id="chatText"> Sounds good. See you tomorrow! </p>
					       	</div>
					    </div>
				      </div>
				      <div class="modal-footer">
				      	<div class="form-group">
				        	<div class="col-sm-10" id="messagebox">
				          		<input type="message" class="form-control">
				        	</div>
				        	<button type="button" class="btn btn-primary">Send</button>
		      			</div>
				        
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