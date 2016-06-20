<?php get_header(); ?>

<div class="container">

	<?php while ( have_posts() ) : the_post();

		get_template_part( 'inc/format/content', 'page' );

	endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?> 
