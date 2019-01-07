<?php if ( ! defined( 'WP_DEBUG' ) ) {
	die( 'Direct access forbidden.' );
}

include_once get_template_directory() . '/inc/init.php';

add_filter('show_admin_bar', '__return_false');




