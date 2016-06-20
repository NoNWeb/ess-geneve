<?php

/*

@package Ess-geneve
  ==========================
    THEME SUPPORT FUNCTIONS
  ==========================
*/

/* Ess-geneve features */
function ess_activate_features(){

  /* Add featured images to posts */
  add_theme_support('post-thumbnails');

  /* Activate Nav Menu Option */
  register_nav_menu('primary', 'Menu Principal');
  register_nav_menu('secondary', 'Menu du footer');

  /* Add Excerpts to pages */
  add_post_type_support('page', 'excerpt');

}
add_action('after_setup_theme', 'ess_activate_features');


/* Ess-geneve excerpt limit for all activities */
function get_activities_excerpt(){
  $excerpt = get_the_content();
  $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, 100);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
  $excerpt = $excerpt.'<br><div class="inscr_detail"><a href="'.$permalink.'">Details</a> - <a href="#">Inscription</a></div>';
  return $excerpt;
}
