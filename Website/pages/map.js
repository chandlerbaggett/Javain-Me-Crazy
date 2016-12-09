var map;
var markers = [];
window.onload = function initMap(){
	geocoder = new google.maps.Geocoder();
	var cen = {lat: 40.0067, lng: -105.2659};
	map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: cen
        });
}

function update(name, element){
	for (var i=0; i < markers.length; i++){
		if(markers[i].getTitle() == name){
			element.style.backgroundColor = "white";
			markers[i].setMap(null);
			markers.splice(i,1);
			return;
		}
    	}
	updateNew(name);
	element.style.backgroundColor = '#ffff99';
}

function findLatLong(name){
	var i = 0;
	while (true){
		if (buildings[i][0] == name){
			var temp = buildings[i][1];
			temp = temp.match(/[\d.-]+/g);
			temp = temp.toString().split(',');
			return new google.maps.LatLng(parseFloat(temp[0]),parseFloat(temp[1]));
		}
		i++;
	}
}

function updateNew(name){
	var address = findLatLong(name);
	var contentString = '<div>'+
				name+
			    '</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	map.panTo(address);
	var marker = new google.maps.Marker({
		position: address,
		map: map,
		title: name
	});
	marker.addListener('click', function(){
		infowindow.open(map, marker);
	});
	markers.push(marker);
}

function updateSearch(){
	var input = document.getElementById('search');
	var filter = input.value.toUpperCase();
	var ul = document.getElementById("searchList");
	var li = ul.getElementsByTagName('li');
	var a, i;
	for (i = 0; i<li.length; i++){
		if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1){
			li[i].style.display="";
		}
		else{
			li[i].style.display = "none";
		}
	}	
}
