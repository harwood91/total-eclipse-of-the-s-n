/**
 * Created by andy on 10/10/2016.
 */
$(function(){
    if ($('#map').length > 0) {
        var supporters = $('#json').data('json');
        google.maps.event.addDomListener(window, 'load', initialiseMap(supporters, true, true, true, true));
    }
});

function initialiseMap(supporters, shops, collectionPoints, garages, councils){

    var isDraggable = $(document).width() > 480 ? true : false;

    var styles = [
        {
            stylers: [
                //{ hue: "#59A7A5" }
            ]
        }
    ];

    var mapOptions = {
        draggable: isDraggable,
        scrollwheel: false,
        center: { lat: 53.408326, lng: -2.991396},
        zoom: 12,
        styles: styles
    };

    var map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for(i = 0; i < supporters.length; i++) {

        if(supporters[i].isShop == shops && shops == true){
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(supporters[i].lat, supporters[i].lng),
              map: map,
              title: supporters[i].name
          });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                  infowindow.setContent(supporters[i].name);
                  infowindow.open(map, marker);
              }
          })(marker, i));
        } else if(supporters[i].isCollectionPoint == collectionPoints && collectionPoints == true){
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(supporters[i].lat, supporters[i].lng),
                map: map,
                title: supporters[i].name
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(supporters[i].name);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        } else if(supporters[i].isGarage == garages && garages == true){
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(supporters[i].lat, supporters[i].lng),
                map: map,
                title: supporters[i].name
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(supporters[i].name);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        } else if(supporters[i].isCouncil == councils && councils == true){
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(supporters[i].lat, supporters[i].lng),
                map: map,
                title: supporters[i].name
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(supporters[i].name);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

}

$(document).on('click', '#sellers', function(e){
    e.preventDefault();
    var supporters = $('#json').data('json');
    initialiseMap(supporters, true, true, true, true);
});

$(document).on('change', '.mapCheckbox', function(e){
    e.preventDefault();
    var supporters = $('#json').data('json');
    var shopping = false, collection = false, garage = false, council = false;

    if(document.getElementById('checkbox-shopping').checked){
      shopping = true;
    }

    if(document.getElementById('checkbox-collection').checked){
      collection = true;
    }

    if(document.getElementById('checkbox-garage').checked){
      garage = true;
    }

    if(document.getElementById('checkbox-council').checked){
      council = true;
    }

    initialiseMap(supporters, shopping, collection, garage, council);
});

function calculateCenter(locations){

    var lat = 0;
    var lng = 0;

    for (i = 0; i < locations.length; i++) {
        lat = lat + parseFloat(locations[i][1]);
        lng = lng + parseFloat(locations[i][2]);
    }

    var totalLat = (lat / locations.length);
    var totalLng = (lng / locations.length);

    latlng = [totalLat, totalLng];

    return latlng;

}
