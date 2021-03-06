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
        'priority' => 102
    ) );
    $wp_customize->add_section( 'hfsi_rendezvous' , array(
        'title'    => __( 'Rendez vous', 'hfsi' ),
        'priority' => 103
    ) );
    $wp_customize->add_section( 'hfsi_consulter_rendezvous' , array(
        'title'    => __( 'Consulter vos rendez vous', 'hfsi' ),
        'priority' => 105
    ) );
    $wp_customize->add_section( 'hfsi_homepage_category_loop' , array(
        'title'    => __( 'Homepage', 'hfsi' ),
        'priority' => 107
    ) );
    $wp_customize->add_section( 'hfsi_homepage_category_loop2' , array(
        'title'    => __( 'Extended homepage', 'hfsi' ),
        'priority' => 108
    ) );
    $wp_customize->add_section( 'hfsi_en_avant_section' , array(
        'title'    => __( 'Article en avant', 'hfsi' ),
        'priority' => 170
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
    'default'   => 12,
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


  /* Homepage 2 loop */


    // Enable
    $wp_customize->add_setting( 'enable_homepage2' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_homepage2', array(
        'label' => __( 'Enable Extended homepage', 'hfsi' ),
        'description' => esc_html__( 'Enable or disable extended homepage' ),
        'section'  => 'hfsi_homepage_category_loop2',
        'settings' => 'enable_homepage2',
        'priority' => 2, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );
  // Carousel Title
  $wp_customize->add_setting( 'title_loop_homepage2' , array(
    'default' => '',
    'sanitize_callback' => 'hfsi_sanitize_text',
    'transport' => 'postMessage',
) );

$wp_customize->add_control( 'title_loop_homepage2', array(
      'label' => __( 'extended Homepage loop title', 'hfsi' ),
      'description' => esc_html__( 'Title for Extended Homepage loop' ),
      'section'  => 'hfsi_homepage_category_loop2',
      'settings' => 'title_loop_homepage2',
      'priority' => 8, // Optional. Order priority to load the control. Default: 10
      'type'=> 'text',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'style' => 'border: 1px solid #ddd',
         'placeholder' => __( 'Enter title for extended homepage loop...' ),
      ),
  )
);

    // Enable picture
    $wp_customize->add_setting( 'enable_picture_homepage2' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_picture_homepage2', array(
        'label' => __( 'Enable picture', 'hfsi' ),
        'description' => esc_html__( 'Enable or disable picture' ),
        'section'  => 'hfsi_homepage_category_loop2',
        'settings' => 'enable_picture_homepage2',
        'priority' => 2, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );



  // bgcolor
  $wp_customize->add_setting( 'bgcolor_homepage2' , array(
    'default'   => 'bg-light',
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'bgcolor_homepage2', array(
    'label' => __( 'Choose a background color' ),
    'description' => esc_html__( 'Choose a background color' ),
    'section' => 'hfsi_homepage_category_loop2',
    'settings' => 'bgcolor_homepage2',
    'priority' => 12,
    'type' => 'select',
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'choices' => array(
      '' => 'Selectionner...',
      'bg-info' => 'blue',
      'bg-success' => 'green',
      'bg-danger' => 'red',
      'bg-warning' => 'orange',
      'bg-light' => 'white',
      'bg-dark' => 'dark'
    )
)
);


  // button color
  $wp_customize->add_setting( 'button_color_homepage2' , array(
    'default'   => 'bg-light',
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'button_color_homepage2', array(
    'label' => __( 'Choose a button style' ),
    'description' => esc_html__( 'Choose bg-color for your button' ),
    'section' => 'hfsi_homepage_category_loop2',
    'settings' => 'button_color_homepage2',
    'priority' => 12,
    'type' => 'select',
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'choices' => array(
      '' => 'Selectionner...',
      'btn-info' => 'blue',
      'btn-success' => 'green',
      'btn-danger' => 'red',
      'btn-warning' => 'orange',
      'btn-light' => 'white',
      'btn-outline-dark' => 'dark',
      'btn-outline-info' => 'blue border',
      'btn-outline-success' => 'green border',
      'btn-outline-danger' => 'red border',
      'btn-outline-warning' => 'orange border',
      'btn-outline-light' => 'white border',
      'btn-outline-dark' => 'dark border'
    )
)
);


// Number of elements for loop in homepage
$wp_customize->add_setting( 'num_loop_homepage2' , array(
  'default'   => 12,
  'transport' => 'refresh',
) );

$wp_customize->add_control( 'num_loop_homepage2', array(
  'label' => __( 'How many elements you want to display' ),
  'description' => esc_html__( 'Choose a number' ),
  'section' => 'hfsi_homepage_category_loop2',
  'settings' => 'num_loop_homepage2',
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
  $wp_customize->add_setting( 'enable_sticky_loop_homepage2' , array(
    'default' => 0,
    'sanitize_callback' => 'hfsi_chkbox_sanitization',
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'enable_sticky_loop_homepage2', array(
      'label' => __( 'Enable Sticky', 'hfsi' ),
      'description' => esc_html__( 'Enable sticky posts add some extra posts to elements to display' ),
      'section'  => 'hfsi_homepage_category_loop2',
      'settings' => 'enable_sticky_loop_homepage2',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type'=> 'checkbox',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  )
);

// Category selection for loop homepage
  $wp_customize->add_setting( 'category_loop_homepage2' , array(
      'default'   => '',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'category_loop_homepage2', array(
      'label' => __( 'Select category to display inside extended homepage' ),
      'description' => esc_html__( 'Choose your category' ),
      'section' => 'hfsi_homepage_category_loop2',
      'settings' => 'category_loop_homepage2',
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


    // Only for admin
    $wp_customize->add_setting( 'enable_admin_webservice' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_admin_webservice', array(
        'label' => __( 'Enable webservice only for admin', 'hfsi' ),
        'description' => esc_html__( 'Enable only for admin option for test purpose' ),
        'section'  => 'hfsi_webservice_section',
        'settings' => 'enable_admin_webservice',
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
         '0' => __( 'https://' ),
         '1' => __( 'http://' )
      )
   )
);



  // title

  $wp_customize->add_setting( 'webservice_url' , array(
    'default' => 'www.cviproject.eu/wp-content/uploads/2016/06/dummyPDF.pdf',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'webservice_url', array(
    'label' => __( 'Webservice title', 'hfsi' ),
    'description' => esc_html__( "URL ou adresse IP du point d'accès, for example: www.hfsi.tn/api/1/getResults" ),
    'section'  => 'hfsi_webservice_section',
    'settings' => 'webservice_url',
    'priority' => 15, // Optional. Order priority to load the control. Default: 10
    'type' => 'text', // Can be either text, email, url, number, hidden, or date
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'input_attrs' => array( // Optional.
       'style' => 'border: 1px solid #ddd',
       'placeholder' => __( 'URL endpoint (without http or https)...' ),
    ),
  ) );


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
      'description' => esc_html__( 'Remember: the first fieldname will be used as response filename.' ),
      'section' => 'hfsi_webservice_section',
      'settings' => 'webservice_fields',
      'priority' => 25,
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
    'priority' => 20, // Optional. Order priority to load the control. Default: 10
    'type' => 'text', // Can be either text, email, url, number, hidden, or date
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'input_attrs' => array( // Optional.
       'style' => 'border: 1px solid #ddd',
       'placeholder' => __( 'Enter webservice submit title...' ),
    ),
  ) );


  /* Appointment / Rendez vous */


    // Enable
    $wp_customize->add_setting( 'enable_rendezvous' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_rendezvous', array(
        'label' => __( 'Enable appointment', 'hfsi' ),
        'description' => esc_html__( 'Enable or disable Rendezvous section' ),
        'section'  => 'hfsi_rendezvous',
        'settings' => 'enable_rendezvous',
        'priority' => 2, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );

  // title

  $wp_customize->add_setting( 'rendezvous_title' , array(
    'default' => 'Rendez vous en ligne',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'rendezvous_title', array(
    'label' => __( 'Webservice title', 'hfsi' ),
    'description' => esc_html__( 'Title for Rendez vous section' ),
    'section'  => 'hfsi_rendezvous',
    'settings' => 'rendezvous_title',
    'priority' => 5, // Optional. Order priority to load the control. Default: 10
    'type' => 'text', // Can be either text, email, url, number, hidden, or date
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'input_attrs' => array( // Optional.
       'style' => 'border: 1px solid #ddd',
       'placeholder' => __( 'Enter rendezvous section title...' ),
    ),
  ) );


  $wp_customize->add_setting( 'rendezvous_content' , array(
    'default' => '',
    'sanitize_callback' => 'hfsi_sanitize_dropdown_pages',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'rendezvous_content', array(
        'label' => __( 'Appointment form', 'hfsi' ),
        'description' => esc_html__( 'Choose a page' ),
        'section'  => 'hfsi_rendezvous',
        'settings' => 'rendezvous_content',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type' => 'dropdown-pages',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );


  /* Show Appointment / Consulter Rendez vous */


    // Enable
    $wp_customize->add_setting( 'enable_rendezvous_confirm' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_rendezvous_confirm', array(
        'label' => __( 'Enable to show your appointment', 'hfsi' ),
        'description' => esc_html__( 'Enable or disable the possibility to know if a rendezvous is confirmed or not!' ),
        'section'  => 'hfsi_consulter_rendezvous',
        'settings' => 'enable_rendezvous_confirm',
        'priority' => 2, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );

  // title

  $wp_customize->add_setting( 'rendezvous_title_confirm' , array(
    'default' => 'Consulter vos rendez vous en ligne',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'rendezvous_title_confirm', array(
    'label' => __( 'confirm appointment title', 'hfsi' ),
    'description' => esc_html__( 'Title for Rendez vous "confirmation" section' ),
    'section'  => 'hfsi_consulter_rendezvous',
    'settings' => 'rendezvous_title_confirm',
    'priority' => 5, // Optional. Order priority to load the control. Default: 10
    'type' => 'text', // Can be either text, email, url, number, hidden, or date
    'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    'input_attrs' => array( // Optional.
       'style' => 'border: 1px solid #ddd',
       'placeholder' => __( 'Enter section title...' ),
    ),
  ) );


  // En avant



    // Enable Carousel
    $wp_customize->add_setting( 'enable_en_avant_section' , array(
      'default' => 0,
      'sanitize_callback' => 'hfsi_chkbox_sanitization',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'enable_en_avant_section', array(
        'label' => __( 'Enable Featured page', 'hfsi' ),
        'description' => esc_html__( 'Enable or disable featured page' ),
        'section'  => 'hfsi_en_avant_section',
        'settings' => 'enable_en_avant_section',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type'=> 'checkbox',
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    )
  );


    $wp_customize->add_setting( 'hfsi_en_avant_content' , array(
      'default' => '',
      'sanitize_callback' => 'hfsi_sanitize_dropdown_pages',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'hfsi_en_avant_content', array(
          'label' => __( 'Featured article', 'hfsi' ),
          'description' => esc_html__( 'Choose a page' ),
          'section'  => 'hfsi_en_avant_section',
          'settings' => 'hfsi_en_avant_content',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'dropdown-pages',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
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
