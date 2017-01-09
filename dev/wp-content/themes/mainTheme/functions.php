<?php

/*
 *
 * Defines custom poste_types
 *
*/
register_post_type( 'membres', [
    'label' => 'Membres',
    'labels' => [
            'singular_name' => 'Membre',
            'add_new' => 'Ajouter un nouveau membre de l\'équipe'
        ],
    'description' => 'La liste de tous les membres de notre maison médicale.',
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-universal-access',
    'supports' => [ 'title', 'thumbnail' ],
    'has_archive' => true
    ] );

register_post_type( 'fiches', [
    'label' => 'Fiches',
    'labels' => [
            'singular_name' => 'Fiche',
            'add_new' => 'Ajouter une nouvelle fiche info'
        ],
    'description' => 'Fiches informatives détaillant un sujet pour les visiteurs du site.',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'supports' => [ 'title', 'editor' ],
    'has_archive' => true
    ] );

/*
 * Récupérer l'URL des thumbnails
 *
*/
 add_theme_support( 'post-thumbnails' );

/*
 *
 * générate navigaiton
 *
*/

register_nav_menu( 'main-nav', 'Menu principal' );
// register_nav_menu( 'map-nav', 'Menu du plan du site' );

/*
 *
 * générate a custom menu array
 *
*/
function csia_get_menu_id( $location ){
  $locations = get_nav_menu_locations();
  if ( isset( $locations[ $location ] ) ) {
      return $locations[ $location ];
  }
  return false;
}

function csia_is_current( $obj ) {
  global $post;
  return ( $obj -> object_id == $post -> ID );
}

function csia_get_menu_items( $location ) {

  $navItems = [];
  foreach ( wp_get_nav_menu_items( csia_get_menu_id( $location ) ) as $obj) {
      $item = new stdClass();
      $item -> isCurrent = csia_is_current( $obj );
      $item -> url = $obj -> url;
      $item -> label = $obj -> title;
      $item -> icon = $obj -> classes[0];
      array_push( $navItems, $item );
  }
  return $navItems;
}

/*
 *
 * générate an id from section title
 *
*/
function csia_get_id_from_title( $title ){

    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/,/'           =>   '',
        '/-/'           =>   '',
        '/–/'           =>   '', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   '', // Literally a single quote
        '/[“”«»„]/u'    =>   '', // Double quote
        '/ /'           =>   '', // nonbreaking space (equiv. to 0x160)
    );
    $titleUpperCase = ucwords( $title );
    $titleNoSpecialCharacters = preg_replace(array_keys($utf8), array_values($utf8), $titleUpperCase);
    $titleID = lcfirst($titleNoSpecialCharacters);

    return $titleID;
}
