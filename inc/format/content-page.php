<article id="page-<?php the_ID(); ?>" <?php post_class( 'page'); ?>>

		<div class="head-title">
			<h2 class="page-title"><span><?php the_title();?></span></h2>
		</div>
		<?php the_content(); ?>

		<?php wp_link_pages(); ?>


</article><!-- #page<?php the_ID(); ?> --> 
