<style>
.map_canvas {
    height: 300px !important;
}
#infowindow-content .title {
	font-weight: bold;
}
#infowindow-content {
	display: none;
}
#map #infowindow-content {
	display: inline;
}
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.location') }}</h3>
</div>
<div class="row with-forms margin-bottom-30">
	<div class="col-md-9">
		<h5>{{ __('messages.address') }}</h5>
		<input class="" type="text" name="meta[listing_address]" id="listing_address" placeholder="{{ __('messages.address') }}" value="" />
	</div>
	<div class="col-md-3">
		<h5>{{ __('messages.apt_suite') }} (Optional)  </h5>
		<input class="" type="text" name="meta[aptSuit]" id="aptSuit" placeholder="Ex. #123" value="" />
	</div>
</div>
<div class="row with-forms margin-bottom-30">
	<div class="col-md-4">
		<h5>{{ __('messages.city') }} </h5>
		<input class="" type="text" name="meta[city]" id="city" placeholder="{{ __('messages.city') }}" value="" />
	</div>
	<div class="col-md-4">
		<h5>{{ __('messages.state') }} </h5>
		<input class="" type="text" name="meta[state]" id="countyState" placeholder="{{ __('messages.state') }}" value="" />
	</div>
	<div class="col-md-4">
		<h5>{{ __('messages.zip') }}</h5>
		<input class="" type="text" name="meta[zip]" id="zip" placeholder="{{ __('messages.zip') }}" value="" />
	</div>
</div>
<div class="row with-forms margin-bottom-30">
	<div class="col-md-6">
		<h5>Area </h5>
		<input class="" type="text" name="meta[neighborhood]" id="city" placeholder="Area" value="" />
	</div>
	<div class="col-md-6">
		<h5>{{ __('messages.country') }} </h5>
		<input class="" type="text" name="meta[country]" id="listing_country" placeholder="{{ __('messages.country') }}" value="" />
	</div>
</div>
<div class="row with-forms margin-bottom-30">
	<div class="col-md-12" >
		<h5>Drag and drop the pin on map to find exact location </h5>
		 <div class="map_canvas" data-add-lat="25.761681" data-add-long="-80.191788" id="map">
		 </div>
		 <div id="infowindow-content">
			  <img src="" width="16" height="16" id="place-icon">
			  <span id="place-name"  class="title"></span><br>
			  <span id="place-address"></span>
		</div>
	</div>
</div>
<div class="row with-forms margin-bottom-50">
	<div class="col-md-4">
		<h5>Latitude </h5>
		<input class="" type="text" name="meta[lat]" id="lat" placeholder="Latitude" value="" />
	</div>
	<div class="col-md-4">
		<h5> Longitude</h5>
		<input class="" type="text" name="meta[lng]" id="lng" placeholder="Longitude" value="" />
	</div>
	<div class="col-md-4">
		<h5> Find the address on the map </h5>
		<button type="button" class="button" id="find_address">Find Address</button>
	</div>
</div>

<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
<button type="button" onclick="Next_Tab(6);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<button type="button" onclick="Previous_Tab(4);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>

<script>
function initMap(){
	var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: $("#map").data('add-lat'), lng: $("#map").data('add-long')},
          zoom: 13
        });
	var input = document.getElementById('listing_address');
	var geocoder = new google.maps.Geocoder;
	 var infowindow = new google.maps.InfoWindow();
	var autocomplete = new google.maps.places.Autocomplete(input);
	var infowindowContent = document.getElementById('infowindow-content');
	document.getElementById('find_address').addEventListener('click', function() {
          geocodeLatLng(geocoder, map, infowindow,infowindowContent);
    });
	// Bind the map's bounds (viewport) property to the autocomplete object,
	// so that the autocomplete requests use the current map bounds for the
	// bounds option in the request.
	autocomplete.bindTo('bounds', map);	
	// Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

       
        
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29),
		  draggable:true,
		  animation: google.maps.Animation.DROP,
        });
		
		google.maps.event.addListener(marker, 'dragend', function() 
		{
			geocodePosition(marker.getPosition());
		});

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
		  console.log(place);
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }
			//console.log(place.geometry.location.lat());
			//console.log(place.geometry.location.lng());
			document.getElementById('lat').value = place.geometry.location.lat();
			document.getElementById('lng').value = place.geometry.location.lng();
          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          //infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
		  document.getElementById('city').value = place.address_components[1].long_name;
		  document.getElementById('countyState').value = place.address_components[2].long_name;
		  document.getElementById('listing_country').value = place.address_components[3].long_name;
		  document.getElementById('zip').value = "";
        });
		
}
/*******for drag marker*********/
function geocodePosition(pos) 
{
   geocoder = new google.maps.Geocoder();
   geocoder.geocode
    ({
        latLng: pos
    }, 
        function(results, status) 
        {
            if (status == google.maps.GeocoderStatus.OK) 
            {
                console.log(results);
				document.getElementById('lat').value = results[0].geometry.location.lat();
			    document.getElementById('lng').value = results[0].geometry.location.lng();
            } 
            else 
            {
				console.log(error);
            }
        }
    );
}
/*******find address button click*********/
function geocodeLatLng(geocoder, map, infowindow,infowindowContent) {
	var lat = document.getElementById('lat').value;
	var lng = document.getElementById('lng').value;
	var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
	geocoder.geocode({'location': latlng}, function(results, status) {
	  if (status === 'OK') {
		if (results[0]) {
		  //map.setZoom(11);
		  var marker = new google.maps.Marker({
			  map: map,
			  anchorPoint: new google.maps.Point(0, -29)
			});
		  console.log(results);
		  //infowindow.setContent(results[0].formatted_address);
		  if (results[0].geometry.viewport) {
            map.fitBounds(results[0].geometry.viewport);
          } else {
            map.setCenter(results[0].geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(results[0].geometry.location);
          marker.setVisible(true);
		  //infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = results[0].formatted_address;
		  var address = '';
          if (results[0].address_components) {
            address = [
              (results[0].address_components[0] && results[0].address_components[0].short_name || ''),
              (results[0].address_components[1] && results[0].address_components[1].short_name || ''),
              (results[0].address_components[2] && results[0].address_components[2].short_name || '')
            ].join(' ');
          }
          //infowindowContent.children['place-address'].textContent = address;
		  document.getElementById('listing_address').value = address;
		  document.getElementById('city').value = results[0].address_components[4].long_name;
		  document.getElementById('countyState').value = results[0].address_components[5].long_name;
		  document.getElementById('listing_country').value = ( results[0].address_components[6] && results[0].address_components[6].long_name || '');
		  document.getElementById('zip').value = ( results[0].address_components[7] && results[0].address_components[7].long_name || '');
          infowindow.open(map, marker);
		} else {
		  window.alert('No results found');
		}
	  } else {
		window.alert('Geocoder failed due to: ' + status);
	  }
	});
 }
</script>
<script type='text/javascript' src='https://maps-api-ssl.google.com/maps/api/js?libraries=places&#038;language=en_US&#038;key=AIzaSyAFuQRfezm1WrOejFHVhy74NbmX8pkCQqw&#038&callback=initMap'></script>

