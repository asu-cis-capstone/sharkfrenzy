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
		<link type = "text/css" rel = "stylesheet" href = "StyleSheets/tasks.css" />
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
				<H1>Tasks</H1>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>My CIS 440 Tasks:</h4>
			</div>
			<div class="panel-body">
			<div class="task-content">
				<ul class="task-list">
					<li>
						<div class="task-title">
						<span class="task-title-sp">Sprint Review 3</span>
						<span class="label label-pill label-info">TODAY</span>
							<div class="pull-right hidden-phone">
								<button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
								<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
							</div>
						</div>
					</li>
					<br>
					<li>
						<div class="task-title">
						<span class="task-title-sp">Project Showcase</span>
						<span class="label label-pill label-success">7 Days</span>
							<div class="pull-right hidden-phone">
								<button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
								<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			</div>
		</div>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>My CIS 365 Tasks:</h4>
			</div>
			<div class="panel-body">
			<div class="task-content">
				<ul class="task-list">
					<li>
						<div class="task-title">
						<span class="task-title-sp">M6 - Advanced queries #1,3,7</span>
						<span class="label label-pill label-danger">1 Day Late</span>
							<div class="pull-right hidden-phone">
								<button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
								<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			</div>
		</div>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>My CIS 235 Tasks:</h4>
			</div>
			<div class="panel-body">
			<div class="task-content">
				<ul class="task-list">
					<li>
						<div class="task-title">
						<span class="task-title-sp">Presentation - Profit Analysis</span>
						<span class="label label-pill label-danger">2 Days Late</span>
							<div class="pull-right hidden-phone">
								<button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
								<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			</div>
		</div>
		
		<div id="prefooter"></div>
		
		<div class = "navbar navbar-fixed-bottom">
			<div class = "container-fluid">
				<ul class = "nav navbar-nav text-center">
					<li><a href = "profile.php"><i class="fa fa-user" aria-hidden="true"></i><br> Profile</a></li>
					<li><a href = "groups.php"><i class="fa fa-users" aria-hidden="true"></i><br> Groups</a></li>
					<li><a href = "calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><br> Calendar</a></li>
					<li><a href = "#"><i class="fa fa-tasks" aria-hidden="true"></i><br> Tasks</a></li>
					<li><a href = "chat.php"><i class="fa fa-comment-o" aria-hidden="true"></i><br> Chat</a></li>
				</ul>
			</div>
			
		</div>
	</body>
	
</html>