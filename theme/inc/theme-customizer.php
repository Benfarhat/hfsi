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
        'title'    => __( 'Interface Title', 'hfsi' ),
        'priority' => 30
    ) );
    $wp_customize->add_section( 'hfsi_carousel_section' , array(
        'title'    => __( 'Carousel / Diaporama', 'hfsi' ),
        'priority' => 35
    ) );
    $wp_customize->add_section( 'hfsi_webservice_section' , array(
        'title'    => __( 'Webservice', 'hfsi' ),
        'priority' => 100
    ) );
    $wp_customize->add_section( 'hfsi_webservice_section' , array(
        'title'    => __( 'Webservice', 'hfsi' ),
        'priority' => 100
    ) );
    $wp_customize->add_section( 'hfsi_rendezvous' , array(
        'title'    => __( 'Rendez vous', 'hfsi' ),
        'priority' => 120
    ) );
    $wp_customize->add_section( 'hfsi_footer_section' , array(
        'title'    => __( 'Footer / Bas de page', 'hfsi' ),
        'priority' => 180
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


    // Carousel Title
    $wp_customize->add_setting( 'title_carousel' , array(
      'default' => '',
      'sanitize_callback' => 'hfsi_sanitize_text',
      'transport' => 'postMessage',
  ) );

  $wp_customize->add_control( 'title_carousel', array(
        'label' => __( 'Carousel title', 'hfsi' ),
        'description' => esc_html__( 'Title for your carousel' ),
        'section'  => 'hfsi_carousel_section',
        'settings' => 'title_carousel',
        'priority' => 12, // Optional. Order priority to load the control. Default: 10
        'type'=> 'text',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'input_attrs' => array( // Optional.
           'style' => 'border: 1px solid #ddd',
           'placeholder' => __( 'Enter title for your carousel...' ),
        ),
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

  /* Homepage loop */


    // Carousel Title
    $wp_customize->add_setting( 'title_loop_homepage' , array(
      'default' => '',
      'sanitize_callback' => 'hfsi_sanitize_text',
      'transport' => 'postMessage',
  ) );

  $wp_customize->add_control( 'title_loop_homepage', array(
        'label' => __( 'Homepage loop title', 'hfsi' ),
        'description' => esc_html__( 'Title for your Homepage loop' ),
        'section'  => 'hfsi_homepage_category_loop',
        'settings' => 'title_loop_homepage',
        'priority' => 8, // Optional. Order priority to load the control. Default: 10
        'type'=> 'text',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'input_attrs' => array( // Optional.
           'style' => 'border: 1px solid #ddd',
           'placeholder' => __( 'Enter title for homepage loop...' ),
        ),
    )
  );



  // Number of elements for loop in homepage
  $wp_customize->add_setting( 'num_loop_homepage' , array(
    'default'   => 5,
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'num_loop_homepage', array(
    'label' => __( 'How many elements you want to display' ),
    'description' => esc_html__( 'Choose a number' ),
    'section' => 'hfsi_homepage_category_loop',
    'settings' => 'num_loop_homepage',
    'priority' => 12,
    'type' => 'select',
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'choices' => array(
      '' => 'Selectionner...',
      '0' => '0',
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
      '12' => '12',
      '14' => '14',
      '16' => '16',
      '18' => '18',
      '20' => '20',
      '22' => '22',
      '24' => '24',
    )
)
);


    // Enable sticky homepage
    $wp_customize->add_setting( 'enable_sticky_loop_homepage' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_sticky_loop_homepage', array(
        'label' => __( 'Enable Sticky', 'hfsi' ),
        'description' => esc_html__( 'Enable sticky posts add some extra posts to elements to display' ),
        'section'  => 'hfsi_homepage_category_loop',
        'settings' => 'enable_sticky_loop_homepage',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );

  // Category selection for loop homepage
    $wp_customize->add_setting( 'category_loop_homepage' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'category_loop_homepage', array(
        'label' => __( 'Select category to display in homepage' ),
        'description' => esc_html__( 'Choose your category' ),
        'section' => 'hfsi_homepage_category_loop',
        'settings' => 'category_loop_homepage',
        'priority' => 16,
        'type' => 'select',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => hfsi_get_categories_select()
    )
  );

  /* Webservices section */


    // Enable
    $wp_customize->add_setting( 'enable_webservice' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_webservice', array(
        'label' => __( 'Enable webservice', 'hfsi' ),
        'description' => esc_html__( 'Enable or disable Webservice' ),
        'section'  => 'hfsi_webservice_section',
        'settings' => 'enable_webservice',
        'priority' => 2, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );

  // title

  $wp_customize->add_setting( 'webservice_title' , array(
    'default' => 'Vos résultats de laboratoire',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'webservice_title', array(
    'label' => __( 'Webservice title', 'hfsi' ),
    'description' => esc_html__( 'Title for the webservice section' ),
    'section'  => 'hfsi_webservice_section',
    'settings' => 'webservice_title',
    'priority' => 5, // Optional. Order priority to load the control. Default: 10
    'type' => 'text', // Can be either text, email, url, number, hidden, or date
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'input_attrs' => array( // Optional.
       'style' => 'border: 1px solid #ddd',
       'placeholder' => __( 'Enter webservice title...' ),
    ),
  ) );

  // Protocol
  $wp_customize->add_setting( 'webservice_protocol',
   array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'hfsi_chkbox_sanitization'
   )
);

$wp_customize->add_control( 'webservice_protocol',
   array(
      'label' => __( 'Protocol' ),
      'description' => esc_html__( 'Secure (https) or unsecure access (http)' ),
      'section' => 'hfsi_webservice_section',
      'settings' => 'webservice_protocol',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'radio',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'choices' => array( // Optional.
         '0' => __( 'http://' ),
         '1' => __( 'https://' )
      )
   )
);


/**
 * Sortable repeater custom control.
 * By Anthony Hortin (Maddisondesigns)
 * @see: https://github.com/maddisondesigns
 */
require get_template_directory() . '/inc/custom_control.php';

$wp_customize->add_setting( 'webservice_fields',
   array(
      'default' => '',
      'transport' => 'refresh',
      //'sanitize_callback' => 'hfsi_sanitize_text'
   )
);

$wp_customize->add_control( new Skyrocket_Sortable_Repeater_Custom_Control( $wp_customize, 'webservice_fields',
   array(
      'label' => __( 'Fields for your REST webservices' ),
      'description' => esc_html__( 'Provide your field list.' ),
      'section' => 'hfsi_webservice_section',
      'settings' => 'webservice_fields',
      'button_labels' => array(
         'add' => __( 'Add Field' ), // Optional. Button label for Add button. Default: Add
      )
   )
) );


  // title

  $wp_customize->add_setting( 'webservice_button_title' , array(
    'default' => '',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'webservice_button_title', array(
    'label' => __( "Webservice Submit Button's title", 'hfsi' ),
    'description' => esc_html__( 'Label for the form submit button' ),
    'section'  => 'hfsi_webservice_section',
    'settings' => 'webservice_button_title',
    'priority' => 6, // Optional. Order priority to load the control. Default: 10
    'type' => 'text', // Can be either text, email, url, number, hidden, or date
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'input_attrs' => array( // Optional.
       'style' => 'border: 1px solid #ddd',
       'placeholder' => __( 'Enter webservice submit title...' ),
    ),
  ) );

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

/*
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
*/

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

function hfsi_sanitize_text( $input ) {
  return sanitize_text_field($input);
}

if ( ! function_exists( 'hfsi_url_sanitization' ) ) {
  function hfsi_url_sanitization( $input ) {
    if ( strpos( $input, ',' ) !== false) {
      $input = explode( ',', $input );
    }
    if ( is_array( $input ) ) {
      foreach ($input as $key => $value) {
        $input[$key] = esc_url_raw( $value );
      }
      $input = implode( ',', $input );
    }
    else {
      $input = esc_url_raw( $input );
    }
    return $input;
  }
}

add_action( 'customize_register', 'hfsi_full_customize_register');
