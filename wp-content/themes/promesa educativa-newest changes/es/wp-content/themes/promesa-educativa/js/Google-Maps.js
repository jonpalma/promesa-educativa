var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	if($('#googleMap').length != 0) {
		if( $('#googleMap').attr('position') == 'promesa-educativa' ) {
			var $lat = 28.649947,
				$long = -106.070903,
				$title = 'Promesa Educativa';
		}

		var map_canvas = document.getElementById('googleMap');

		var map_options = {
			center: new google.maps.LatLng($lat, $long),
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			draggable: !("ontouchend" in document)
		};

		map = new google.maps.Map(map_canvas, map_options);

		var markerChihuahua = new google.maps.Marker({
			position: new google.maps.LatLng($lat, $long),
			map: map,
			title: $title
		});
	} else {
		var map_canvas = document.getElementById('Map');

		var map_options = {
			center: new google.maps.LatLng(28.588184, -106.063499),
			zoom: 10,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			draggable: !("ontouchend" in document)
		};

		map = new google.maps.Map(map_canvas, map_options);

		var markerQuinta = new google.maps.Marker({
			position: new google.maps.LatLng(28.726954, -106.099135),
			map: map,
			title: 'Quinta Carolina',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.726954)+','+String(-106.099135)
		});
		google.maps.event.addListener(markerQuinta, 'click', function() {
			window.open(this.url,'_blank');
		});

		var markerCentroRiberas = new google.maps.Marker({
			position: new google.maps.LatLng(28.7686001,-106.1604862),
			map: map,
			title: 'Centro Riberas',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.7686001)+','+String(-106.1604862)
		});
		google.maps.event.addListener(markerCentroRiberas, 'click', function() {
			window.open(this.url,'_blank');
		});

		var markerCampesina = new google.maps.Marker({
			position: new google.maps.LatLng(28.617077, -106.099155),
			map: map,
			title: 'Campesina',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.617077)+','+String(-106.099155)
		});
		google.maps.event.addListener(markerCampesina, 'click', function() {
			window.open(this.url,'_blank');
		});

		var markerVillaJuarez = new google.maps.Marker({
			position: new google.maps.LatLng(28.608712, -106.010777),
			map: map,
			title: 'Villa Juarez',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.608712)+','+String(-106.010777)
		});
		google.maps.event.addListener(markerVillaJuarez, 'click', function() {
			window.open(this.url,'_blank');
		});

		var markerCCE = new google.maps.Marker({
			position: new google.maps.LatLng(28.5990372,-106.0948566),
			map: map,
			title: 'CCE',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.5990372)+','+String(-106.0948566)
		});
		google.maps.event.addListener(markerCCE, 'click', function() {
			window.open(this.url,'_blank');
		});

		var markerNoria = new google.maps.Marker({
			position: new google.maps.LatLng(28.365000, -106.189723),
			map: map,
			title: 'La Noria',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.365000)+','+String(-106.189723)
		});
		google.maps.event.addListener(markerNoria, 'click', function() {
			window.open(this.url,'_blank');
		});

		var markerSanRafael = new google.maps.Marker({
			position: new google.maps.LatLng(28.6295403,-106.0497969),
			map: map,
			title: 'San Rafael',
			url: 'http://maps.google.com/maps?q=loc:'+String(28.6295403)+','+String(-106.0497969)
		});
		google.maps.event.addListener(markerSanRafael, 'click', function() {
			window.open(this.url,'_blank');
		});
	}
}