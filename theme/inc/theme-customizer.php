<?php

// @see: https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
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
    $wp_customize->add_section( 'starter_new_section_name' , array(
        'title'    => __( 'Interface', 'starter' ),
        'priority' => 30
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
        'section'  => 'starter_new_section_name',
        'settings' => 'enable_category_carousel',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
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
        'section' => 'starter_new_section_name',
        'settings' => 'category_carousel',
        'priority' => 15, // Optional. Order priority to load the control. Default: 10
        'type' => 'select',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => hfsi_get_categories_select()
    )
  );

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

add_action( 'customize_register', 'hfsi_full_customize_register');
