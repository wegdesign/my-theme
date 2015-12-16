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
	
}



?>