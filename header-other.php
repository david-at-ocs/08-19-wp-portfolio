<?php
/**
 * The header for our theme.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/post.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,900' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <!-- <?php bloginfo( 'description' ); ?> -->

  <header>
    <p class="float_left"><a href="<?php echo get_stylesheet_directory_uri(); ?>">portfolio for david gardetti</a></p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hamburger.png" class="hamburger float_right" id="hamburger">
    <div style="clear: both"></div>
    
    <!-- <ul class="header__navigation">
      <li><a href="about.html">about</a></li>
      <li><a href="contact.html">contact</a></li>
      <li><a href="web.html">web</a></li>
      <li><a href="photos.html">photography</a></li>
      <li><a href="screen.html">screen printing</a></li>
    </ul> -->
      
    <!-- <?php wp_nav_menu( array( 'items_wrap' => '<ul class="sf-menu">%3$s' ) ); ?> -->
    
    <?php wp_nav_menu(array(
      'theme_location'  => 'primary',
      'container'       => false,
      'menu_class'      => 'header__navigation',
      'menu_id'         => 'menu',
      'before'          => '',
      'after'           => '',
      'depth'           => 0,
      'walker'          => ''
    )); ?>
  </header>
    
    <div class="container">