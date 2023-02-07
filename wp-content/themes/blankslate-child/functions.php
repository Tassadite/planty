<?php

add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue' );
function blankslate_child_enqueue() {
wp_enqueue_style( 'blankslate_child-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}

function blankslate_child_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'blankslate_child_supports');
wp_nav_menu([
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'navbar-nav mr-auto'
 ])

?>