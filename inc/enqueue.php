<?php

/*

@package Ess-geneve
  ==========================
    ADMIN ENQUEUE FUNCTION
  ==========================
*/

function ess_load_admin_scripts($hook){

  if('toplevel_page_ess' != $hook){
    return;
  }

  wp_register_style('ess_admin', get_template_directory_uri() . '/css/ess.admin.css',array(), '1.0.0', 'all');
  wp_enqueue_style('ess_admin');

  wp_enqueue_media();

  wp_register_script('ess-admin-script', get_template_directory_uri() . '/js/ess.admin.js', array('jquery'), '1.0.0.', true);
  wp_enqueue_script('ess-admin-script');

}
add_action('admin_enqueue_scripts', 'ess_load_admin_scripts');


/*

  ==========================
    FRONT-END ENQUEUE FUNCTION
  ==========================
*/

function ess_load_scripts(){
  /* CSS */
  wp_enqueue_style('foundation', get_template_directory_uri() . '/css/simplegrid.css', array(), '1.0.0', 'all' );
  // wp_enqueue_style('hamburgers', get_template_directory_uri() . '/css/hamburgers.css', array(), '1.0.0', 'all' );
  // wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), '1.11.4', 'all' );
  wp_enqueue_style('ess-css', get_template_directory_uri() . '/css/ess.css', array(), '1.0.0', 'all' );
  /* JavaScript */
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '2.2.2', true);
  wp_enqueue_script('jquery');

  // wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.11.4', true );
  wp_enqueue_script('ess-js', get_template_directory_uri() . '/js/ess.js', array(), '1.0.0', true );
}


add_action('wp_enqueue_scripts', 'ess_load_scripts');
