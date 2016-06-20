<?php

/*

@package Ess-geneve
  ==========================
    ADMIN PAGE
  ==========================
*/

function pmu_add_admin_page(){

  // Generate Ess-geneve Page
  add_menu_page( 'Ess-geneve Theme Options', 'Ess-geneve', 'manage_options', 'ess-geneve-theme', 'ess_func_theme_create_admin_page', get_template_directory_uri() . '/img/ess-geneve-icon.png', 62);

  // Generate Ess-geneve submenu Pages
  add_submenu_page('ess-geneve-theme', 'Ess-geneve Theme Options', 'General', 'manage_options', 'ess-geneve-theme', 'ess_func_theme_create_admin_page');
  add_submenu_page('ess-geneve-theme', 'Ess-geneve Nos Activites', 'Nos activités', 'manage_options', 'edit.php?post_type=activites', NULL);
  add_submenu_page('ess-geneve-theme', 'Ess-geneve Nos Partenaires', 'Partenaires', 'manage_options', 'edit.php?post_type=partenaires', NULL);

}
add_action('admin_menu', 'pmu_add_admin_page');


// Template submenu functions
function ess_func_theme_create_admin_page() {
  // Generation of our admin page
  require_once(get_template_directory() . '/inc/templates/ess-admin-general.php');
}
