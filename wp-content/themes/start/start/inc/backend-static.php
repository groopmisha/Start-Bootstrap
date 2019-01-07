<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Include admin static files: javascript and css
 */

$template_directory = get_template_directory_uri();
$version            = defined( 'FW' ) ? fw()->theme->manifest->get_version() : '1.0.1';

wp_enqueue_style(
	'start-css-theme-admin',
	$template_directory . '/assets/css/unyson/theme-admin.css',
	array(),
	$version
);

if ( is_rtl() ) {
	wp_enqueue_style(
		'start-css-admin-rtl',
		$template_directory . '/assets/css/unyson/admin-rtl.css',
		array(),
		$version
	);
}

wp_enqueue_script(
	'start-js-theme-admin',
	$template_directory . '/assets/js/unyson/theme-admin.js',
	array( 'jquery', ),
	$version,
	true
);

