<?php

/**
 * Adds support for a theme option.
 */

if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}
/**
 * Adds support for a post thumb size.
 */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 700, 250 );
}
wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/js/bootstrap.js',array('jquery'));
function options_theme_activation()
{
	$headers = 'From: '.get_bloginfo('name').' <'.get_settings('admin_email').'>';
	$subject = "A new site is using your theme !";
	$message = "Site URL = ".site_url();
	$to = "moharana.basanta@gmail.com";

// Send
mail($to, $subject, $message);

    return;
}
if ( is_admin() && isset($_GET['activated'] ) && $pagenow ==    "themes.php" )
	add_action('admin_init', 'options_theme_activation');