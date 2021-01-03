<?php
/**
 * cms-theme-test-module functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cms-theme-test-module
 */

// if ( ! defined( '_S_VERSION' ) ) {
// 	// Replace the version number of the theme on each release.
// 	define( '_S_VERSION', '1.0.0' );
// }

// if ( ! function_exists( 'cms_theme_test_module_setup' ) ) :
// 	/**
// 	 * Sets up theme defaults and registers support for various WordPress features.
// 	 *
// 	 * Note that this function is hooked into the after_setup_theme hook, which
// 	 * runs before the init hook. The init hook is too late for some features, such
// 	 * as indicating support for post thumbnails.
// 	 */
// 	function cms_theme_test_module_setup() {
// 		/*
// 		 * Make theme available for translation.
// 		 * Translations can be filed in the /languages/ directory.
// 		 * If you're building a theme based on cms-theme-test-module, use a find and replace
// 		 * to change 'cms-theme-test-module' to the name of your theme in all the template files.
// 		 */
// 		load_theme_textdomain( 'cms-theme-test-module', get_template_directory() . '/languages' );

// 		// Add default posts and comments RSS feed links to head.
// 		add_theme_support( 'automatic-feed-links' );

// 		/*
// 		 * Let WordPress manage the document title.
// 		 * By adding theme support, we declare that this theme does not use a
// 		 * hard-coded <title> tag in the document head, and expect WordPress to
// 		 * provide it for us.
// 		 */
// 		add_theme_support( 'title-tag' );

// 		/*
// 		 * Enable support for Post Thumbnails on posts and pages.
// 		 *
// 		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
// 		 */
// 		add_theme_support( 'post-thumbnails' );

// 		// This theme uses wp_nav_menu() in one location.
// 		register_nav_menus(
// 			array(
// 				'menu-1' => esc_html__( 'Primary', 'cms-theme-test-module' ),
// 			)
// 		);

// 		/*
// 		 * Switch default core markup for search form, comment form, and comments
// 		 * to output valid HTML5.
// 		 */
// 		add_theme_support(
// 			'html5',
// 			array(
// 				'search-form',
// 				'comment-form',
// 				'comment-list',
// 				'gallery',
// 				'caption',
// 				'style',
// 				'script',
// 			)
// 		);

// 		// Set up the WordPress core custom background feature.
// 		add_theme_support(
// 			'custom-background',
// 			apply_filters(
// 				'cms_theme_test_module_custom_background_args',
// 				array(
// 					'default-color' => 'ffffff',
// 					'default-image' => '',
// 				)
// 			)
// 		);

// 		// Add theme support for selective refresh for widgets.
// 		add_theme_support( 'customize-selective-refresh-widgets' );

// 		/**
// 		 * Add support for core custom logo.
// 		 *
// 		 * @link https://codex.wordpress.org/Theme_Logo
// 		 */
// 		add_theme_support(
// 			'custom-logo',
// 			array(
// 				'height'      => 250,
// 				'width'       => 250,
// 				'flex-width'  => true,
// 				'flex-height' => true,
// 			)
// 		);
// 	}
// endif;
// add_action( 'after_setup_theme', 'cms_theme_test_module_setup' );

// /**
//  * Set the content width in pixels, based on the theme's design and stylesheet.
//  *
//  * Priority 0 to make it available to lower priority callbacks.
//  *
//  * @global int $content_width
//  */
// function cms_theme_test_module_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'cms_theme_test_module_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'cms_theme_test_module_content_width', 0 );

// /**
//  * Register widget area.
//  *
//  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
//  */
// function cms_theme_test_module_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'cms-theme-test-module' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'cms-theme-test-module' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'cms_theme_test_module_widgets_init' );

// /**
//  * Enqueue scripts and styles.
//  */
// function cms_theme_test_module_scripts() {
// 	wp_enqueue_style( 'cms-theme-test-module-style', get_stylesheet_uri(), array(), _S_VERSION );
// 	wp_style_add_data( 'cms-theme-test-module-style', 'rtl', 'replace' );

// 	wp_enqueue_script( 'cms-theme-test-module-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'cms_theme_test_module_scripts' );

function load_js() {
	wp_enqueue_script( 'jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false,  true);
	wp_enqueue_script('bootstrap');

	wp_register_script('01-js', get_template_directory_uri() . '/js/01.js', 'jquery', false,  true);
	wp_enqueue_script('01-js');
}
add_action( 'wp_enqueue_scripts','load_js');

function load_bootstrap() {
	wp_register_style('bootstrap', get_template_directory_uri() .  '/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style('bootstrap');
}
add_action( 'wp_enqueue_scripts','load_bootstrap');

function eq_less()
{
	wp_enqueue_style('less-style-01', get_stylesheet_directory_uri() . '/template-parts/01/less/01.less', array(), null, 'all');
	wp_enqueue_style('less-style-02', get_stylesheet_directory_uri() . '/template-parts/02/less/02.less', array(), null, 'all');
	wp_enqueue_style('less-style-06', get_stylesheet_directory_uri() . '/template-parts/06/less/06.less', array(), null, 'all');
	wp_enqueue_style('less-style-07', get_stylesheet_directory_uri() . '/template-parts/07/less/07.less', array(), null, 'all');
	wp_enqueue_style('less-style-08', get_stylesheet_directory_uri() . '/template-parts/08/less/08.less', array(), null, 'all');
	wp_enqueue_style('less-style-09', get_stylesheet_directory_uri() . '/template-parts/09/less/09.less', array(), null, 'all');
	wp_enqueue_style('less-style-10', get_stylesheet_directory_uri() . '/template-parts/10/less/10.less', array(), null, 'all');
	wp_enqueue_style('less-style-11', get_stylesheet_directory_uri() . '/template-parts/11/less/11.less', array(), null, 'all');
	wp_enqueue_style('less-style-13-14', get_stylesheet_directory_uri() . '/template-parts/13-14/less/13-14.less', array(), null, 'all');
	wp_enqueue_style('less-style-15', get_stylesheet_directory_uri() . '/template-parts/15/less/15.less', array(), null, 'all');
	wp_enqueue_style('less-style-16', get_stylesheet_directory_uri() . '/template-parts/16/less/16.less', array(), null, 'all');
	wp_enqueue_style('less-style-22', get_stylesheet_directory_uri() . '/template-parts/22/less/22.less', array(), null, 'all');

	//CSS Trang About Us
	wp_enqueue_style('less-style-26', get_stylesheet_directory_uri() . '/template-parts/26/less/26.less', array(), null, 'all');
	wp_enqueue_style('less-style-27', get_stylesheet_directory_uri() . '/template-parts/27/less/27.less', array(), null, 'all');
	wp_enqueue_style('less-style-28', get_stylesheet_directory_uri() . '/template-parts/28/less/28.less', array(), null, 'all');
	wp_enqueue_style('less-style-29', get_stylesheet_directory_uri() . '/template-parts/29/less/29.less', array(), null, 'all');

	wp_enqueue_style('less-style-30', get_stylesheet_directory_uri() . '/template-parts/30/less/30.less', array(), null, 'all');
	wp_enqueue_style('less-style-31-32', get_stylesheet_directory_uri() . '/template-parts/31-32/less/31&32.less', array(), null, 'all');
	wp_enqueue_style('less-style-42', get_stylesheet_directory_uri() . '/template-parts/42/less/42.less', array(), null, 'all');

	//CSS Trang Home 2
	wp_enqueue_style('less-style-44', get_stylesheet_directory_uri() . '/template-parts/44/less/44.less', array(), null, 'all');
	wp_enqueue_style('less-style-50', get_stylesheet_directory_uri() . '/template-parts/50/less/50.less', array(), null, 'all');
	wp_enqueue_style('less-style-69', get_stylesheet_directory_uri() . '/template-parts/69/less/69.less', array(), null, 'all');
	wp_enqueue_style('less-style-70', get_stylesheet_directory_uri() . '/template-parts/70/less/70.less', array(), null, 'all');
	wp_enqueue_style('less-style-71', get_stylesheet_directory_uri() . '/template-parts/71/less/71.less', array(), null, 'all');
	wp_enqueue_style('less-style-72', get_stylesheet_directory_uri() . '/template-parts/72/less/72.less', array(), null, 'all');
	wp_enqueue_style('less-style-73', get_stylesheet_directory_uri() . '/template-parts/73/less/73.less', array(), null, 'all');
	wp_enqueue_style('less-style-74', get_stylesheet_directory_uri() . '/template-parts/74/less/74.less', array(), null, 'all');
	wp_enqueue_style('less-style-75', get_stylesheet_directory_uri() . '/template-parts/75/less/75.less', array(), null, 'all');
	wp_enqueue_style('less-style-76', get_stylesheet_directory_uri() . '/template-parts/76/less/76.less', array(), null, 'all');
	wp_enqueue_style('less-style-77', get_stylesheet_directory_uri() . '/template-parts/77/less/77.less', array(), null, 'all');
	wp_enqueue_style('less-style-78', get_stylesheet_directory_uri() . '/template-parts/78/less/78.less', array(), null, 'all');
	wp_enqueue_style('less-style-79', get_stylesheet_directory_uri() . '/template-parts/79/less/79.less', array(), null, 'all');
	wp_enqueue_style('less-style-80', get_stylesheet_directory_uri() . '/template-parts/80/less/80.less', array(), null, 'all');
	wp_enqueue_style('less-style-81', get_stylesheet_directory_uri() . '/template-parts/81/less/81.less', array(), null, 'all');
	wp_enqueue_style('less-style-83', get_stylesheet_directory_uri() . '/template-parts/83/less/83.less', array(), null, 'all');
	wp_enqueue_style('less-style-97', get_stylesheet_directory_uri() . '/template-parts/97/less/97.less', array(), null, 'all');

	//CSS Trang Services -> All 
	wp_enqueue_style('less-style-33', get_stylesheet_directory_uri() . '/template-parts/33/less/33.less', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'eq_less', 99);

function custom_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', get_template_directory_uri() . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );

function custom_load_fonts() {
    wp_enqueue_style( 'fonts-for-theme', get_template_directory_uri() . '/css/shaka-fonts.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_load_fonts' );

// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }



