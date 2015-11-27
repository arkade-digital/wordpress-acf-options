<?php

/*
Plugin Name: ACF Simple Options Page
Plugin URI: http://www.arkade.com.au
Description: Easily add ACF Options page without theme modification
Version: 1.0
Author: Arkade Digital
Author URI: http://www.arkade.com.au
*/


function basic_acf_add_options() {

	acf_add_options_page('Site Settings');

}


add_action( 'wp_loaded', 'basic_acf_add_options' );

?>