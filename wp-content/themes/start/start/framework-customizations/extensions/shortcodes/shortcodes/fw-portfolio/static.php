<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$start_template_directory_uri = get_template_directory_uri();
$start_version                = fw()->theme->manifest->get_version();

wp_enqueue_script( 'jquery-masonry' );

wp_enqueue_script(
	'isotope',
	$start_template_directory_uri . '/assets/js/unyson/isotope.pkgd.min.js',
	array( 'jquery' ),
	$start_version,
	true
);

wp_enqueue_script(
	'fw-modulo-columns',
	$start_template_directory_uri . '/assets/js/unyson/modulo-columns.js',
	array( 'jquery' ),
	$start_version,
	true
);

wp_enqueue_script(
	'fw-shortcode-portfolio-script',
	$start_template_directory_uri . '/framework-customizations/extensions/shortcodes/shortcodes/fw-portfolio/static/js/portfolio-script.js',
	array( 'jquery' ),
	$start_version,
	true
);