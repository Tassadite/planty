<?php
/*appel du style*/
add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue' );
/*fonction d'activation du style du theme enfant*/
function blankslate_child_enqueue() {
    wp_enqueue_style( 'blankslate_child-style', get_stylesheet_directory_uri() . '/style.css');
}
/*fonction d'activation des menus*/
function blankslate_child_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}
/*appel des menus*/
add_action('after_setup_theme', 'blankslate_child_supports');

?>