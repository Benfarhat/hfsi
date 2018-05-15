<?php
add_action('admin_menu', 'hfsi_page_create');
function hfsi_page_create() {
    $page_title = 'About HFSI';
    $menu_title = 'Infos utiles';
    $capability = 'edit_posts';
    $menu_slug = 'about_hfsi_page';
    $function = 'about_hfsi_page_display';
    $icon_url = '';
    $position = 240;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

function about_hfsi_page_display() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  include 'about_hfsi_page_display.php';
}

// @see: https://wpshout.com/wordpress-options-page/
