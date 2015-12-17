<?php

function wd_script() {
	wp_enqueue_script('jquery');

	if (!is_admin()) {

		// modernizr (without media query polyfill)
		wp_register_script('wd-modernizr', THEME_FRAMEWORK_JS . 'modernizr.custom.min.js', array(), '2.5.3', false);
		wp_enqueue_script('wd-modernizr');

		//adding scripts file in the footer
		wp_register_script('wd-js', THEME_FRAMEWORK_JS . 'scripts.js', array('jquery'), '', true);
		wp_enqueue_script('wd-js');

		// comment reply script for threaded comments
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script('comment-reply');
		}

	}

}

add_action('init', 'wd_script');
?>