<?php
/**
 * The header for our theme
 * @package goit
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
 <meta charset="<?php bloginfo('charset'); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="format-detection" content="telephone=no">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <div id="page">
  <header class="site-header">
   <nav id="topmenu" role="navigation">
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'top-menu')); ?>
   </nav>
   <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img alt=""
      src="<?php bloginfo('template_url'); ?>/images/logo.png"></a></h1>
   <div id="search-container">
    <div class="search-box">
     <?php get_search_form(); ?>
    </div>
   </div>
  </header>