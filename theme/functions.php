<?php
/**
 * hfsi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hfsi
 */

if ( ! function_exists( 'hfsi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hfsi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hfsi, use a find and replace
		 * to change 'hfsi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hfsi', get_template_directory() . '/languages' );

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

    update_option('thumbnail_size_w', 285); /* internal max-width of col-3 */
		update_option('small_size_w', 350); /* internal max-width of col-4 */
		update_option('medium_size_w', 730); /* internal max-width of col-8 */
    update_option('large_size_w', 1110); /* internal max-width of col-12 */


		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
    ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-top' => esc_html__( 'Menu du haut (Réseaux sociaux)', 'hfsi' ),
			'menu-banner' => esc_html__( 'Menu général (catégories)', 'hfsi' ),
			'menu-primary-left' => esc_html__( 'Menu primaire de gauche', 'hfsi' ),
			'menu-primary-right' => esc_html__( 'Menu primaire de droite', 'hfsi' ),
			'menu-bottom' => esc_html__( 'Menu du bas', 'hfsi' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hfsi_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hfsi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hfsi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hfsi_content_width', 1100 );
}
add_action( 'after_setup_theme', 'hfsi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/* @todo change widget as a bootstrap card */
function hfsi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hfsi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hfsi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hfsi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hfsi_scripts() {
  /* Styles */
	wp_enqueue_style( 'hfsi-style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css',false,'4.0','all');
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style.css',array('bootstrap'),'1.0','all');
  wp_enqueue_style( 'cdn_font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'cdn_animated-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css');
  /* Scripts */
	wp_enqueue_script( 'jquery', get_theme_file_uri( '/js/jquery.min.js' ), false, '3.3.1', true );
	wp_enqueue_script( 'popper', get_theme_file_uri( '/js/popper.min.js' ), false, '3.3.1', true );
  wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), false, '3.3.1', true );
  /* For better user experience */
  wp_enqueue_script( 'hfsi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'hfsi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hfsi_scripts' );




if ( ! function_exists( 'hfsi_post_date' ) ) {
	function b4st_post_date() {
		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> <time class="updated" datetime="%3$s">(updated %4$s)</time>';
			}

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				get_the_date(),
				esc_attr( get_the_modified_date( 'c' ) ),
				get_the_modified_date()
			);

			echo $time_string;
		}
	}
}

if ( ! function_exists('hfsi_excerpt_more') ) {
	function hfsi_excerpt_more() {
		return '&hellip;</p><p><a class="btn btn-success" href="'. get_permalink() . '">' . __('Continuer à lire', 'hfsi') . ' <i class="fas fa-arrow-right"></i>' . '</a></p>';
	}
}
add_filter('excerpt_more', 'hfsi_excerpt_more');

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
 * Custom bootstrap menu and walker.
 */
require get_template_directory() . '/inc/bootstrap-menu.php';

/**
 * Custom menu fields and walker.
 *
 * Need more information like menu description
 * Each Menu Item has a configuration arrow on the right side of the Menu Item title,
 * that when clicked opens the configuration box.
 * Click the arrow a second time closed the configuration box.
 * If you don't see Link Target, CSS Classes, Link Relationship (XFN), and Description,
 * then under Screen Options make sure those boxes are checked to expose them here.
 */
require get_template_directory() . '/inc/custom-menu-fields.php';



