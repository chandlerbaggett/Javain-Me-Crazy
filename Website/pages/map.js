var map;
var geocoder;
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

function updateNew(name){
	var address = buildings.filter( function( el ) {
		return !!~el.indexOf( name );
	} );
	address = address.toString();
	var contentString = '<div>'+
				name+
			    '</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	geocoder = new google.maps.Geocoder();
	geocoder.geocode({'address': address}, function(results, status){
		if (status == google.maps.GeocoderStatus.OK){
			map.panTo(results[0].geometry.location);
			var marker = new google.maps.Marker({
				position: results[0].geometry.location,
				map: map,
				title: name
			});
			marker.addListener('click', function(){
				infowindow.open(map, marker);
			});
			markers.push(marker);
		}
		else {
			alert("An error occured when processing this request");
		}
	});
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
