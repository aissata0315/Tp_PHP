<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Neurons
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if(is_singular() && pings_open()) { ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#sitemain">
	<?php _e( 'Skip to content', 'neurons' ); ?>
</a>
<?php if(get_theme_mod('address-txt') || get_theme_mod('phone-txt') || get_theme_mod('email-txt') != '' || get_theme_mod('time-txt')) { ?>
<div class="top-header">
	<div class="container">
    	<?php if(get_theme_mod('address-txt') != '') { ?>
    		<div class="top-head-box">
            		<div class="top-head-box-icon">
                    	<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                    </div><!-- top-head-box-icon -->
                    <div class="top-head-box-text">
                    	<?php echo esc_html(get_theme_mod('address-txt')); ?>
                    </div><!-- top-head-box-text -->
            </div><!-- top-head-box -->
        <?php } ?>
        <?php if(get_theme_mod('email-txt') != '') { ?>
    		<div class="top-head-box">
            		<div class="top-head-box-icon">
                    	<i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                    </div><!-- top-head-box-icon -->
                    <div class="top-head-box-text">
                    	<a href="<?php echo esc_url('mailto:'.sanitize_email(get_theme_mod('email-txt'))); ?>"><?php echo sanitize_email(get_theme_mod('email-txt')); ?></a>
                    </div><!-- top-head-box-text -->
            </div><!-- top-head-box -->
        <?php } ?>
        <?php if(get_theme_mod('phone-txt') != '') { ?>
    		<div class="top-head-box">
            		<div class="top-head-box-icon">
                    	<i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    </div><!-- top-head-box-icon -->
                    <div class="top-head-box-text">
                    	<?php echo esc_html(get_theme_mod('phone-txt')); ?>
                    </div><!-- top-head-box-text -->
            </div><!-- top-head-box -->
        <?php } ?>
        <?php if(get_theme_mod('time-txt') != '') { ?>
    		<div class="top-head-box">
            		<div class="top-head-box-icon">
                    	<i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                    </div><!-- top-head-box-icon -->
                    <div class="top-head-box-text">
                    	<?php echo esc_html(get_theme_mod('time-txt')); ?>
                    </div><!-- top-head-box-text -->
            </div><!-- top-head-box -->
        <?php } ?>
    </div><!-- container -->
</div><!-- top header --> 
<?php } ?>


<div id="header">
	<div class="header-inner container">
      <div class="logo">
       <?php neurons_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo esc_html($description); ?></p>
					<?php endif; ?>
    </div><!-- .logo -->                 
    
    <div class="header_right">     
    	<?php if(get_theme_mod('button-txt') != '') { ?>   		              
            	<div class="header-btn">
                	<a href="<?php echo esc_url(get_theme_mod('button-link')); ?>" class="main-button"><?php echo esc_html(get_theme_mod('button-txt')); ?></a>
                </div><!-- header btn -->
        <?php } ?>
    </div><!--header_right--><div class="clear"></div>  
</div><!-- .header-inner--><div class="clear"></div>  
<div id="navigation">
				<div class="container">
                    <div class="toggle">
                            <a class="toggleMenu" href="#"><?php esc_html_e('Menu','neurons'); ?></a>
                    </div><!-- toggle --> 	
                    <nav id="main-navigation" class="site-navigation primary-navigation sitenav" role="navigation">					
                            <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>	
                    </nav><!-- navigation -->
   			 </div><!-- container -->
</div><!-- navigation --><div class="clear"></div>
</div><!-- #header -->