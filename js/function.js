var map;
var initialize;
var zoom;
    if (window.matchMedia("(min-width: 1280px)").matches)
    {
        zoom = 15; // Ecran
    }
    else if (window.matchMedia("(min-width: 769px)").matches)
    {
        zoom = 14; // Tablette
    }
    else
    {
        zoom = 13; // Mobile
    }

initialize = function(){
  var latLng = new google.maps.LatLng(43.600362,7.105526); // Correspond au coordonnées de Lille
  var myOptions = {
    zoom      : zoom,
    center    : latLng,
    mapTypeId : google.maps.MapTypeId.SATELLITE, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    draggable: false,
    scrollwheel: false,
    maxZoom   : 20
  };
 
  map      = new google.maps.Map(document.getElementById('map'), myOptions);
   var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
    title    : "Lille"
    //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par défaut
  });
};
 
initialize();