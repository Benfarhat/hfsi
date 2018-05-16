<?php

/* @see: https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
* @see: https://github.com/WordPress/WordPress/blob/master/wp-includes/class-wp-customize-control.php
*/
/*
* Panel  > Section > Control > Setting
*/
/*
Title	ID	Priority (Order)
Site Title & Tagline	title_tagline	20
Colors	colors	40
Header Image	header_image	60
Background Image	background_image	80
Menus (Panel)	nav_menus	100
Widgets (Panel)	widgets	110
Static Front Page	static_front_page	120
default		160
Additional CSS	custom_css	200
*/


function hfsi_full_customize_register( $wp_customize )
{
    $wp_customize->add_section( 'hfsi_interface_section' , array(
        'title'    => __( 'Interface Title', 'starter' ),
        'priority' => 30
    ) );
    $wp_customize->add_section( 'hfsi_carousel_section' , array(
        'title'    => __( 'Carousel / Diaporama', 'starter' ),
        'priority' => 35
    ) );
    $wp_customize->add_section( 'hfsi_footer_section' , array(
        'title'    => __( 'Footer / Bas de page', 'starter' ),
        'priority' => 180
    ) );
    $wp_customize->add_section( 'hfsi_webservice_section' , array(
        'title'    => __( 'Webservice', 'starter' ),
        'priority' => 200
    ) );

    // Title
    $wp_customize->add_setting( 'organization_title' , array(
      'default' => '',
      'transport' => 'postMessage', // Values are refresh and postMessage
    ) );

    $wp_customize->add_control( 'organization_title', array(
      'label' => __( 'Title of organisation', 'hfsi' ),
      'description' => esc_html__( 'Website title will be used as default' ),
      'section'  => 'hfsi_interface_section',
      'settings' => 'organization_title',
      'priority' => 2, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'style' => 'border: 1px solid #ddd',
         'placeholder' => __( 'Enter title...' ),
      ),
    ) );

    // Subtitle
    $wp_customize->add_setting( 'organization_subtitle' , array(
      'default' => '',
      'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'organization_subtitle', array(
      'label' => __( 'Subtitle of organisation', 'hfsi' ),
      'description' => esc_html__( 'Website description will be used as default' ),
      'section'  => 'hfsi_interface_section',
      'settings' => 'organization_subtitle',
      'priority' => 3, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'style' => 'border: 1px solid #ddd',
         'placeholder' => __( 'Enter subtitle...' ),
      ),
    ) );


    // Banner title
    $wp_customize->add_setting( 'organization_banner_title' , array(
      'default' => '',
      'transport' => 'refresh', // Values are refresh and postMessage
    ) );

    $wp_customize->add_control( 'organization_banner_title', array(
      'label' => __( 'Banner title', 'hfsi' ),
      'description' => esc_html__( 'Website title will be used as default' ),
      'section'  => 'hfsi_interface_section',
      'settings' => 'organization_banner_title',
      'priority' => 4, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'style' => 'border: 1px solid #ddd',
         'placeholder' => __( 'Enter banner title...' ),
      ),
    ) );

    // banner subtitle
    $wp_customize->add_setting( 'organization_banner_subtitle' , array(
      'default' => '',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'organization_banner_subtitle', array(
      'label' => __( 'Banner subtitle', 'hfsi' ),
      'description' => esc_html__( 'Website description will be used as default' ),
      'section'  => 'hfsi_interface_section',
      'settings' => 'organization_banner_subtitle',
      'priority' => 5, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'style' => 'border: 1px solid #ddd',
         'placeholder' => __( 'Enter banner subtitle...' ),
      ),
    ) );

    // banner slogan
    $wp_customize->add_setting( 'organization_banner_slogan' , array(
      'default' => '',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'organization_banner_slogan', array(
      'label' => __( 'Subtitle of organisation', 'hfsi' ),
      'description' => esc_html__( 'Banner Slogan' ),
      'section'  => 'hfsi_interface_section',
      'settings' => 'organization_banner_slogan',
      'priority' => 6, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'style' => 'border: 1px solid #ddd',
         'placeholder' => __( 'Enter banner slogan subtitle...' ),
      ),
    ) );



    // Enable Carousel
    $wp_customize->add_setting( 'enable_category_carousel' , array(
        'default' => 0,
        'sanitize_callback' => 'hfsi_chkbox_sanitization',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'enable_category_carousel', array(
          'label' => __( 'Enable carousel', 'hfsi' ),
          'description' => esc_html__( 'Enable or disable carousel' ),
          'section'  => 'hfsi_carousel_section',
          'settings' => 'enable_category_carousel',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type'=> 'checkbox',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      )
    );

  // Number of elements for carousel
    $wp_customize->add_setting( 'num_category_carousel' , array(
        'default'   => 5,
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'num_category_carousel', array(
        'label' => __( 'How many elements you want to display' ),
        'description' => esc_html__( 'Choose a number' ),
        'section' => 'hfsi_carousel_section',
        'settings' => 'num_category_carousel',
        'priority' => 15,
        'type' => 'select',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => array(
          '2' => '2',
          '3' => '3',
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
        )
    )
  );

  // Category selection for carousel
    $wp_customize->add_setting( 'category_carousel' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'category_carousel', array(
        'label' => __( 'Select category for carousel' ),
        'description' => esc_html__( 'Choose your category' ),
        'section' => 'hfsi_carousel_section',
        'settings' => 'category_carousel',
        'priority' => 20,
        'type' => 'select',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => hfsi_get_categories_select()
    )
  );

    // Footer section
    // @see: https://wptheming.com/2015/02/page-select-customizer/
    // Left footer
    $wp_customize->add_setting( 'left_footer_content' , array(
      'default' => '',
      'sanitize_callback' => 'hfsi_sanitize_dropdown_pages',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'left_footer_content', array(
          'label' => __( 'Left footer content', 'hfsi' ),
          'description' => esc_html__( 'Choose a page' ),
          'section'  => 'hfsi_footer_section',
          'settings' => 'left_footer_content',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'dropdown-pages',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      )
    );

    // Middle footer
    $wp_customize->add_setting( 'middle_footer_content' , array(
      'default' => '',
      'sanitize_callback' => 'hfsi_sanitize_dropdown_pages',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'middle_footer_content', array(
          'label' => __( 'Middle footer content', 'hfsi' ),
          'description' => esc_html__( 'Choose a page' ),
          'section'  => 'hfsi_footer_section',
          'settings' => 'middle_footer_content',
          'priority' => 15, // Optional. Order priority to load the control. Default: 10
          'type' => 'dropdown-pages',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      )
    );

    // Right footer
    $wp_customize->add_setting( 'right_footer_content' , array(
      'default' => '',
      'sanitize_callback' => 'hfsi_sanitize_dropdown_pages',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'right_footer_content', array(
          'label' => __( 'Right footer content', 'hfsi' ),
          'description' => esc_html__( 'Choose a page' ),
          'section'  => 'hfsi_footer_section',
          'settings' => 'right_footer_content',
          'priority' => 20, // Optional. Order priority to load the control. Default: 10
          'type' => 'dropdown-pages',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      )
    );


    // Webservice section


    $wp_customize->add_setting( 'enable_webservice' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'enable_webservice', array(
          'label' => __( 'Enable Webservice', 'hfsi' ),
          'description' => esc_html__( 'Enable or disable webservice' ),
          'section'  => 'hfsi_webservice_section',
          'settings' => 'enable_webservice',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type'=> 'checkbox',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      )
    );


  // Remove unused section
  // @see: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/remove_section
  $wp_customize->remove_section( 'colors' );
  $wp_customize->remove_section( 'background_image' );
  $wp_customize->remove_section( 'static_front_page' );
  $wp_customize->remove_section( 'custom_css' );

}

function hfsi_get_categories_select() {
  $__categories = get_categories();
  $results;

  $count = count($__categories);
  for ($i=0; $i < $count; $i++) {
    if (isset($__categories[$i]))
      $results[$__categories[$i]->slug] = $__categories[$i]->name;
    else
      $count++;
  }
  return $results;
}

function hfsi_chkbox_sanitization( $input ) {
  if ( true === $input ) {
     return 1;
  } else {
     return 0;
  }
}

function hfsi_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );

  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

add_action( 'customize_register', 'hfsi_full_customize_register');
