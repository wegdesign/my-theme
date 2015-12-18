<?php

/*
	Author: WegDesign
*/

define( 'THEME_URI', get_template_directory_uri());
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_FRAMEWORK_DIR', THEME_DIR . '/framework/' );
define( 'THEME_FRAMEWORK_URI', THEME_URI . '/framework/' );
define( 'THEME_FRAMEWORK_JS', THEME_FRAMEWORK_URI . 'js/' );
define( 'THEME_FRAMEWORK_CSS', THEME_FRAMEWORK_URI . 'css/' );

//Theme Admin
require_once (THEME_FRAMEWORK_DIR . 'theme-admin.php');

//Theme Init
require_once (THEME_FRAMEWORK_DIR . 'theme-init.php');

//Theme Options
require_once (THEME_FRAMEWORK_DIR . 'theme-options.php');

//Theme Metaboxes
require_once (THEME_FRAMEWORK_DIR . 'theme-metaboxes.php');

//Theme Widget
require_once (THEME_FRAMEWORK_DIR . 'theme-widgets.php');

//Theme Sidebar
require_once (THEME_FRAMEWORK_DIR . 'theme-sidebar.php');

//Theme Function
require_once (THEME_FRAMEWORK_DIR . 'theme-function.php');

//Header function
require_once (THEME_FRAMEWORK_DIR . 'header-function.php');

//Head function
require_once (THEME_FRAMEWORK_DIR . 'head-function.php');

//Footer function
require_once (THEME_FRAMEWORK_DIR . 'footer-function.php');

//Theme Styles
require_once (THEME_FRAMEWORK_DIR . 'theme-styles.php');

//Theme Scripts
require_once (THEME_FRAMEWORK_DIR . 'theme-scripts.php');

//Theme Custom
require_once (THEME_FRAMEWORK_DIR . 'theme-custom.php');

//Theme Menu
require_once (THEME_FRAMEWORK_DIR . 'theme-menu.php');

//Theme Shortcode
require_once (THEME_FRAMEWORK_DIR . 'theme-shortcode.php');

//Theme Plugins
require_once (THEME_FRAMEWORK_DIR . 'theme-plugins.php');


if(file_exists(THEME_FRAMEWORK_DIR . 'child-function.php')){
	require_once (THEME_FRAMEWORK_DIR . 'child-function.php');
}

?>