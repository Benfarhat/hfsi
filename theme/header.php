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
