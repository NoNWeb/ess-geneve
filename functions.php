<?php

// Constants
define( 'ESS_INC_VERSION', '2.6.0' );
define( 'ESS_INC_DIRECTORY', get_template_directory().'/inc' );
define( 'ESS_INC_URI', get_template_directory_uri().'/inc' );


// require get_template_directory() . '/inc/constants.php';


// Include files
include_once( ESS_INC_DIRECTORY . '/cleanup.php' );
include_once( ESS_INC_DIRECTORY . '/function-admin.php' );
include_once( ESS_INC_DIRECTORY . '/enqueue.php' );
include_once( ESS_INC_DIRECTORY . '/activites-post-type.php' );
include_once( ESS_INC_DIRECTORY . '/partenaires-post-type.php' );
include_once( ESS_INC_DIRECTORY . '/theme-support.php' );
