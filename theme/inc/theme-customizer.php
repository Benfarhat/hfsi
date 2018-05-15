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

    $wp_customize->add_setting( 'starter_new_setting_name' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'category_carousel', array(
        'label' => __( 'Select category for carousel' ),
        'description' => esc_html__( 'Choose a section' ),
        'section' => 'starter_new_section_name',
        'settings' => 'starter_new_setting_name',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type' => 'select',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => get_categories_select()
    )
  );

}

function get_categories_select() {
  $teh_cats = get_categories();
  $results;

  $count = count($teh_cats);
  for ($i=0; $i < $count; $i++) {
    if (isset($teh_cats[$i]))
      $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
    else
      $count++;
  }
  return $results;
}


add_action( 'customize_register', 'hfsi_full_customize_register');
