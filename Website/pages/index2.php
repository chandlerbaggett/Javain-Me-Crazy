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
	      <a href="#home" class="w3-margin-left"><b>Home</b></a>
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
	  </div>

	  <div class="w3-row-padding">
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <div class="w3-display-container">
		<div class="w3-display-topleft w3-black w3-padding">Football</div>
		<img src="https://www.lacrosseschools.org/longfellow-middle/wp-content/uploads/sites/6/2013/09/football.jpg" alt="House" style="width:100%">
	      </div>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <div class="w3-display-container">
		<div class="w3-display-topleft w3-black w3-padding">Volleyball</div>
		<img src="http://www.northcape.k12.wi.us/Data/Sites/19/media/extracurricular/volleyball/volleyballclipart.jpg" alt="House" style="width:100%">
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
	      <p>blah blah blah</p>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Charli Anthony</h3>
	      <p class="w3-opacity">Team Manager</p>
	      <p>asdfasdfasdfasdf</p>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Chandler Baggett</h3>
	      <p class="w3-opacity">Database Architecture</p>
	      <p>;lkj;lkj;lkj;lkj;lkj;lkj</p>
	    </div>
	    <div class="w3-col l3 m6 w3-margin-bottom">
	      <h3>Ryan Bumaa</h3>
	      <p class="w3-opacity">Interface Design</p>
	      <p>liuhawef;oiuawfelihu</p>
	    </div>
	    <div class="w3-col 13 m6 w3-margin-bottom">
	      <h3>Michael Voecks</h3>
	      <p class="w3-opacity">Backend Functionality</p>
	      <p>8r48u4r8u48u4r</p>
	    </div>
	    <div class="w3-col 13 m6 w3-margin-bottom">
	      <h3>Dylan Ahearn</h3>
	      <p class="w3-opacity">Database Functionality</p>
	      <p>eirhgiuerlggesh</p>
	    </div>
	  </div>
	  
	<!-- End page content -->


	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-16">
	  <p>Project by team Javain Me Crazy</p>
	</footer>

	<!-- Add Google Maps -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBncTak3-58PRQ-FWWyelBah0ubXOi2GAU"></script>
	</body>
	</html>

