<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description');?>">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<nav id="nav-fix-top" class="navbar">
  <div class="container">
    <div class="nav-lan-cur">
      <ul>
        <li>English</li>
        <li>Currency</li>
      </ul>
    </div>
    <div class="push-right nav-social-container">
     <ul class="navbar-social-help">
        <li><a href="#">Help</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="navbar-social-icon">
        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary animate">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-motors-listing-3.svg" alt="logo sito"></a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="bs4navbar">

       <?php
       wp_nav_menu([
         'menu'            => 'header',
         'theme_location'  => 'header',
         'container'       => '',
         'container_id'    => '',
         'container_class' => '',
         'menu_id'         => false,
         'menu_class'      => 'navbar-nav mr-auto animate',
         'depth'           => 2,
         'fallback_cb'     => 'bs4navwalker::fallback',
         'walker'          => new bs4navwalker()
       ]);
       ?>
    </div>
    <div class="nav-utility">
    <i class="fas fa-user-circle"></i>
    </div>

   </div>
 </nav>
