<?php
/**
 * Meridian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Meridian
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

define('ASSETS', get_stylesheet_directory_uri() . '/src/assets');

require_once "app/Models/TeachersPostType.php";
new TeachersPostType;
require_once "app/Models/ReviewsPostType.php";
new ReviewsPostType;
require_once "app/Models/FAQPostType.php";
new FAQPostType;
require_once "app/Models/SubjectTaxonomy.php";
new SubjectTaxonomy;
require_once "app/Services/Shortcodes.php";
new Shortcodes;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function meridian_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Meridian, use a find and replace
		* to change 'meridian' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'meridian', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'meridian' ),
			'menu-2' => esc_html__( 'Secondary', 'meridian' ),
			'menu-3' => esc_html__( 'Third', 'meridian' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'meridian_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	
}
add_action( 'after_setup_theme', 'meridian_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function meridian_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'meridian_content_width', 640 );
}
add_action( 'after_setup_theme', 'meridian_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function meridian_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'meridian' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'meridian' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'meridian_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function meridian_scripts() {
	//wp_enqueue_script( 'bootstrap', ASSETS . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_style( 'meridian-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'meridian-style', 'rtl', 'replace' );
	wp_enqueue_script( 'jquery', ASSETS . '/js/jquery-3.6.1.min.js', array(), '', true );
	wp_enqueue_script( 'slick-js', ASSETS . '/js/slick.min.js', array(), '', true );

	wp_enqueue_style( 'slick-css', ASSETS . '/css/slick.css' );
	wp_enqueue_style( 'font-awesome', ASSETS . '/css/fontawesome.min.css' );
	wp_enqueue_style( 'slick-css-theme', ASSETS . '/css/slick-theme.css' );

	wp_enqueue_script( 'meridian-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'sl-scripts', get_stylesheet_directory_uri() . '/dist/output.js', [], '1.0.0' );
	if( is_page_template( 'blog.php' ) || is_single( ) ) {
		wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
	}
	//wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
	//wp_enqueue_style( 'google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap', false );

	error_log(print_r(ICL_LANGUAGE_CODE,true));

	if( ICL_LANGUAGE_CODE == 'fa' || ICL_LANGUAGE_CODE == 'ar' || ICL_LANGUAGE_CODE == 'ar-eg' || ICL_LANGUAGE_CODE == 'ar-jo' ) {
		
		wp_enqueue_style( 'rtl-styles', ASSETS . '/css/rtl.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'meridian_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Define path and URL to the ACF plugin.
define( 'ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
include_once( ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'acf_settings_url');
function acf_settings_url( $url ) {
    return ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
//add_filter('acf/settings/show_admin', 'acf_settings_show_admin');
function acf_settings_show_admin( $show_admin ) {
    return false;
}

function add_page_category() {
	register_taxonomy_for_object_type('category', 'page'); 
}
add_action( 'init', 'add_page_category' );

// set up ACF settings page
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Theme Header Settings',
    //     'menu_title'    => 'Header',
    //     'parent_slug'   => 'theme-general-settings',
    // ));
    
    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Theme Footer Settings',
    //     'menu_title'    => 'Footer',
    //     'parent_slug'   => 'theme-general-settings',
    // ));
    
}

function home_page_menu_link( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_link' );
