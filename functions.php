<?php
/**
 * Wholegrain Australia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wholegrain_Australia
 */

if ( ! function_exists( 'wholegrainaustralia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	 // Excerpt Function for Listed posts
	 function wholegrainoz_excerpt($length) {
		 return 20;
	 }
	 add_filter('excerpt_length', 'wholegrainoz_excerpt', 999);
	 // End Excerpt Function




	function wholegrainaustralia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Wholegrain Australia, use a find and replace
		 * to change 'wholegrainaustralia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wholegrainaustralia', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in the top bar. One for the Home Page and one for the Blog Page.

		function register_my_menus() {
  		register_nav_menus(
    		array(
		      'home-menu' => __( 'Home Menu' ),
		      'blog-menu' => __( 'Blog Menu' )
    		)
  		);
		}
		add_action( 'init', 'register_my_menus' );

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wholegrainaustralia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wholegrainaustralia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wholegrainaustralia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wholegrainaustralia_content_width', 1000 );
}
add_action( 'after_setup_theme', 'wholegrainaustralia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wholegrainaustralia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wholegrainaustralia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wholegrainaustralia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wholegrainaustralia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wholegrainaustralia_scripts() {
	// wp_enqueue_style( 'wholegrainaustralia-style', get_stylesheet_uri() );

	wp_enqueue_style('gfonts', '//fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700');

	wp_enqueue_style('foundation-styles', get_template_directory_uri() . '/assets/css/app.css' );

	wp_enqueue_script('jquery');

	// wp_enqueue_script( 'wholegrainaustralia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wholegrainaustralia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('foundation-js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '20151215', true );

	wp_enqueue_script('what-input', get_template_directory_uri() . '/js/what-input.min.js', array(), '20151215', true );

	wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wholegrainaustralia_scripts' );

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

/* Add Login, Logout or Register to Blog Menu */
function add_login_logout_register_menu( $items, $args ) {
if ( $args->theme_location != 'blog-menu' ) {
return $items;
}
if ( is_user_logged_in() ) {
$items .= '<li><a href="' . wp_logout_url() . '">' . __( 'Log Out' ) . '</a></li>';
} else {
$items .= '<li><a href="' . wp_login_url() . '">' . __( 'Login' ) . '</a></li>';
$items .= '<li><a href="' . wp_registration_url() . '">' . __( 'Register' ) . '</a></li>';
}
return $items;
}

add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );
/* End Add Login, Logout or Register to Blog Menu */






