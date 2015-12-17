<?php

function wd_styles()
{
	 global $wp_styles;	 
	 
	 if (!is_admin()) {
	 
	 	// register main stylesheet
		wp_register_style( 'wd-stylesheet', THEME_FRAMEWORK_CSS . 'style.css', array(), '', 'all' );
		wp_enqueue_style( 'wd-stylesheet' );
		
		// ie-only style sheet
		wp_register_style( 'wd-ie-only', THEME_FRAMEWORK_CSS . 'ie.css', array(), '' , 'all');
		wp_enqueue_style( 'wd-ie-only' );
		$wp_styles->add_data( 'wd-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet
	 	
	 }
	
}

add_action('init', 'wd_styles');

?>