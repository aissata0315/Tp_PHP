<?php
/**
 * Neurons functions and definitions
 *
 * @package Neurons
 */

if ( ! function_exists( 'neurons_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function neurons_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'neurons', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('neurons-homepage-thumb',true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'neurons' ),		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'editor-style.css', neurons_font_url() ) );
}
endif; // neurons_setup
add_action( 'after_setup_theme', 'neurons_setup' );


function neurons_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'neurons' ),
		'description'   => __( 'Appears on blog page sidebar', 'neurons' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'neurons_widgets_init' );

function neurons_font_url(){
		$font_url = '';
		
		/* Translators: If there are any character that are
		* not supported by Poppins, translate this to off, do not
		* translate into your own language.
		*/
		$pop = _x('on', 'Poppins font:on or off','neurons');
		
		/* Translators: If there are any character that are
		* not supported by Roboto, translate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on', 'Roboto font:on or off','neurons');
		
		/* Translators: If there are any character that are
		* not supported by Monda, translate this to off, do not
		* translate into your own language.
		*/
		$monda = _x('on', 'Monda font:on or off','neurons');
		
		/* Translators: If there are any character that are
		* not supported by Raleway, translate this to off, do not
		* translate into your own language.
		*/
		$rale = _x('on', 'Raleway font:on or off','neurons');
		
		
		
		if('off' !== $pop || 'off' !== $roboto || 'off' !== $monda || 'off' !== $rale){
			$font_family = array();
			
			if('off' !== $pop){
				$font_family[] = 'Poppins:400,700';
			}
			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:400,700';
			}
			
			if('off' !== $monda){
				$font_family[] = 'Monda:400,700';
			}
			
			if('off' !== $rale){
				$font_family[] = 'Raleway:400,700';
			}
			
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'https://fonts.googleapis.com/css');
		}
		
	return $font_url;
	}

function neurons_scripts() {
	wp_enqueue_style( 'neurons-font', neurons_font_url(), array() );
	wp_enqueue_style( 'neurons-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'neurons-responsive-style', get_template_directory_uri().'/css/theme-responsive.css' );
	wp_enqueue_style( 'nivo-style', get_template_directory_uri().'/css/nivo-slider.css');
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/css/font-awesome.css' );	
	wp_enqueue_script( 'neurons-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20190715', true );
	wp_enqueue_script( 'jquery-nivo-slider-js', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'neurons-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_localize_script( 'neurons-navigation', 'neuronsNavigationScreenReaderText', array() );
}
add_action( 'wp_enqueue_scripts', 'neurons_scripts' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function neurons_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'neurons_front_page_template' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Load customize pro
 */
require_once( trailingslashit( get_template_directory() ) . 'customize-pro/class-customize.php' );
