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
/*appel du logo*/
function has_custom_logo( $blog_id = 0 ) {
	$switched_blog = false;

	if ( is_multisite() && ! empty( $blog_id ) && get_current_blog_id() !== (int) $blog_id ) {
		switch_to_blog( $blog_id );
		$switched_blog = true;
	}

	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( $switched_blog ) {
		restore_current_blog();
	}

	return (bool) $custom_logo_id;
}
 
?>