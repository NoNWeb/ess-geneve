/*
  Template name: Nos activites template
*/

<?php get_header(); ?>

  <?php
  $args = array( 'post_type' => 'activites', 'post_per_page' => 5 );

  if ( has_posts() ):
    while( have_posts() ): the_post(); ?>

    <?php endwhile;
  endif;
  ?>

<?php get_footer(); ?>
