<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hfsi
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href=" <?php bloginfo('pingback_url'); ?>">
  <title><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
  <!-- Favicon et icones apple touch -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/img/icons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-180x180.png" />
  <!-- meta -->
  <!-- For Robots -->
  <meta name="robots" content="noimageindex">
  <meta name="googlebot" content="noimageindex">
  <!-- Semantic property -->
  <meta property="og:language" content="fr">
  <meta property="og:locale" content="fr">
  <meta property="og:title" content="HFSI">
  <meta property="og:url" content="www.url.com">
  <meta property="og:description" content="description">
  <meta property="og:updated_time" content="time">
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/img/armoirie.png">
  <meta property="og:image:secure_url" content="<?= get_template_directory_uri() ?>/img/armoirie.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="80">
  <meta property="og:image:height" content="125">
  <meta property="business:contact_data:street_address" content="Rue Mohamed Fadhel Ben Achour">
  <meta property="business:contact_data:locality" content="Marsa">
  <meta property="business:contact_data:postal_code" content="1000">
  <meta property="business:contact_data:country_name" content="Tunisia">
  <meta property="place:location:latitude" content="36.8787259">
  <meta property="place:location:longitude" content="10.3247723">
  <!-- meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="keywords" content="keywords">
  <meta name="description" content="description">
  <meta name="author" content="Benfarhat Elyes">
  <meta name="geo.placename" content="Tunis, Tunisie">
  <meta name="geo.region" content="TN-11">
  <meta name="geo.position" content="36.8787259;10.3247723">
  <meta name="ICBM" content="36.8787259, 10.3247723">
  <link href="/feed" title="Fil d'actualitÃ©s RSS" type="application/rss+xml" rel="alternate">

  <?php wp_head(); ?>
  <!-- script -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<?php if ( get_header_image() ) : ?>
<style>
    #header-top{
    background: url(<?php header_image(); ?>);
    background-position-y: 40%;
    background-size: cover;
    }
</style>
<?php endif; ?>

<body <?php body_class(); ?>>
  <a class="skip-link screen-reader-text btn btn-warning d-none d-sm-block d-md-none" href="#content"><?php esc_html_e( 'Aller au contenu', 'hfsi' ); ?></a>
  <!-- Title and connexion menu -->
  <nav id="menu-top" class="navbar navbar-expand-md navbar-light bg-light p-0">
    <div class="container animated bounceInLeft">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0" role="navigation">
          <li class="bg-danger mr-2 d-flex align-items-center">
              <a class="flag" href="<?= home_url('/')?>"><span class="d-flex align-items-center"><?php echo hfsi_get_svg_logo('#b33939', 42) ?></span></a>
          </li>
          <li>
              <a class="navbar-brand" href="<?= home_url('/')?>"><span class="text-success organization_title"><?= esc_html(get_theme_mod('organization_title', get_bloginfo('name'))); ?></span> <span class="organization_subtitle"><?= esc_html(get_theme_mod('organization_subtitle', get_bloginfo('description'))); ?></span></a></a>
          </li>
      </ul>

      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
      <?php

$defaults = array(
	'theme_location'  => 'menu-top',
	'menu'            => 'menu-top',
	'container'       => 'ul',
	'container_class' => 'navbar-nav ml-auto mt-2 mt-lg-0',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav ml-auto justify-content-end %2$s">%3$s</ul>',
	'depth'           => 2,
  'walker'          => new hfsi_walker_nav_menu(),
  'submenu_class'   => 'dropdown-menu-right'
);

if ( has_nav_menu( 'menu-top' ) ) {
  wp_nav_menu( $defaults );
}
?>

      </div>
    </div>

  </nav>
  <!-- /Title and connexion menu -->
  <!-- Header -->
  <header id="header-top">
    <div id="particles-js" class="overlay position-absolute"></div>
    <div class="container position-relative d-flex flex-column">
      <div class="overlay rgba4 animated bounceInRight">
        <div class="row py-0">
          <div class="col-md-5 text-center title" role="banner">
            <img src="<?= get_template_directory_uri() ?>/img/logo/3/logo128.png" alt="">
            <h2 class="organization_banner_title"><?= get_theme_mod('organization_banner_title', 'HOPITAL FSI'); ?></h2>
            <h3 class="organization_banner_subtitle"><?= get_theme_mod('organization_banner_subtitle', 'La Marsa'); ?></h3>
            <?php if(get_theme_mod('organization_banner_slogan')): ?>
            <p class="organization_banner_slogan"><?= get_theme_mod('organization_banner_slogan'); ?></p>
            <?php endif; ?>
          </div>
          <div class="col-md-7 pl-0 d-flex flex-column justify-content-between" style="border-left:1px solid rgba(255,255,255,.1)">
            <div style="border-bottom: 1px solid rgba(255,255,255,.1);">
          <?php

$defaults = array(
	'theme_location'  => 'menu-banner',
	'menu'            => 'menu-banner',
	'container'       => 'ul',
	'container_class' => 'navbar-nav ml-auto mt-2 mt-lg-0',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<nav id="%1$s" class="nav ml-auto justify-content-end %2$s">%3$s</nav>',
	'depth'           => 1,
  'walker'          => new hfsi_walker_nav_menu(),
  'submenu_class'   => ''
);

if ( has_nav_menu( 'menu-banner' ) ) {
  wp_nav_menu( $defaults );
}
?>
            </div>
          <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /Header -->
  <!-- Logo and Primary menu -->
  <nav id="menu" class="navbar navbar-expand-md navbar-dark bg-success sticky-top" style="border-bottom:8px solid var(--dark) !important;">
    <div class="container animated bounceInLeft" role="navigation">
      <!-- Left side -->
<?php

$defaults = array(
	'theme_location'  => 'menu-primary-left',
	'menu'            => 'menu-primary-left',
	'container'       => 'ul',
	'container_class' => 'nav mr-auto justify-content-start',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav mr-auto justify-content-start %2$s">%3$s</ul>',
	'depth'           => 2,
  'walker'          => new hfsi_walker_nav_menu(),
  'submenu_class'   => ''
);

if ( has_nav_menu( 'menu-primary-left' ) ) {
  wp_nav_menu( $defaults );
}
?>
<!-- Right Menu -->
<?php
$defaults = array(
	'theme_location'  => 'menu-primary-right',
	'menu'            => 'menu-primary-right',
	'container'       => 'ul',
	'container_class' => 'nav ml-auto justify-content-end flex-1',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav ml-auto justify-content-end %2$s">%3$s</ul>',
	'depth'           => 2,
  'walker'          => new hfsi_walker_nav_menu(),
  'submenu_class'   => 'dropdown-menu-right'
);

if ( has_nav_menu( 'menu-primary-right' ) ) {
  wp_nav_menu( $defaults );
}
?>

    </div>

  </nav>
  <!-- /Logo and Primary menu -->
