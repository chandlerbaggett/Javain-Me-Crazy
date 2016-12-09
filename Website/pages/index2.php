<!DOCTYPE html>
	<html>
	<head>
	  <title>Java-in Me Crazy</title>
	  <style>
	    #map{
	      height:100%;
              width:100%;
            }
            #searchList{
              height:450px;
	      overflow:auto;
            }
            #clickable{
              cursor:pointer;
            }
  	  </style>  
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
	  <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="map.js" type="text/javascript"></script>
          <script type="text/javascript">
            var buildings = <?php echo $json_array; ?>;
          </script>
	</head>
	<body>
	<!-- Navbar (sit on top) -->
	<div class="w3-top">
	  <ul class="w3-navbar w3-white w3-wide w3-padding-8 w3-card-2">
	    <li>
	      <a href="#home" class="w3-margin-left">Home</a>
	    </li>
	    <!-- Float links to the right. Hide them on small screens -->
	    <li class="w3-right w3-hide-small">
	      <a href="#sportsscores" class="w3-left">Sports Scores</a>
	      <a href="#campusmap" class="w3-left">Campus Map</a>
	      <a href="#events" class="w3-left w3-margin-right">Events</a>
	      <a href="#about" class="w3-left w3-margin-right">About</a>
	    </li>
	  </ul>
	</div>

	<!-- Header -->
	<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
	  <img class="w3-image" src="https://i.ytimg.com/vi/AHNAgyyXiOI/maxresdefault.jpg" alt="Architecture" width="1500" height="800">
	</header>

	<!-- Page content -->
	<div class="w3-content w3-padding" style="max-width:1564px">

	  <!-- Sports Scores Section -->
	  <div class="w3-container w3-padding-32" id="sportsscores">
	    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Sports Scores</h3>
	    <div class="panel-group">
	    <div class="panel panel-default">
	      <div class="panel-heading">
		<h4 class="panel-title">
		  <a data-toggle="collapse" href="#collapse1">Football</a>
		</h4>
	      </div>
	      <div id="collapse1" class="panel-collapse collapse">
		<ul class="list-group">
		  <?php
		    $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        	    if($db->connect_errno > 0){
           	      die('Unable to connect to database [' . $db->connect_error . ']');
       		    }
        	    $result = $db->query("SELECT * FROM sportsscores WHERE sport='football'");
        	    while ($row = $result->fetch_assoc()){
            	      echo "\t\t\t".'<li class="list-group-item">'.$row['date'].' vs. '.$row['opponent'].': '.$row['opponent'].': '.$row['outcome'].' - '.$row['score']."</li>\n";
        	    }
		  ?>
		</ul>
	      </div>
	    </div>
	    
	    <div class="panel panel-default">
	      <div class="panel-heading">
		<h4 class="panel-title">
		  <a data-toggle="collapse" href="#collapse2">Men's Basketball</a>
		</h4>
	      </div>
	      <div id="collapse2" class="panel-collapse collapse">
		<ul class="list-group">
	 	  <?php
		    $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        	    if($db->connect_errno > 0){
           	      die('Unable to connect to database [' . $db->connect_error . ']');
       		    }
        	    $result = $db->query("SELECT * FROM sportsscores WHERE sport='basketball'");
        	    while ($row = $result->fetch_assoc()){
            	      echo "\t\t\t".'<li class="list-group-item">'.$row['date'].' vs. '.$row['opponent'].': '.$row['opponent'].': '.$row['outcome'].' - '.$row['score']."</li>\n";
        	    }
		  ?>
		</ul>
	      </div>
	    </div>
	    
	    <div class="panel panel-default">
	      <div class="panel-heading">
		<h4 class="panel-title">
		  <a data-toggle="collapse" href="#collapse3">Women's Basketball</a>
		</h4>
	      </div>
	      <div id="collapse3" class="panel-collapse collapse">
		<ul class="list-group">
		  <?php
		    $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        	    if($db->connect_errno > 0){
           	      die('Unable to connect to database [' . $db->connect_error . ']');
       		    }
        	    $result = $db->query("SELECT * FROM sportsscores WHERE sport='wbasketball'");
        	    while ($row = $result->fetch_assoc()){
            	      echo "\t\t\t".'<li class="list-group-item">'.$row['date'].' vs. '.$row['opponent'].': '.$row['opponent'].': '.$row['outcome'].' - '.$row['score']."</li>\n";
        	    }
		  ?>
		</ul>
	      </div>
	    </div>
	    
	    <div class="panel panel-default">
	      <div class="panel-heading">
		<h4 class="panel-title">
		  <a data-toggle="collapse" href="#collapse4">Volleyball</a>
		</h4>
	      </div>
	      <div id="collapse4" class="panel-collapse collapse">
		<ul class="list-group">
		  <?php
		    $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        	    if($db->connect_errno > 0){
           	      die('Unable to connect to database [' . $db->connect_error . ']');
       		    }
        	    $result = $db->query("SELECT * FROM sportsscores WHERE sport='volleyball'");
        	    while ($row = $result->fetch_assoc()){
            	      echo "\t\t\t".'<li class="list-group-item">'.$row['date'].' vs. '.$row['opponent'].': '.$row['outcome'].' - '.$row['score']."</li>\n";
        	    }
		  ?>
		</ul>
	      </div>
	    </div>
	    
	    <div class="panel panel-default">
	      <div class="panel-heading">
		<h4 class="panel-title">
		  <a data-toggle="collapse" href="#collapse5">Women's Soccer</a>
		</h4>
	      </div>
	      <div id="collapse5" class="panel-collapse collapse">
		<ul class="list-group">
		  <?php
		    $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        	    if($db->connect_errno > 0){
           	      die('Unable to connect to database [' . $db->connect_error . ']');
       		    }
        	    $result = $db->query("SELECT * FROM sportsscores WHERE sport='wsoccer'");
        	    while ($row = $result->fetch_assoc()){
            	      echo "\t\t\t".'<li class="list-group-item">'.$row['date'].' vs. '.$row['opponent'].': '.$row['outcome'].' - '.$row['score']."</li>\n";
        	    }
		  ?>
		</ul>
	      </div>
	    </div>
	    
	  </div>
	    
	  </div>
	</div>

 
	  <!-- Campus Map -->
	  <div class="w3-container w3-padding-32" id="campusmap">
	    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Campus Map</h3>
	    <div class = "row">
              <div class = "col-md-4">
                <input type="search" class="form-control" id="search" placeholder="Search" onkeyup="updateSearch()">
		<ul id="searchList">
		  <?php
		    echo "\n";
		    $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
		    if($db->connect_errno > 0){
		      die('Unable to connect to database [' . $db->connect_error . ']');
		    }
		    $result = $db->query("SELECT * FROM buildings ORDER BY buildingname ASC");
		    while ($row = $result->fetch_assoc()){
		      echo "\t".'<li class = "list-group-item" id = "clickable" onclick="update(this.innerHTML, this)">'.$row['buildingname']."</li>\n";
		    }
		  ?>
		</ul>
	      </div>
              <div class = "col-md-8">
	        <div class = "map-canvas" style="height: 450px">
		  <div id="map"></div>
		</div>
	      </div>
	    </div>
	  </div>
	  
	  <!-- Events Section -->
	  <div class="w3-container w3-padding-32" id="events">
	    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Events</h3>
              <div class="list-group">
	      <?php
		echo "\n";
		$db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
		if($db->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
		}
		$result = $db->query("SELECT * FROM campusevents LEFT JOIN buildings ON buildings.buildingid=campusevents.buildingid ORDER BY 'campusevents.date' ASC");
		while ($row = $result->fetch_assoc()){
			echo "\t\t".'<li class="list-group-item">'."\n";
			echo "\t\t\t".'<span class="badge">'.$row['date'].' '.$row['time']."</span>\n";
			echo "\t\t\t".'<h4 class = "list-group-item-heading">'.$row['name']."</h4>\n";
			echo "\t\t\t".'<p class = "list-group-item-text">'.$row['info']."</p>\n";
			echo "\t\t"."</li>\n";
		}
	      ?>

	    </div>
	  </div>

 
	  <!-- About Section -->
	  <div class="w3-container w3-padding-32" id="about">
	    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">About</h3>
	    <p>Javain-Me-Crazy is a group of CU students that decided to centralize all important information to CU students into one single place online. This site was made as a project for our Software Development Methods and Tools class. If you would like to report a bug or you would like to make suggestions, please email us.
	    </p>
	  </div>

	  <div class="w3-row-padding w3-grayscale">
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Jonah Jacobsen</h3>
	      <p class="w3-opacity">Front End Design</p>
	      <p>Using crude knowledge of css and bootstrap to help Ryan design a fluid and bug-less website.</p>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Charli Anthony</h3>
	      <p class="w3-opacity">Team Manager</p>
	      <p>Directing and organizing the group to make sure we get milestones completed on time, Charli is the driving force behind the team.</p>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Chandler Baggett</h3>
	      <p class="w3-opacity">Database Architecture</p>
	      <p>The jack of all trades, Chandler floated between everybody, assisting on every aspect of the project.</p>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Ryan Bumaa</h3>
	      <p class="w3-opacity">Interface Design</p>
	      <p>As the visionary of the group Ryan is always looking to bring our project to the next level. After reigning in his expectations to an achievable level he guides the team on how the site should look.</p>
	    </div>
	    <div class="w3-col 13 m6 w3-margin-bottom">
	      <h3>Michael Voecks</h3>
	      <p class="w3-opacity">Backend Functionality</p>
	      <p>Undeniable the most technically adept, Michael has set up a backend for us to store our data and host our site.</p>
	    </div>
	    <div class="w3-col 13 m6 w3-margin-bottom">
	      <h3>Dylan Ahearn</h3>
	      <p class="w3-opacity">Database Functionality</p>
	      <p>Dylan has become fluent in SQL over the course of this project, executing queries and formatting tables whenever need be.</p>
	    </div>
	  </div>
	</div>
  
	<!-- End page content -->


	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-16">
	  <p>Project by team Javain Me Crazy</p>
	</footer>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBncTak3-58PRQ-FWWyelBah0ubXOi2GAU"></script>
	</body>
	</html>

