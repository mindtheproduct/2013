var myLatlng = new google.maps.LatLng(51.511480, -0.101933);

function initialize() {

  var locations = [
    ['GRANGE ST PAULS', 51.513002, -0.100287, 3],
    ['CROWNE PLAZA CITY', 51.513939, -0.104456, 2],
    ['MERCURE BANKSIDE', 51.505675, -0.099893, 1]
  ];
  var styles = [
  {
      "stylers": [
        { "invert_lightness": true },
        { "hue": "#00aeef" }
      ]
    }
  ];

  var mapOptions = {
    zoom: 15,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: styles,
    disableDefaultUI: true,
    mapTypeControl: false,
    scrollwheel: true
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  marker = new RichMarker({
    position: myLatlng,
    map: map,
    draggable: false,
    shadow: false,
    anchor: RichMarkerPosition.TOP_LEFT,
    content: '<div class="conference-location"><a href="https://maps.google.co.uk/maps?ie=UTF8&cid=12291073452166057833&q=The+Mermaid+Conference+%26+Events+Centre&iwloc=A&gl=GB&hl=en" target="_blank"><h4>Mermaid Conference Center</h4><h5>PUDDLE DOCK, <br />LONDON, BLACKFRIARS<br />EC4V 3DB</h5></a></div>'
  });

  var marker, i;

  for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3]),
      map: map,
      icon: '/assets/images/marker_'+ i +'.png'
    });
  }

 setTimeout(function() { 
    offsetCenter(myLatlng,0,100);
  }, 200);

  function offsetCenter(latlng,offsetx,offsety) {

    var scale = Math.pow(2, map.getZoom());

    var nw = new google.maps.LatLng(
      map.getBounds().getNorthEast().lat(),
      map.getBounds().getSouthWest().lng()
    );

    var worldCoordinateCenter = map.getProjection().fromLatLngToPoint(latlng);
    var pixelOffset = new google.maps.Point((offsetx/scale) || 0,(offsety/scale) ||0);

    var worldCoordinateNewCenter = new google.maps.Point(
        worldCoordinateCenter.x - pixelOffset.x,
        worldCoordinateCenter.y + pixelOffset.y
    );

    var newCenter = map.getProjection().fromPointToLatLng(worldCoordinateNewCenter);

    map.setCenter(newCenter);

  }

  var center;
  function calculateCenter() {
    center = map.getCenter();
  }
  google.maps.event.addDomListener(map, 'idle', function() {
    calculateCenter();
  });
  google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(center);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);