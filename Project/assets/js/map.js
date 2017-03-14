function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
	center: {lat: 59.443137, lng: 24.756124},
	zoom: 12,
	styles:
	[
	{
		"featureType": "all",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "on"
			}
		]
	},
	{
		"featureType": "all",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "all",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#ffffff"
			},
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "all",
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"color": "#000000"
			},
			{
				"lightness": 13
			},
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "all",
		"elementType": "labels.icon",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "administrative",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#000000"
			}
		]
	},
	{
		"featureType": "administrative",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#144b53"
			},
			{
				"lightness": 14
			},
			{
				"weight": 1.4
			}
		]
	},
	{
		"featureType": "landscape",
		"elementType": "all",
		"stylers": [
			{
				"color": "#08304b"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#0c4152"
			},
			{
				"lightness": 5
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#000000"
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#0b434f"
			},
			{
				"lightness": 25
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "labels.text",
		"stylers": [
			{
				"visibility": "simplified"
			},
			{
				"color": "#edbb55"
			}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#000000"
			}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#0b3d51"
			},
			{
				"lightness": 16
			}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "labels.text",
		"stylers": [
			{
				"visibility": "simplified"
			},
			{
				"color": "#edbb55"
			}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#000000"
			}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "labels.text",
		"stylers": [
			{
				"visibility": "simplified"
			},
			{
				"color": "#edbb55"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "all",
		"stylers": [
			{
				"color": "#146474"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "all",
		"stylers": [
			{
				"color": "#021019"
			}
		]
	}
]
  });  

	  	var iconLocation = {
			path: "M-10,0a10,10 0 1,0 20,0a10,10 0 1,0 -20,0",
			fillColor: '#27d2f4',
			fillOpacity: .6,
			anchor: new google.maps.Point(0,0),
			strokeWeight: 0,
			scale: 1
		}
		var iconTarget = {
			path: "M-10,0a10,10 0 1,0 20,0a10,10 0 1,0 -20,0",
			fillColor: '#f49726',
			fillOpacity: .6,
			anchor: new google.maps.Point(0,0),
			strokeWeight: 0,
			scale: 1
		}

  if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(function(position) {
		var currentPos = {
		lat: position.coords.latitude,
		lng: position.coords.longitude
	  	};
		var currentLocation = new google.maps.Marker({ 
			map: map,
			position: currentPos,
			icon: iconLocation,
			draggable: false,
			shadow: null,
			zIndex: 999
		});
	  	map.setCenter(pos);
	}); 
  }
	var targetPos = {
		lat: 59.446322,
		lng: 24.753576
	  	};
	var target = new google.maps.Marker({ 
		map: map,
		position: targetPos,
		icon: iconTarget,
		fillColor: '#f49726',
		draggable: false,
		shadow: null,
		zIndex: 999
	});
}