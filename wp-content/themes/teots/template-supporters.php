<?php
/**
 * Template Name: Supporters Template
 *
 * @package teots
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div id="map_canvas" style="height: 354px; width:713px;"></div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1fiJz0MgmxyHASkZk25GEr5pztoNsrrA&v=3.exp&sensor=false&callback=initialize"></script>
            <script>
            var directionsDisplay,
                directionsService,
                map;

            function initialize() {
              var directionsService = new google.maps.DirectionsService();
              directionsDisplay = new google.maps.DirectionsRenderer();
              var chicago = new google.maps.LatLng(41.850033, -87.6500523);
              var mapOptions = { zoom:7, mapTypeId: google.maps.MapTypeId.ROADMAP, center: chicago }
              map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
              directionsDisplay.setMap(map);
            }

            </script>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();