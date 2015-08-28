<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hooch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="navigation" role="banner">
	  <div class="navigation-wrapper">  
	  			
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if(get_theme_mod('site_logo')) {
				echo '<img src="'. get_theme_mod('site_logo') . '" alt="'.get_bloginfo( 'name' ).'">';
			} else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
			<?php } ?>
		</a>
				
	    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
	    <nav role="navigation">

	      <?php 
		      $menu_defaults = 	array( 	
		      	'theme_location' => 'primary',
				'container'       => '',
				'menu_id'         => 'js-navigation-menu',
				'menu_class'      => 'navigation-menu show',  	 		
		      );

		      	if (has_nav_menu('primary')) {
			       wp_nav_menu($menu_defaults);
			    } 
	      ?>
	    </nav>
	    <div class="navigation-tools">
	      <div class="search-bar">
	      	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
				<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php _e( 'Search', 'hooch' ); ?>" />
				<button type="submit">
	            <img src="<?php bloginfo('template_url'); ?>/images/search-icon.png" alt="Search Icon">
	          </button>
			</form>
	      </div>
	    </div>
	  </div>
	</header>


	<div id="content" class="site-content">



