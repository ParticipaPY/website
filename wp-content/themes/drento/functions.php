<?php
/**
 * drento functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package drento
 */

if ( ! function_exists( 'drento_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function drento_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on drento, use a find and replace
	 * to change 'drento' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'drento', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'drento-normal-post', 840, 9999);
	add_image_size( 'drento-little-post', 840, 300, true);
	add_image_size( 'drento-related-box', 1000, 300, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'drento' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'audio', 'video', 'gallery',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'drento_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // drento_setup
add_action( 'after_setup_theme', 'drento_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drento_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'drento_content_width', 740 );
}
add_action( 'after_setup_theme', 'drento_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drento_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'drento' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'drento_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drento_scripts() {
	wp_enqueue_style( 'drento-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css');
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'drento-googlefonts-heading', $protocol .'://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'drento-googlefonts-text', $protocol .'://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700');

	wp_enqueue_script( 'drento-custom', get_template_directory_uri() . '/js/jquery.drento.js', array('jquery', 'jquery'), '1.0', true );
	wp_enqueue_script( 'jquery-nanoscroller', get_template_directory_uri() . '/js/jquery.nanoscroller.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'drento-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'drento-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	global $wp_scripts;
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.6', false );
	$wp_scripts->add_data( 'html5', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'drento_scripts' );

/**
 * Replace Excerpt More
 */
function drento_new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'drento_new_excerpt_more');

 /**
 * Delete font size style from tag cloud widget
 */
function drento_fix_tag_cloud($tag_string){
   return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
}
add_filter('wp_generate_tag_cloud', 'drento_fix_tag_cloud',10,3);

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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
