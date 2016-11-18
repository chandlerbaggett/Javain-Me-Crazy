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
	        		<li><a href="./index.html">Home</a></li>
		        	<li><a href="./sportsscores.php">Sports Scores</a></li>
	        		<li><a href="./campusmap.html">Campus Map</a></li>
	        		<li><a href="./campusevents.php">Events</a></li>
				<li><a href="./busroutes.html">Bus Routes</a></li>
				<li><a href="./about.html">About</a></li>
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
        		$result = $db->query("SELECT * FROM campusevents LEFT JOIN buildings ON buildings.buildingid=campusevents.buildingid ORDER BY 'campusevents.date' ASC");
        		while ($row = $result->fetch_assoc()){
            			echo "\t\t".'<li><span class="event">'.$row['name'].'</span>: <span>'.$row['date']." &#64; ".$row['time']."</span></li>\n";
				echo $row['info']."<br />\n";
				echo "Location: ".$row['buildingname']."<br />\n";
				echo "Address: ".$row['address']."<br /><br />\n";
        		}
		?>
 
	</ul>
			
			</div><!-- /.container -->
		</body>
	</html>
