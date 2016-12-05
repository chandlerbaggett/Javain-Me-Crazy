<!DOCTYPE html>
	<html>
		<head>
			<title>CU Campus Map</title>
			<?php
				$result_array_names = array();
				$db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
				if($db->connect_errno > 0){
					die('Unable to connect to database [' . $db->connect_error . ']');
				}
				$result = $db->query("SELECT * FROM buildings");
				while ($row = $result->fetch_assoc()){
					$result_array[] = array($row['buildingname'], $row['address']);
				}
				$json_array = json_encode($result_array);
			?>
			<script type="text/javascript">
				var buildings = <?php echo $json_array; ?>;
			</script>
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="../css/main.css">
			<script src="map.js" type="text/javascript"></script>
		</head>
		<body>
			<nav>
			<ul>
	        		<li><a href="./index.html">Home</a></li>
		        	<li><a href="./sportsscores.php">Sports Scores</a></li>
	        		<li><a href="./campusmap.php">Campus Map</a></li>
	        		<li><a href="./campusevents.php">Events</a></li>
				<li><a href="./busroutes.html">Bus Routes</a></li>
				<li><a href="./about.html">About</a></li>
	    		</ul>
			</nav>
			<div class = "container">
				<div class = "row">
					<div class="col-md-4">
						<input type =search" class="form-control" id="search" placeholder="Search", onkeyup="updateSearch()">
						<ul id="searchList">
						<?php
							echo "\n";
							$db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
							if($db->connect_errno > 0){
								die('Unable to connect to database [' . $db->connect_error . ']');
							}
							$result = $db->query("SELECT * FROM buildings ORDER BY buildingname ASC");
							while ($row = $result->fetch_assoc()){
								echo "\t\t\t\t\t\t\t".'<li class = "list-group-item"><a href="#" onclick="update(this.innerHTML)">'.$row['buildingname']."</a></li>\n";
							}
						?>
						</ul>
					</div>
					<div class="col-md-8">
						<div class = "map-canvas">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>
			<footer>
	    		<ul>
				<li>Java-In-Me Crazy Team 5</li>
				</ul>
			</footer>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBncTak3-58PRQ-FWWyelBah0ubXOi2GAU"></script>

		</body>
	</html>
