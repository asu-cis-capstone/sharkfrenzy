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
		<script>
			$(function () {
			var date = new Date();
			var y = date.getFullYear();
			
			$('#calendar').fullCalendar({
				header: {
					/*left: 'prev,next', 
					center: 'title'*/
				},
				editable: true
					});
			});
		</script>
		
	
	</head>

	<body>
	
		<div class = "jumbotron vertical-center alert-info">
			<div class = "container-fluid">
				<H1>My Calendar</H1>
				
			</div>
		</div>
		
		<div class = "text-center">
			<html>
				<head>
					<title>Calendar</title>
					
					<!-- CSS -->
					<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet" />
					<link href="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css" rel="stylesheet" />
					<link href="http://arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css" rel="stylesheet" />
					
					<!-- SCRIPTS -->
					<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
					<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
					<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
					<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
				</head>
				
				<body>
					<div class="container">
					
						<div id='calendar'></div>
					</div>
				</body>
			</html>
			</br>
		</div>
		
		<div id="prefooter"></div>
		
		<div class = "navbar navbar-fixed-bottom">
			<div class = "container-fluid">
				<ul class = "nav navbar-nav text-center">
					<li><a href = "profile.php"><i class="fa fa-user" aria-hidden="true"></i><br> Profile</a></li>
					<li><a href = "index.php"><i class="fa fa-users" aria-hidden="true"></i><br> Groups</a></li>
					<li><a href = "#"><i class="fa fa-calendar" aria-hidden="true"></i><br> Calendar</a></li>
					<li><a href = "tasks.php"><i class="fa fa-tasks" aria-hidden="true"></i><br> Tasks</a></li>
					<li><a href = "chat.php"><i class="fa fa-comment-o" aria-hidden="true"></i><br> Chat</a></li>
				</ul>
			</div>
			
		</div>
	</body>
	
</html>