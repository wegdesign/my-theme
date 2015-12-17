<?php

add_action('after_setup_theme', 'wd_setup');

if (!function_exists('wd_setup')) {

	function wd_setup() {

		add_editor_style(THEME_FRAMEWORK_CSS . 'editor-style.css');

		// launching operation cleanup
		add_action('init', 'wd_head_cleanup');

		// A better title
		add_filter('wp_title', 'rw_title', 10, 3);

		// remove WP version from RSS
		add_filter('the_generator', 'wd_rss_version');

		// remove pesky injected css for recent comments widget
		add_filter('wp_head', 'wd_remove_wp_widget_recent_comments_style', 1);

		// clean up comment styles in the head
		add_action('wp_head', 'wd_remove_recent_comments_style', 1);

		// clean up gallery output in wp
		add_filter('gallery_style', 'wd_gallery_style');
		
		wd_theme_support();
		
		add_filter('widget_text', 'do_shortcode');
		
		

	}

}

if (!function_exists('wd_theme_support')) {
	function wd_theme_support() {

		// This theme uses post thumbnails
		if (function_exists('add_theme_support')) {// Added in 2.9
			add_theme_support('post-thumbnails');
		}

		// default thumb size
		set_post_thumbnail_size(125, 125, true);

		// wp custom background (thx to @bransonwerner for update)
		add_theme_support('custom-background', 
							array(
								'default-image' => '', // background image default
								'default-color' => '', // background color default (dont add the #)
								'wp-head-callback' => '_custom_background_cb', 
								'admin-head-callback' => '', 'admin-preview-callback' => ''
							)
						);

		// rss thingy
		add_theme_support('automatic-feed-links');
		
		// wp menus
		add_theme_support( 'menus' );
	
		// registering wp3+ menus
		register_nav_menus(
			array(
				'main-nav' => __( 'The Main Menu', 'bonestheme' ),   // main nav in header
				'footer-links' => __( 'Footer Links', 'bonestheme' ) // secondary nav in footer
			)
		);
	
		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array(
			'comment-list',
			'search-form',
			'comment-form'
		) );

	}

}
?>
