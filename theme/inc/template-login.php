<?php
/* Specific login page selector :
body.login {}
body.login div#login {}
body.login div#login h1 {}
body.login div#login h1 a {}
body.login div#login form#loginform {}
body.login div#login form#loginform p {}
body.login div#login form#loginform p label {}
body.login div#login form#loginform input {}
body.login div#login form#loginform input#user_login {}
body.login div#login form#loginform input#user_pass {}
body.login div#login form#loginform p.forgetmenot {}
body.login div#login form#loginform p.forgetmenot input#rememberme {}
body.login div#login form#loginform p.submit {}
body.login div#login form#loginform p.submit input#wp-submit {}
body.login div#login p#nav {}
body.login div#login p#nav a {}
body.login div#login p#backtoblog {}
body.login div#login p#backtoblog a {}
*/

/* Add custom css and js to login page */
function insert_css_js_to_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login.css" />';
  wp_enqueue_style( 'cdn_animated-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css');
  wp_register_script(
    'extra-login-js',
    get_stylesheet_directory_uri() . '/js/login.js',
    array( 'jquery' ),
    '',
    TRUE
  );
  wp_enqueue_script( 'extra-login-js' );
}
add_action('login_head', 'insert_css_js_to_login');

/* Change logo URL */
function change_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'change_login_logo_url' );

/* Change title */
function change_login_logo_url_title() {
  return 'Hopital HFSI La Marsa';
}
add_filter( 'login_headertitle', 'change_login_logo_url_title' );

/* Change default login error message */
function login_error_override()
{
    return 'Vos paramètres de connexion sont incorrectes.';
}
add_filter('login_errors', 'login_error_override');

/* Remove the login page shake */
function remove_login_page_shake() {
  remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'remove_login_page_shake');

/* change the redirect URL for non administrator users */
function change_admin_login_redirect( $redirect_to, $request, $user )
{
  global $user;
  if( isset( $user->roles ) && is_array( $user->roles ) ) {
    if( in_array( "administrator", $user->roles ) ) {
      return $redirect_to;
    } else {
     return home_url();
    }
  }
  else
  {
    return $redirect_to;
  }
}
add_filter("login_redirect", "change_admin_login_redirect", 10, 3);

/* Set remember me to checked */
function set_login_checked_remember_me() {
  add_filter( 'login_footer', 'rememberme_checked' );
  }
  echo "<script>document.getElementById('rememberme').checked = true;</script>";
  add_action( 'init', 'set_login_checked_remember_me' );

  function rememberme_checked() {
  echo "<script>document.getElementById('rememberme').checked = true;</script>";
  }
