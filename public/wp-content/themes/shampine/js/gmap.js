jQuery(document).ready(function($) {
   // appends ability to use $ in jQuery

// Google Maps custom 
$(document).ready(function(){
  $("#map").gMap({ 
    controls: false,
    scrollwheel: false,
    draggable: false,
    latitude: 34.04525,
    longitude: -118.25159,
    zoom: 12, 
  });
});

});