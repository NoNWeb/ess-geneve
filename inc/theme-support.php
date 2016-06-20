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
