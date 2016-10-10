/**
 * Created by andy on 10/10/2016.
 */
$(function(){
    if ($('#map').length > 0) {
        google.maps.event.addDomListener(window, 'load', initialiseMap(false));
    }
});

function initialiseMap(sellers){

    var isDraggable = $(document).width() > 480 ? true : false;

    var styles = [
        {
            stylers: [
                //{ hue: "#59A7A5" }
            ]
        }
    ];

    // What it needs to be
    // Name, Lat, Lng, Image, desc, isSeller

    var locations = [
        ['Everton Park 1', '53.422560', '-2.973891', true],
        ['Everton Park 2', '53.423017', '-2.971793', false],
        ['Everton Park 3', '53.422579', '-2.970114', true],
        ['Everton Park 4', '53.421169', '-2.971364', true],
        ['Everton Park 5', '53.418836', '-2.971103', false],
        ['Everton Park 6', '53.417293', '-2.969578', false],
        ['Everton Park 7', '53.414697', '-2.968231', false],
        ['Islington 1', '53.412014', '-2.966279', false],
        ['Islington 2', '53.411985', '-2.969658', false]
    ];

    var latlng = calculateCenter(locations);

    var mapOptions = {
        draggable: isDraggable,
        scrollwheel: false,
        center: { lat: latlng[0], lng: latlng[1]},
        zoom: 14,
        styles: styles
    };

    var map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

    var myLatlng = new google.maps.LatLng(53.405620,-2.876202);

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {

        if(sellers == true){
            if(locations[i][3] == true){
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    title: locations[i][0]
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        } else {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                title: locations[i][0]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

}

$(document).on('click', '#sellers', function(e){
    e.preventDefault();
    initialiseMap(true);
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