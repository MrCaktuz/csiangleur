/* csiangleur
 *
 * src/sripts/gmap.js - script for the google map
 *
 * Coded by Mucht - Mathieu Claessens
 * started at 29/11/2016
*/

( function() {

    "use strict";

    var $gmap,
        gMap,
        gMarker,
        fInitGMap,
        fAddMarkerFromServer,
        fAddZoneOnMarker;

    fInitGMap = function() {
        gMap = new google.maps.Map( $gmap[ 0 ], {
            "center": new google.maps.LatLng( 50.612932, 5.597396 ),
            "disableDefaultUI": true,
            "scrollwheel": false,
            "zoomControl": true,
            "zoom": 13
        } );
        gMarker = new google.maps.Marker({
          position: {
              lat: 50.612932,
              lng: 5.597396
          },
          map: gMap,
          animation: google.maps.Animation.DROP,
          title: "CSI Angleur"
        });

    };

    $( function() {

        $gmap = $( "#gmap" );

        fInitGMap();

    } );

} )();
