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

    /* Add category and tag support to pages */
    function hfsi_cat_tag_pages() {
      register_taxonomy_for_object_type('category', 'page');
	    register_taxonomy_for_object_type('post_tag', 'page');
    }
    add_action('init', 'hfsi_cat_tag_pages');
    // ensure all tags are included in queries
    function hfsi_tags_support_query($wp_query) {
      if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
    }
    add_action('pre_get_posts', 'hfsi_tags_support_query');

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
    /*
		add_theme_support( 'custom-background', apply_filters( 'hfsi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
    ) ) );
    */

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

    remove_theme_support( 'colors' );
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
  wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/style.css',array('bootstrap'),'1.0','all');
  wp_enqueue_style( 'learnpress', get_template_directory_uri() . '/css/custom.css',array('theme'),'1.0','all');
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

/**
 * Register and load Bootstrap CDN to WP Editor
 */
function hfsi_style_to_wp_editor() {
	add_editor_style( get_template_directory_uri() . '/css/bootstrap.css' );
	add_editor_style( get_template_directory_uri() . '/css/style.css' );
	add_editor_style( get_template_directory_uri() . '/css/custom.css' );
	add_editor_style( get_template_directory_uri() . '/css/tinymce.css' );
}
add_action( 'admin_init', 'hfsi_style_to_wp_editor' );

/*Remove WordPress menu from admin bar*/
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );


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


// function to display number of posts.
function hfsi_getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      $count = 0;
  }
  return $count;
}

// function to count views.
function hfsi_setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 1;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, $count);
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}

/* Excerpt */
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function hfsi_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'hfsi_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function hfsi_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'hfsi_excerpt_more' );

/* Custom pagination */
function hfsi_display_pagination() {

  global $wp_query;

  $big = 999999999; // need an unlikely integer

  $pages = paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          'type'  => 'array',
          'prev_text'    => sprintf( '<i></i> %1$s','<i class="fa fa-angle-double-left"></i>' ),
          'next_text'    => sprintf( '%1$s <i></i>','<i class="fa fa-angle-double-right"></i>' ),

      ) );
      if( is_array( $pages ) ) {
          $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
          $current = $wp_query->query_vars['page'];
          echo ' <nav aria-label="navigation"><ul class="pagination justify-content-center">';
          foreach ( $pages as $page ) {
                  echo '<li class="page-item';
                  if( strip_tags($page) == $paged)
                    echo ' active';
                  echo '">'.str_replace( "page-numbers", 'page-link', $page ).'</li>';
          }
         echo '</ul></nav>';
          }
  }

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 *
 */
function hfsi_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <label class="screen-reader-text" for="s">' . __( 'Recherche:' ) . '</label>
    <div class="d-flex justify-content-between">
      <input class="flex-grow"
        type="text"
        name="s"
        value="'.get_search_query().'"
        placeholder="'.esc_attr_x( 'votre recherche …', 'placeholder' ).'"
        style="flex-grow: 1;padding:4px 8px;border:none;">
      <button class="btn my-2 my-sm-0 text-success" type="submit" name="searchsubmit" id="searchsubmit" ><i class="fa fa-search"></i></button>
    </div>


    </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'hfsi_search_form' );

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
 * Theme customizer.
 *
 * Custom option for our theme (category to use for carousel, copyright text, and so on)
 */
require get_template_directory() . '/inc/theme-customizer.php';

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

/**
 * Options pages.
 *
 * The place where we add custom and advanced theme parameters
 */
require get_template_directory() . '/inc/options-page.php';

/**
 * Customize login page.
 *
 */
require get_template_directory() . '/inc/template-login.php';


/**
 * Customize tinyMCE button.
 *
 */
require get_template_directory() . '/inc/tinymce.php';




