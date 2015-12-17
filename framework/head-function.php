<?php

if (!function_exists('wd_head_cleanup')) {
	function wd_head_cleanup() {

		// category feeds
		// remove_action( 'wp_head', 'feed_links_extra', 3 );

		// post and comment feeds
		// remove_action( 'wp_head', 'feed_links', 2 );

		// EditURI link
		remove_action('wp_head', 'rsd_link');

		// windows live writer
		remove_action('wp_head', 'wlwmanifest_link');

		// previous link
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);

		// start link
		remove_action('wp_head', 'start_post_rel_link', 10, 0);

		// links for adjacent posts
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

		// WP version
		remove_action('wp_head', 'wp_generator');

		// remove WP version from css
		add_filter('style_loader_src', 'wd_remove_wp_ver_css_js', 9999);

		// remove Wp version from scripts
		add_filter('script_loader_src', 'wd_remove_wp_ver_css_js', 9999);

	}/* end wd head cleanup */

	// remove WP version from RSS
	function wd_rss_version() {
		return '';
	}

	// remove WP version from scripts
	function wd_remove_wp_ver_css_js($src) {
		if (strpos($src, 'ver='))
			$src = remove_query_arg('ver', $src);
		return $src;
	}

	// remove injected CSS for recent comments widget
	function wd_remove_wp_widget_recent_comments_style() {
		if (has_filter('wp_head', 'wp_widget_recent_comments_style')) {
			remove_filter('wp_head', 'wp_widget_recent_comments_style');
		}
	}

	// remove injected CSS from recent comments widget
	function wd_remove_recent_comments_style() {
		global $wp_widget_factory;
		if (isset($wp_widget_factory -> widgets['WP_Widget_Recent_Comments'])) {
			remove_action('wp_head', array($wp_widget_factory -> widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
		}
	}

	// remove injected CSS from gallery
	function wd_gallery_style($css) {
		return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
	}

}
?>