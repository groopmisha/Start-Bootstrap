<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * A shortcode can have a static.php file that is included when the shortcode is rendered.
 *  It is meant for enqueuing static files.
 */
$shortcodes_extension = fw_ext( 'shortcodes' );

//Example

// find the uri to the shortcode folder
/*$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/demo-shortcode');
wp_enqueue_style(
	'fw-shortcode-demo-shortcode',
	$uri . '/static/css/styles.css'
);
wp_enqueue_script(
	'fw-shortcode-demo-shortcode',
	$uri . '/static/js/scripts.js'
);*/