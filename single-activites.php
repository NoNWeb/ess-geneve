<?php
/**
 * The template for displaying all single posts and attachments Nos-Activités for Ess-geneve theme.
 *
 * @author		Jean-Paul Mutuyimama
 * @copyright	Copyright (c) Jean-Paul Mutuyimama
 * @link		http://no-n.com
 * @link		http://no-n.com
 * @package 	Theme Ess-geneve WordPress
 */
get_header(); ?>

<?php the_title(); ?><br>

<?php the_content(); ?><br>

<?php the_post_thumbnail('thumbnail'); ?><br>

<?php get_footer(); ?>
