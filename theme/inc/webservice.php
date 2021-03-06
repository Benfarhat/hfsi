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


      $name_of_nonce_field = '_wpnonce';

      if ( ! isset( $_POST[$name_of_nonce_field] )
     //     || ! wp_verify_nonce( $_POST[$name_of_nonce_field], $name_of_action )
      ) {
        /*
        var_dump(isset( $_POST['_wpnonce'] ));

        var_dump(wp_verify_nonce( $_POST['_wpnonce']));
        var_dump(wp_verify_nonce( $_POST['_wpnonce'], 'hfsi_webservice'));
        var_dump($_POST['_wpnonce']);
        var_dump($name_of_nonce_field);
        var_dump($name_of_action);
        */
        wp_die('Sorry, your token/nonce did not verify.');
        // exit;
      } else {
        // Sanitize the POST field
        // @see: https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
/*
          $action = empty( $_REQUEST['action'] ) ? '' : $_REQUEST['action'];


          $params = array(
          'numanalyse' => sanitize_text_field( $_POST['numanalyse'] ),
          'identifiant' => sanitize_text_field( $_POST['identifiant'] ),
          'date_analyse' => sanitize_text_field( $_POST['date_analyse'] )
          );
*/
          // Protocols
          $protocol = ( get_theme_mod('webservice_protocol') == 1 ) ? 'http' : 'https';

          // Endpoint
          //$endpoint = 'www.cviproject.eu/wp-content/uploads/2016/06/dummyPDF.pdf';
          $endpoint =  get_theme_mod('webservice_url');

          // Params
          $fields = json_decode(get_theme_mod('webservice_fields'));
          $params = '?';
          $errors= '';

          foreach($fields as $field){
            if(sanitize_text_field( $_POST[$field->fieldname] ) != '')
              $params.=$field->fieldname."=".sanitize_text_field( $_POST[$field->fieldname] ).'&';
            else
              $errors .= '&nbsp; - '.$field->label.'<br>';
          }

          // Filename

          $filename = hfsi_create_slug(sanitize_text_field( $_POST[$fields[0]->fieldname] ));

          // URL
          $url = esc_url($protocol.'://'.$endpoint.trim($params,'&'));

          if($errors != ''){
            $errors = "Un ou plusieurs paramètres n'ont pas été renseignés correctement: <br>".$errors;
            if ( wp_get_referer() ){
              $errors .= '<a href="'.wp_get_referer().'" class="btn btn-outline-info">Retour au formulaire</a>';
            }
            wp_die($errors);
          }


          //wp_die($url);
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
          $response = wp_remote_get( 'http://www.cviproject.eu/wp-content/uploads/2016/06/dummyPDF.pdf' );

          if (is_wp_error( $server_response) ) {

          } else {
            $response_body = wp_remote_retrieve_body( $response);
            header("Content-type: application/pdf");
            header("Content-disposition: attachment;filename=".$filename.".pdf");
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

