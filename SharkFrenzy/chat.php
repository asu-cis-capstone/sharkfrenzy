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
		<link type = "text/css" rel = "stylesheet" href = "StyleSheets/chat.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
			
		<!-- Web Page Title -->
		<title>Shark Frenzy</title>
	
		<!-- javascript tags -->
		<script type = "text/javascript" src = "js/jquery-2.2.1.min.js"></script>
		<script type = "text/javascript" src = "js/bootstrap.js"></script>
		<script type = "text/javascript" src = "js/chat.js"></script>
		
	
	</head>

	<body>
	
		<div class = "jumbotron vertical-center alert-info">
			<div class = "container-fluid">
				<H1>Chat</H1>
			</div>
		</div>
		
		<div class="container">
		<div class="row chat-window col-xs-5 col-md-3" id="chat_window_1">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - CIS 440 Group</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>Hey Team! we need to get our storyboard ideas
								into a working prototype.</p>
                                <time datetime="2009-11-13T20:00">Mickey Mouse • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/profilepics/mickey_mouse.png" class=" img-responsive img-circle ">
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/profilepics/pluto.jpg" class=" img-responsive img-circle ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>I'm just a dog, I don't know how to code.</p>
                                <time datetime="2009-11-13T20:00">Pluto • 50 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/profilepics/daisy.jpg" class=" img-responsive img-circle ">
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_receive">
                                <p>I can help code the prototype. I have built a lot of mobile web pages using bootstrap.</p>
                                <time datetime="2009-11-13T20:00">Daisy • 50 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_sent">
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_sent">
                                <p>Oh Boy! Thanks! Lets use Bootstrap to build our prototype</p>
                                <time datetime="2009-11-13T20:00">Mickey Mouse • 49 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/profilepics/mickey_mouse.png" class=" img-responsive img-circle ">
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/profilepics/daisy.jpg" class=" img-responsive img-circle ">
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_receive">
                                <p>Goofy knows how to code too. We should arrange a meet up so we can start the development.</p>
                                <time datetime="2009-11-13T20:00">Daisy • 49 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10 ">
                            <div class="messages msg_sent">
                                <p>Sounds good Daisy. Lets use the find a study location feature and set up a time.</p>
                                <time datetime="2009-11-13T20:00">Mickey Mouse • 45 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/profilepics/mickey_mouse.png" class=" img-responsive img-circle ">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
    		</div>
        </div>
    </div>
    
    <div class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-cog"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
            <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
        </ul>
    </div>
</div>
		
		
		<div id="prefooter"></div>
		
		<div class = "navbar navbar-fixed-bottom">
			<div class = "container-fluid">
				<ul class = "nav navbar-nav text-center">
					<li><a href = "profile.php"><i class="fa fa-user" aria-hidden="true"></i><br> Profile</a></li>
					<li><a href = "groups.php"><i class="fa fa-users" aria-hidden="true"></i><br> Groups</a></li>
					<li><a href = "calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><br> Calendar</a></li>
					<li><a href = "tasks.php"><i class="fa fa-tasks" aria-hidden="true"></i><br> Tasks</a></li>
					<li><a href = "#"><i class="fa fa-comment-o" aria-hidden="true"></i><br> Chat</a></li>
				</ul>
			</div>
			
		</div>
	</body>
	
</html>