<?php

add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue' );
function blankslate_child_enqueue() {
wp_enqueue_style( 'blankslate_child-style', get_stylesheet_uri() . '/style.css');}
function blankslate_child_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'blankslate_child_supports');

?>