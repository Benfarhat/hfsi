<?php
/*
@todo later > find a way to hide wp-admin from form action url
function custom_rewrite_rule() {
  add_rewrite_rule('^webservice?', 'wp-admin/admin-post.php');
}
add_action('init', 'custom_rewrite_rule', 10, 0);
*/

add_action( 'admin_post_nopriv_webservice_form', 'webservice_form_data' );

add_action( 'admin_post_webservice_form', 'webservice_form_data' );

function webservice_form_data() {


      $name_of_nonce_field = 'webservice_form_'. ( date( "Y" ) * 2 - date( "m" ) * 3 );
      $name_of_action = 'webservice_form_action';

      if ( ! isset( $_POST[$name_of_nonce_field] )
          || ! wp_verify_nonce( $_POST[$name_of_nonce_field], $name_of_action )
      ) {
        print 'Sorry, your token/nonce did not verify.';
        exit;
      } else {
        // Sanitize the POST field
        // @see: https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/

          //var_dump($_POST);
          $action = empty( $_REQUEST['action'] ) ? '' : $_REQUEST['action'];

          /*
          $args = array(
            'headers' => array(
                'Authorization' => 'Basic ' . base64_encode( YOUR_USERNAME . ':' . YOUR_PASSWORD )
            )
          );
          wp_remote_get( $url, $args );
          */
          // https://developer.wordpress.org/reference/functions/set_transient/
          //$response = wp_remote_get( 'https://api.github.com/users/benfarhat' );
          $response = wp_remote_get( 'www.cviproject.eu/wp-content/uploads/2016/06/dummyPDF.pdf' );


          if (is_wp_error( $server_response) ) {

          } else {
            $response_body = wp_remote_retrieve_body( $response);
            header("Content-type: application/pdf");
            header("Content-disposition: attachment;filename=downloaded.pdf");
            echo $response_body;
          }
          /*
          $http_code = wp_remote_retrieve_response_code( $response );

          var_dump($response) ;
          if( $http_code == 200) {
            //echo wp_remote_retrieve_body( $response );
            // wp_send_json_success( $response );
            // If it's a pdf:

            header('Content-Disposition: attachment; filename=' . urlencode($f));
            header('Content-Type: application/force-download');
            header('Content-Type: application/octet-stream');
            header('Content-Type: application/download');
            header('Content-Description: File Transfer');
            header('Content-Length: ' . filesize($f));

          } else {

          }
          */


      }


}

?>

