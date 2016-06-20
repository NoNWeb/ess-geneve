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
  // wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '3.0.3', 'all' );
  wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '4.5.0', 'all' );
  wp_enqueue_style('hamburgers', get_template_directory_uri() . '/css/hamburgers.css', array(), '1.0.0', 'all' );
  // wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
  // wp_enqueue_style('animsition', get_template_directory_uri() . '/css/animsition.min.css', array(), '1.0.0', 'all' );
  // wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.0.0', 'all' );
  // wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all' );
  wp_enqueue_style('ess', get_template_directory_uri() . '/css/ess.css', array(), '1.0.0', 'all' );

  /* JavaScript */
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '2.2.2', true);
  wp_enqueue_script('jquery');
  // wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '6.2.1', true );
  // wp_enqueue_script('fastclick', get_template_directory_uri() . '/js/fastclick.js', array('jquery'), '1.0.0', true );
  // wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true );
  // wp_enqueue_script('overlay-menu', get_template_directory_uri() . '/js/overlay-menu.js', array('jquery'), '1.0.0', true );
  // wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/js/jquery.ajaxchimp.js', array('jquery'), '1.0.0', true );
  // wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '1.0.0', true );
  // wp_enqueue_script('ajax-form', get_template_directory_uri() . '/js/ajax-form.js', array('jquery'), '1.0.0', true );
  // wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '6.2.1', true );
  wp_enqueue_script('ess', get_template_directory_uri() . '/js/ess.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'ess_load_scripts');
