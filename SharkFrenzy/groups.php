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
				<H1>My Groups</H1>
			</div>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h4>CIS 440 <span class="badge pull-right">2</span></h4>
			</div>
			<div class="panel-body">
				2 Upcoming Tasks
			</div>
		</div>
		
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h4>CIS 365 <span class="badge pull-right">1</span></h4>
			</div>
			<div class="panel-body">
				1 Overdue Task
			</div>
		</div>
		
		<div class="panel panel-success">
			<div class="panel-heading">
				<h4>CIS 430 <span class="badge pull-right">0</span></h4>
			</div>
			<div class="panel-body">
				No Upcoming Tasks
			</div>
		</div>
		
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h4>CIS 235 <span class="badge pull-right">1</span></h4>
			</div>
			<div class="panel-body">
				1 Overdue Task
			</div>
		</div>
		
		<div class="panel panel-primary">
			<div class="panel-body text-center">
				<h4>Create New Group</h4>
				<h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
			</div>
		</div>
		
		<div id="prefooter"></div>
		
		<div class = "navbar navbar-fixed-bottom">
			<div class = "container-fluid">
				<ul class = "nav navbar-nav text-center">
					<li><a href = "profile.php"><i class="fa fa-user" aria-hidden="true"></i><br> Profile</a></li>
					<li><a href = "#"><i class="fa fa-users" aria-hidden="true"></i><br> Groups</a></li>
					<li><a href = "calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><br> Calendar</a></li>
					<li><a href = "tasks.php"><i class="fa fa-tasks" aria-hidden="true"></i><br> Tasks</a></li>
					<li><a href = "chat.php"><i class="fa fa-comment-o" aria-hidden="true"></i><br> Chat</a></li>
				</ul>
			</div>
			
		</div>
	</body>
	
</html>