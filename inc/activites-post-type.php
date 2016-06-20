<?php

/*

@package Ess-geneve
  ==========================
    THEME ACTIVITES CUSTOM POST TYPES
  ==========================
*/


function ess_nos_activites_post_type(){
  $labels = array(
    'name'  =>  'Activités',
    'singular_name'  =>  'activite',
    // 'add_new'  => 'Ajouter un nouveau cours',
    'all_items'  =>  'Toutes les activités',
    // 'add_new_item'  => 'Ajouter un nouveau cours',
    'edit_item'  =>  'Modifier',
    // 'new_item'  =>  'Nouveau cours',
    // 'view_item'  =>  'Voir un cours',
    'search_item'  =>  'Rechercher une activité',
    'not_found'  =>  'Aucune activité trouvé',
    'not_found_in_trash'  =>  'Aucune activité trouvé',
    // 'parent_item_colon'  => 'Cours parent',
  );
  $args = array(
    'labels'  => $labels,
    'public'  => true,
    'has_archive'  => true,
    'public_queryable'  => true,
    'query_var'  =>  true,
    'rewrite'  =>  true,
    'capability_type'  => 'post',
    'show_in_menu'  => false,
    'hierarchical'  => false,
    'supports'  => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ),
    // 'taxonomies'  => array('category', 'post_tag'),
    'menu_position'  => 65,
    'exclude_from_search'  => false,
  );
  register_post_type('activites', $args);
}
add_action('init', 'ess_nos_activites_post_type');
