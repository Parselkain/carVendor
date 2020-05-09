<?php

/* Dependecies
-------------------------------------------------------- */

//nav walker bootstrap4
require_once('assets/bs4navwalker.php');

// content width
if ( ! isset( $content_width ) ) $content_width = 1920;

/* Setup Theme
-------------------------------------------------------- */

if(! function_exists('cv_setup_theme') ) {

  function cv_setup_theme(){

      // add support titles
      add_theme_support("title-tag");

      // add theme feed links
      add_theme_support( 'automatic-feed-links' );

      // enable featured image
      add_theme_support("post-thumbnails");

      // create custom size images
      add_image_size('cv_big', 1920, 800, true);
      add_image_size('cv_quad', 600, 600, true);
      add_image_size('cv_single', 800, 500, true);

      // create custom menus - MAIN
      register_nav_menus(array(
        'header' => esc_html__('Header','cv'),
      ));
      // create custom menus - HELP
      register_nav_menus(array(
        'social-help' => esc_html__('social-help','cv'),
      ));

      //load theme languages
      load_theme_textdomain( 'cv', get_template_directory().'/languages');

  }

}

add_action('after_setup_theme', 'cv_setup_theme');


/* Register Sidebars
-------------------------------------------------------- */

if(! function_exists('cv_sidebars') ) {

  function cv_sidebars(){
    register_sidebar(array(
      'name' => esc_html__('Primary','cv'),
      'id' => 'primary',
      'description' => esc_html__('Main Sidebar','cv'),
      'before_title' => '<h3>' ,
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget my-5 %2$s clearfix">',
      'after_widget' => '</div>',

      )
    );
  }

}

add_action('widgets_init','cv_sidebars');


/* Include javascript files
-------------------------------------------------------- */

if(! function_exists('cv_scripts') ) {

  function cv_scripts(){
    
    //wp_enqueue_script('cv-jquery-js', get_template_directory_uri() .'/js/jquery-3.5.1.min.js', array('jquery'),null ,false );
    wp_enqueue_script('cv-popper-js', get_template_directory_uri() .'/js/popper.min.js', array('jquery'),null ,true );
    wp_enqueue_script('cv-bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'),null ,true );
    wp_enqueue_script('cv-scripts-js', get_template_directory_uri() .'/js/scripts.js', array('jquery'),null ,true );

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

  }

}

add_action('wp_enqueue_scripts', 'cv_scripts');


/* Include css files
-------------------------------------------------------- */

if(! function_exists('cv_styles') ) {

  function cv_styles(){

    wp_enqueue_style('cv-bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style('cv-hamburger-css', get_template_directory_uri() .'/css/hamburgers.css');
    wp_enqueue_style('cv-style-default-css', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('cv-font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,700');
    wp_enqueue_style('cv-font', '//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');


  }

}

add_action('wp_enqueue_scripts', 'cv_styles');

/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = '') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}
fa_custom_setup_kit('https://kit.fontawesome.com/ab1cfb145d.js');

/* Add class to button submit
-------------------------------------------------------- */

function wpdocs_comment_form_defaults( $defaults ) {
  $defaults['class_submit'] = 'btn btn-primary btn-lg';
  return $defaults;
}

add_filter( 'comment_form_defaults', 'wpdocs_comment_form_defaults' );


/* Add class to button submit
-------------------------------------------------------- */

add_action( 'body_class', 'add_class_bg_trasp_body');

function add_class_bg_trasp_body($classes){
  if(has_post_thumbnail() && is_page()){
    array_push($classes,'navbar-transparent');
  } else if(is_front_page()){
    array_push($classes,'navbar-transparent');
  }

  return $classes;

}




















?>
