<!DOCTYPE html>
	<html>
		<head>
			<title>Buffs Events</title>
			<!-- link to main stylesheet -->
			<link rel="stylesheet" type="text/css" href="../css/main.css">
		</head>
		<body>
			<nav>
	    		<ul>
	        		<li><a href="/">Home</a></li>
		        	<li><a href="/sports_scores">Sports Scores</a></li>
	        		<li><a href="/campus_map">Campus Map</a></li>
	        		<li><a href="/events">Events</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/blog">Blog</a></li>
	    		</ul>
			</nav>
		<div class="container">
	 	<h1>CU Buffs Events</h1>
	<ul class="posts">
		<?php
			echo "\n";
                        $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        		if($db->connect_errno > 0){
           			die('Unable to connect to database [' . $db->connect_error . ']');
       			}
        		$result = $db->query("SELECT * FROM campusevents");
        		while ($row = $result->fetch_assoc()    font-size: .8em;){
            			echo "\t\t".'<li><span>'.$row['name'].'</span> - <span class="datetime">'.$row['date']." at ".$row['time']."</span></li> <br/> \n";
        		}
		?>
 
	</ul>
			
			</div><!-- /.container -->
			<footer>
	    		<ul>
	        		<li><a href="jonah.jacobsen@colorado.edu">email</a></li>
				<li>Phone: 801-717-8177</li>
				</ul>
			</footer>
		</body>
	</html>
