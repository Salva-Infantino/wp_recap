<?php

/*
Plugin Name: Mes favoris
Author: Salva
Version, 1.0.0
*/

session_start();

function required_enqueues () {
  wp_enqueue_style('favoris-style',WP_PLUGIN_URL . '/my-favorites/favorites-style.css');
  wp_enqueue_script('favoris-script',WP_PLUGIN_URL . '/my-favorites/favorites-script.js','','',true);
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css');
}
add_action('wp_enqueue_scripts', 'required_enqueues');

function create_link($atts) {
  $atts = shortcode_atts(array(
    "id_produits" => ""
  ), $atts, 'favorite_link');

  $id = $atts['id_produits'];
  $texte = (in_array($id, $_SESSION['favorites'])) ? "Retirer des favoris <i class='fas fa-trash'></i>" : "Ajouter aux favoris" ;
  return '<span class="favorites link"><a href="'.get_bloginfo('url').'/?favorite='.$id.'">'.$texte.'</a></span>';
}
add_shortcode("favorite_link", "create_link");

// list favoris
function favorites_list() {
  if ( count($_SESSION['favorites']) > 0 ) :
  $args = array(
    "post_type" => "produits",
    "post__in" => $_SESSION['favorites']
  );
  $list_produits = new WP_Query($args);
  $texte = '<div class="favorites list">';
  $texte .= "<h2>Vos favoris</h2>";
  $texte .=  "<ul class='liste-favorites'>";
  while($list_produits->have_posts()) : $list_produits->the_post();
    $texte .= '<li class="liste-favorites-item"><a href="'.get_the_permalink().'">'.get_the_title().'</a> <a href="'.get_bloginfo('url').'/?favorite='.get_the_ID().'" class="trash"><i class="fas fa-trash"></i></a></li>';
  endwhile;
  $texte .= '</ul></div>';
  return $texte;
  else : return;
endif;
}
add_shortcode("favorites_list", "favorites_list");
//

//session_destroy();
if( isset($_GET['favorite'])) :
  $id = $_GET['favorite'];
  if (in_array($id, $_SESSION['favorites'])) :
    $key = array_search($id, $_SESSION['favorites']);
    unset($_SESSION['favorites'][$key]);
  else:
    $_SESSION['favorites'][] = $id;
  endif;
    header("location:".$_SERVER['HTTP_REFERER']);
    exit;
endif;

?>