<?php get_header(); ?>


  <!-- Navigation -->
  <!-- <header> -->
  <?php include_once( ESS_INC_DIRECTORY . '/parts/front-navigation-fr.php' ); ?>
  <!-- </header> -->
  <!-- /Navigation -->

  <!-- Slider -->
  <div class="slotholder-slider">
    <?php putRevSlider('slider_fr_fullscreen', 'homepage'); ?>
  </div>
  <!-- /Slider -->

  <!-- Container -->
    <!-- Activites -->
    <!-- <div class="row"> -->
    <section class="row" id="nos_activites">
      <div class="small-6 large-centered columns">
        <h1>Nos Activites</h1>
        <hr>
        <p class="introduction">
          Skieur, snowboardeur, petits et grands, débutant ou expert? <br>Venez partager avec nous la passion de la glisse et de la montagne!
        </p>
      </div>

      <!-- <hr> -->

      <div class="activites row">
        
        <?php
          $args = array( 'post_type' => 'activites', 'post_per_page' => 5 );
          $loop = new WP_Query( $args );
          if ( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
              <div class="box small-12 medium-2">
                <a href="#">
                  <?php the_post_thumbnail('array(220, 330)'); ?>
                </a>
                <span><?php the_title(); ?></span>
                <p>
                  <?php the_excerpt(); ?>
                </p>
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
    </section>
    <!-- </div> -->

    <section id="partenaires" class="row">
      <ul class="expanded row">
        <?php
          $args = array( 'post_type' => 'partenaires' );
          $loop = new WP_Query( $args );
          if ( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
              <li>
                <?php the_post_thumbnail(array(120, 120)); ?>
              </li>
            <?php endwhile;
          endif;
        ?>
      </ul>
    </section>

    <!-- /Activites -->
    <!-- Partners -->

    <!-- /Partners -->
  <!-- /Container -->

<?php get_footer(); ?>
