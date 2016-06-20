<?php

/*

@package Ess-geneve
  ==========================
    THEME PARTENAIRES CUSTOM POST TYPES
  ==========================
*/


function ess_partenaires_post_type(){
  $labels = array(
    'name'  =>  'Partenaires',
    'singular_name'  =>  'partenaire',
    'all_items'  =>  'Tous les partenaires',
    'edit_item'  =>  'Modifier'
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
      // 'editor',
      // 'excerpt',
      'thumbnail',
      // 'revisions',
    ),
    // 'taxonomies'  => array('category', 'post_tag'),
    'menu_position'  => 65,
    'exclude_from_search'  => false,
  );
  register_post_type('partenaires', $args);
}
add_action('init', 'ess_partenaires_post_type');
