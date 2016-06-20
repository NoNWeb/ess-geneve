<?php get_header(); ?>


  <!-- Navigation -->
  <!-- <header> -->
  <?php include_once( ESS_INC_DIRECTORY . '/parts/front-navigation-fr.php' ); ?>
  <!-- </header> -->
  <!-- /Navigation -->

  <!-- Slider -->
  <div class="slotholder-slider">
    <?php //putRevSlider('slider_fr_fullscreen', 'homepage'); ?>
  </div>
  <!-- /Slider -->

  <!-- Container -->
    <!-- Activites -->
    <!-- <div class="row"> -->
  <div class="grid grid-pad">
    <section class="grid grid-pad" id="nos_activites">
      <div class="col-1-3"></div>

      <div class="col-1-3">
        <div class="content">
          <h1>Nos Activites</h1>
          <hr>
          <p class="introduction">
            Skieur, snowboardeur, petits et grands, débutant ou expert? <br>Venez partager avec nous la passion de la glisse et de la montagne!
          </p>
        </div>
      </div>

      <div class="col-1-3"></div>


      <ul class="grid grid-pad">

        <?php
          $args = array( 'post_type' => 'activites', 'post_per_page' => 5 );
          $loop = new WP_Query( $args );
          if ( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
              <li class="box col-1-5">
                <div class="content">
                  <a href="#">
                    <?php the_post_thumbnail(); ?>
                  </a>
                  <h4><a href="#"><?php the_title(); ?></a></h4>
                  <span>
                    <?php echo get_activities_excerpt(); ?>
                  </span>
                </div>
              </li>
            <?php endwhile;
          endif;
        ?>
      </ul>
    </section>
    <!-- </div> -->

    <section id="partenaires" class="col-1-1">
      <ul class="grid grid-pad">
        <?php
          $args = array( 'post_type' => 'partenaires' );
          $loop = new WP_Query( $args );
          if ( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
              <div class="content">
                <li class="col-1-4">
                  <?php the_post_thumbnail(array(120, 120)); ?>
                </li>
              </div>
            <?php endwhile;
          endif;
        ?>
      </ul>
    </section>
  </div>
    <!-- /Activites -->
    <!-- Partners -->

    <!-- /Partners -->
  <!-- /Container -->

<?php get_footer(); ?>
