<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">

<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>

<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
if ( has_custom_logo() ) {
  echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name"><img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '"></span></a>';
} else {
  echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
}
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu (
          array(
            'theme_location'=> 'header',
            'container' => false,
            'menu-class'=> 'navbar-nav', 
        )) ?>
    </div>
  </div>
</nav>
</header>
<div id="container">
<main id="content" role="main">