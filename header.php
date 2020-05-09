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
     <?php
       wp_nav_menu([
         'menu'            => 'social-help',
         'theme_location'  => 'social-help',
         'container'       => '',
         'container_id'    => '',
         'container_class' => '',
         'menu_id'         => false,
         'menu_class'      => 'navbar-social-help',
         'depth'           => 2,
         'fallback_cb'     => 'bs4navwalker::fallback',
         'walker'          => new bs4navwalker()
       ]);
       ?>
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
      <span class="user-circle animate-fast"><i class="fas fa-user-circle"></i></span>
      <div class="login-popup animate-fast">
        <div class="triangle-popup-login"></div>
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1"><?php esc_html_e( 'Email address', 'cv' ); ?></label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php esc_html_e( 'example@email.com', 'cv' ); ?>" autocomplete="off">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><?php esc_html_e( 'Password', 'cv' ); ?></label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="new-password" >
            
          </div>
          <div class="form-check my-3">
            <label class="cb-remember">
              <input type="checkbox" name="privacy" value="<?= isset($privacy)?$privacy:"1" ?>" <?= isset($privacy)?'checked':'' ?> />
              <span class="checkmark"></span><?php esc_html_e( 'Remember me', 'cv' ); ?></a>
            </label>
          </div>
          <div class="container-button-logpopup">
            <button type="submit" class="btn btn-primary button-orange"><p><?php esc_html_e( 'LOGIN', 'cv' ); ?></p></button>
            <a href="#"><?php esc_html_e( 'Sign Up', 'cv' ); ?></a>
          </div>
        </form>
      </div>
      <a class="nav-utility-button animate-fast button-orange" href="#">
        <div class="nav-utility-button-icon">
          <span><i class="fas fa-car"></i></span>
          <span><i class="fas fa-plus-circle"></i></span>
        </div>
        <p><?php esc_html_e( 'Add your item', 'cv' ); ?></p>
        
        
      </a>
    </div>

   </div>
 </nav>
