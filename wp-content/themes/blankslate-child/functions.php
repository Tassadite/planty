<?php

add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue' );
function blankslate_child_enqueue() {
wp_enqueue_style( 'blankslate_child-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}

?>