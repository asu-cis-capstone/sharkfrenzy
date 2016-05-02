<!DOCTYPE html>

<!--
Shark Frenzy
index.php
Spring 2016

-->

<html lang = "en">
	
	<head>
	
		<!--establish correct base based on URI -->
		 
		 
		<!-- Meta tag -->
		<meta charset = "utf-8" />
		<meta name = "robots" content = "noindex,nofollow" />
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		
		<!-- Link tag for CSS -->
		<link type = "text/css" rel = "stylesheet" href = "StyleSheets/bootstrap.css" />
		<link type = "text/css" rel = "stylesheet" href = "StyleSheets/logon.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
			
		<!-- Web Page Title -->
		<title>Shark Frenzy</title>
	
		<!-- javascript tags -->
		<script type = "text/javascript" src = "js/jquery-2.2.1.min.js"></script>
		<script type = "text/javascript" src = "js/bootstrap.js"></script>
		
	
	</head>

	<body>
						
					<div class = "container vertical-center">
					
						<form class = "form" role = "form" action="groups.php" method="post">
						
						<img class = "img-responsive center-block" src = "images/logon/SFLogo2W.png" alt="Profile Picture">
						<?php
							//check the return code from process.php
							if(isset($_GET['rc']))
							{
								if($_GET['rc'] == 1)
									echo '<p class="loginerror">Invalid Username!</p>';
								if($_GET['rc'] == 2)
									echo '<p class="loginerror">Invalid Password!</p>';
								if($_GET['rc'] == 3)
									echo '<p class="loginerror">Returned from process.php</p>';
							}
						?>
							
							<!-- Email -->
							<div class = "form-group">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class = "glyphicon glyphicon-envelope"></span> Email: </span>
									
									<input type = "email" class = "form-control" id = "email" name = "email" 
										autofocus
										pattern = "[a-z0-9-_.$]+@[a-z0-9-_.]+\.[a-z]{2,16}"
										maxlength = "50"
										placeholder = "Enter Email Address"
									>
								</div>
							</div>
							
							<!-- Password -->
							<div class = "form-group">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class = "glyphicon glyphicon-lock"></span> Password: </span>
									<input type = "password" class = "form-control" id = "pword" name = "pword"
																		
									pattern = "[a-zA-Z0-9-_!$]{5,15}"
									placeholder = "Enter Password"
								>
								</div>
							</div>
							
							<!-- Login Button -->
							<button type  =  "submit" class  =  "btn btn-success center-block">Login</button>
							<br>
							<button type  =  "submit" class  =  "btn btn-success center-block">Register</button>
							<br>
						<!-- End of login form for existing cutomers -->
						</form>
					</div>
	
		
		
	</body>
	
</html>