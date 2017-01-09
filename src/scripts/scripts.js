/* csiangleur
 *
 * /src/scripts/scripts.js - main scripts
 *
 * Coded by Mucht - Mathieu Claessens
 * started at 29/11/2016
*/

( function() {

    "use strict";

    var $sectionsCheckBox = document.getElementsByClassName( "mainSection__checkbox" ),
        $toggleLink = document.querySelector( ".slogan__toggleSections" ),
        fToggleSections,
        fResteSections;

    fResteSections = function() {
        for ( var i = 0; i < $sectionsCheckBox.length; i++ ) {
            $sectionsCheckBox[i].checked = false;
        }
    }

    fToggleSections = function( oEvent ) {

        oEvent.preventDefault();
        // $toggleLink.classList.toggle( "slogan__toggleSections--closed" );

        if ( !$toggleLink.classList.contains( "closed" ) ) {

            $toggleLink.classList.add( "closed" );
            $toggleLink.classList.remove( "open" );

            for ( var i = 0; i < $sectionsCheckBox.length; i++ ) {
                $sectionsCheckBox[i].checked = true;
            }

            $toggleLink.innerHTML = "Afficher tout";

        } else {

            $toggleLink.classList.remove( "closed" );
            $toggleLink.classList.add( "open" );

            fResteSections();

            $toggleLink.innerHTML = "Seulement les titres";

        }

    };

    window.addEventListener( "load", function() {
        fResteSections();
        $toggleLink.addEventListener( "click", fToggleSections );
    } );

} )();
