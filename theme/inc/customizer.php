<?php
/**
 * hfsi Theme Customizer
 *
 * @package hfsi
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hfsi_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'organization_title' )->transport = 'postMessage';
	$wp_customize->get_setting( 'organization_subtitle' )->transport = 'postMessage';
	$wp_customize->get_setting( 'organization_banner_title' )->transport = 'postMessage';
	$wp_customize->get_setting( 'organization_banner_subtitle' )->transport = 'postMessage';
	$wp_customize->get_setting( 'organization_banner_slogan' )->transport = 'postMessage';
	$wp_customize->get_setting( 'title_loop_homepage' )->transport = 'postMessage';
	$wp_customize->get_setting( 'webservice_title' )->transport = 'postMessage';
	$wp_customize->get_setting( 'webservice_button_title' )->transport = 'postMessage';
	$wp_customize->get_setting( 'rendezvous_title' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'hfsi_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'hfsi_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'organization_title', array(
			'selector'        => '.organization_title',
			'render_callback' => 'hfsi_customize_partial_organization_title',
		) );
		$wp_customize->selective_refresh->add_partial( 'organization_subtitle', array(
			'selector'        => '.organization_subtitle',
			'render_callback' => 'hfsi_customize_partial_organization_subtitle',
		) );
		$wp_customize->selective_refresh->add_partial( 'organization_banner_title', array(
			'selector'        => '.organization_banner_title',
			'render_callback' => 'hfsi_customize_partial_organization_banner_title',
		) );
		$wp_customize->selective_refresh->add_partial( 'organization_banner_subtitle', array(
			'selector'        => '.organization_banner_subtitle',
			'render_callback' => 'hfsi_customize_partial_organization_banner_subtitle',
		) );
		$wp_customize->selective_refresh->add_partial( 'organization_banner_slogan', array(
			'selector'        => '.organization_banner_slogan',
			'render_callback' => 'hfsi_customize_partial_organization_banner_slogan',
    ) );
		$wp_customize->selective_refresh->add_partial( 'title_carousel', array(
			'selector'        => '.title_carousel',
      'container_inclusive' => false,
			'render_callback' => function() {
        if ( ( get_theme_mod( 'title_carousel' ) ) != '' ) {
          echo get_theme_mod( 'title_carousel' );
        }
      },
      'fallback_refresh' => true
    ) );
		$wp_customize->selective_refresh->add_partial( 'title_loop_homepage', array(
			'selector'        => '.title_loop_homepage',
      'container_inclusive' => false,
			'render_callback' => function() {
        if ( ( get_theme_mod( 'title_loop_homepage' ) ) != '' ) {
          echo get_theme_mod( 'title_loop_homepage' );
        }
      },
      'fallback_refresh' => true
    ) );
		$wp_customize->selective_refresh->add_partial( 'webservice_title', array(
			'selector'        => '.webservice_title',
      'container_inclusive' => false,
			'render_callback' => function() {
        if ( ( get_theme_mod( 'webservice_title' ) ) != '' ) {
          echo get_theme_mod( 'webservice_title' );
        }
      },
      'fallback_refresh' => true
    ) );
    
		$wp_customize->selective_refresh->add_partial( 'webservice_button_title', array(
			'selector'        => '.webservice_button_title',
      'container_inclusive' => false,
			'render_callback' => function() {
        if ( ( get_theme_mod( 'webservice_button_title' ) ) != '' ) {
          echo get_theme_mod( 'webservice_button_title' );
        }
      },
      'fallback_refresh' => true
    ) );
    
		$wp_customize->selective_refresh->add_partial( 'rendezvous_title', array(
			'selector'        => '.rendezvous_title',
      'container_inclusive' => false,
			'render_callback' => function() {
        if ( ( get_theme_mod( 'rendezvous_title' ) ) != '' ) {
          echo get_theme_mod( 'rendezvous_title' );
        }
      },
      'fallback_refresh' => true
    ) );


	}
}
add_action( 'customize_register', 'hfsi_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function hfsi_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function hfsi_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the Organization title.
 *
 * @return void
 */
function hfsi_customize_partial_organization_title() {
  if ( ( get_theme_mod( 'organization_title' ) ) != '' ) {
    $organization_title = get_theme_mod( 'organization_title' );
    echo $organization_title;
  }
}

/**
 * Render the Organization subtitle.
 *
 * @return void
 */
function hfsi_customize_partial_organization_banner_title() {
  if ( ( get_theme_mod( 'organization_banner_title' ) ) != '' ) {
    echo get_theme_mod( 'organization_banner_title' );
  }
}

/**
 * Render the Organization subtitle.
 *
 * @return void
 */
function hfsi_customize_partial_organization_banner_subtitle() {
  if ( ( get_theme_mod( 'organization_banner_subtitle' ) ) != '' ) {
    echo get_theme_mod( 'organization_banner_subtitle' );
  }
}

/**
 * Render the Organization subtitle.
 *
 * @return void
 */
function hfsi_customize_partial_organization_banner_slogan() {
  if ( ( get_theme_mod( 'organization_banner_slogan' ) ) != '' ) {
    echo get_theme_mod( 'organization_banner_slogan' );
  }
}

/**
 * Render the Organization subtitle.
 *
 * @return void
 */
function hfsi_customize_partial_organization_subtitle() {
  if ( ( get_theme_mod( 'organization_subtitle' ) ) != '' ) {
    echo get_theme_mod( 'organization_subtitle' );
  }
}

/**
 * Render the Organization subtitle.
 *
 * @return void
 */
function hfsi_customize_partial_title_loop_homepage() {
  if ( ( get_theme_mod( 'title_loop_homepage' ) ) != '' ) {
    echo get_theme_mod( 'title_loop_homepage' );
  }
}

/*
* We can also smplify like this
*

  $wp_customize->selective_refresh->add_partial( 'social_urls',
    array(
        'selector' => '.social-header',
        'container_inclusive' => false,
        'render_callback' => function() {
          echo mytheme_get_social_media_icons();
        },
        'fallback_refresh' => true
    )
  );

*/

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hfsi_customize_preview_js() {
	wp_enqueue_script( 'hfsi-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'hfsi_customize_preview_js' );
