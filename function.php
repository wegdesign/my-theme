<?php

/*
	Author: WegDesign
*/

define( 'THEME_URI', get_template_directory_uri());
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_FRAMEWORK', THEME_DIR . ' /framework/' );
define( 'THEME_FRAMEWORK_ADMIN', THEME_FRAMEWORK . ' /admin/' );


require_once( THEME_FRAMEWORK . 'index.php' );

require_once( THEME_FRAMEWORK_ADMIN . 'index.php' );

function wd_theme(){
	
	// launching operation cleanup
	add_action( 'init', 'wd_head_cleanup' );
	
	// A better title
	add_filter( 'wp_title', 'rw_title', 10, 3 );
	
	// remove WP version from RSS
	add_filter( 'the_generator', 'wd_rss_version' );
	
	// remove pesky injected css for recent comments widget
	add_filter( 'wp_head', 'wd_remove_wp_widget_recent_comments_style', 1 );
	
	// clean up comment styles in the head
	add_action( 'wp_head', 'wd_remove_recent_comments_style', 1 );
	
	// clean up gallery output in wp
	add_filter( 'gallery_style', 'wd_gallery_style' );
	
	// enqueue base scripts and styles
	add_action( 'wp_enqueue_scripts', 'wd_scripts_and_styles', 999 );
	
}



?>