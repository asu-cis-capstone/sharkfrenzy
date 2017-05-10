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
		<link type = "text/css" rel = "stylesheet" href = "StyleSheets/SharkFrenzy.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
			
		<!-- Web Page Title -->
		<title>Shark Frenzy</title>
	
		<!-- javascript tags -->
		<script type = "text/javascript" src = "js/jquery-2.2.1.min.js"></script>
		<script type = "text/javascript" src = "js/bootstrap.js"></script>
		
	
	</head>

	<body>
	
		<div class = "jumbotron vertical-center alert-info">
			<div class = "container-fluid">
				<H1>My Profile</H1>
			</div>
		</div>
		
		
		<img class = "img-responsive center-block img-circle" src = "images/profilepics/mickey_mouse.png" alt="Profile Picture">
		
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Name:         </span>
				<input type="text" class="form-control" placeholder="Mickey Mouse" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Email:        </span>
				<input type="text" class="form-control" placeholder="MickeyMouse@ASU.edu" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Skills:       </span>
				<input type="text" class="form-control" placeholder="Magic" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Availability: </span>
				<input type="text" class="form-control" placeholder="24/7" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Other Info:   </span>
				<input type="text" class="form-control" placeholder="I have a dog named pluto" aria-describedby="basic-addon1">
		</div>
		<br>

		
		<div id="prefooter"></div>
		
		<div class = "navbar navbar-fixed-bottom">
			<div class = "container-fluid">
				<ul class = "nav navbar-nav text-center">
					<li><a href = "#"><i class="fa fa-user" aria-hidden="true"></i><br> Profile</a></li>
					<li><a href = "groups.php"><i class="fa fa-users" aria-hidden="true"></i><br> Groups</a></li>
					<li><a href = "calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><br> Calendar</a></li>
					<li><a href = "tasks.php"><i class="fa fa-tasks" aria-hidden="true"></i><br> Tasks</a></li>
					<li><a href = "chat.php"><i class="fa fa-comment-o" aria-hidden="true"></i><br> Chat</a></li>
				</ul>
			</div>
			
		</div>
	</body>
	
</html>