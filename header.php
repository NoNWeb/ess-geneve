<?php
/**
 * The Footer for Ess-geneve theme.
 *
 * @author		Jean-Paul Mutuyimama
 * @copyright	Copyright (c) Jean-Paul Mutuyimama
 * @link		http://no-n.com
 * @link		http://no-n.com
 * @package 	Theme Ess-geneve WordPress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>

  <!-- START PAGE BODY -->

  <body <?php body_class(); ?> >
