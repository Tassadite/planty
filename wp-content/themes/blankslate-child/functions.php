<?php 
add_action('wp_enqueue_scripts', 'blankslate_child_enqueue_styles');

function blankslate_child_enqueue_styles()
{
    wp_enqueue_style('blankslate-style', get_template_directory_uri() . '/style.css');
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function blanksalte_child_enqueue_styles()
{
    wp_enqueue_style('blankslate-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('blankslate_child-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
}?>