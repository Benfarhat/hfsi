<?php
/*
function my_mce_external_plugins($plugins) {

$plugins['anchor'] = site_url() . '/wp-includes/js/tinymce/plugins/anchor/plugin.min.js';
return $plugins;
}
add_filter('mce_external_plugins', 'my_mce_external_plugins');
*/

function add_tinymce_plugin( $plugins ) {
  $plugins['spellchecker'] = get_template_directory_uri() . '/vendor/tinymce/plugins/spellchecker/plugin.min.js';
  $plugins['directionality'] = get_template_directory_uri() . '/vendor/tinymce/plugins/directionality/plugin.min.js';
  $plugins['table'] = get_template_directory_uri() . '/vendor/tinymce/plugins/table/plugin.min.js';
  $plugins['searchreplace'] = get_template_directory_uri() . '/vendor/tinymce/plugins/searchreplace/plugin.min.js';
  $plugins['image'] = get_template_directory_uri() . '/vendor/tinymce/plugins/image/plugin.min.js';
  $plugins['imagetools'] = get_template_directory_uri() . '/vendor/tinymce/plugins/imagetools/plugin.min.js';
  $plugins['visualblocks'] = get_template_directory_uri() . '/vendor/tinymce/plugins/visualblocks/plugin.min.js';
  return $plugins;
}
add_filter( 'mce_external_plugins', 'add_tinymce_plugin' );

function extra_editor_buttons1($buttons) {

  $remove_buttons = array(
    'alignleft',
    'aligncenter',
    'alignright',
    'alignjustify',
    'spellchecker',
    'dfw',
    'wp_adv',
);
  foreach ( $buttons as $button_key => $button_value ) {
      if ( in_array( $button_value, $remove_buttons ) ) {
          unset( $buttons[ $button_key ] );
      }
  }

  $buttons[] = '|';
  $buttons[] = 'alignleft';
  $buttons[] = 'aligncenter';
  $buttons[] = 'alignright';
  $buttons[] = 'alignjustify';

  $buttons[] = '|';
  $buttons[] = 'spellchecker';
  $buttons[] = 'rtl';
  $buttons[] = '|';
  $buttons[] = 'searchreplace';
  $buttons[] = '|';
  $buttons[] = 'visualblocks';
  $buttons[] = '|';
  $buttons[] = 'wp_adv';


  return $buttons;
}
add_filter("mce_buttons", "extra_editor_buttons1");

function extra_editor_buttons2($buttons) {

  $remove_buttons = array(
    'forecolor', // text color
    'wp_help', // keyboard shortcuts
  );
  foreach ( $buttons as $button_key => $button_value ) {
      if ( in_array( $button_value, $remove_buttons ) ) {
          unset( $buttons[ $button_key ] );
      }
  }

  $buttons[] = '|';
  $buttons[] = 'superscript';
  $buttons[] = 'subscript';

  $buttons[] = '|';
  $buttons[] = 'styleselect';

  $buttons[] = '|';
  $buttons[] = 'copy';
  $buttons[] = 'cut';
  $buttons[] = 'paste';

  $buttons[] = '|';
  $buttons[] = 'table';



  return $buttons;
}
add_filter("mce_buttons_2", "extra_editor_buttons2");

function extra_editor_buttons3($buttons) {
    $buttons[] = 'wp_img_alignleft';
    $buttons[] = 'wp_img_aligncenter';
    $buttons[] = 'wp_img_alignright';
    $buttons[] = 'wp_img_alignnone';

    $buttons[] = '|';
    $buttons[] = 'rotateleft';
    $buttons[] = 'rotateright';
    $buttons[] = 'flipv';
    $buttons[] = 'fliph';

    $buttons[] = '|';
    $buttons[] = 'wp_img_edit';
    $buttons[] = 'wp_img_remove';

    $buttons[] = '|';
    $buttons[] = 'media';
    $buttons[] = 'image';
    $buttons[] = '|';

    return $buttons;
}
add_filter("mce_buttons_3", "extra_editor_buttons3");
