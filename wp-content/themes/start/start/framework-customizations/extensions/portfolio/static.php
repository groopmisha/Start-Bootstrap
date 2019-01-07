<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// include portfolio js files if is not in the admin area
if ( ! is_admin() ) {
	$ext_instance = fw()->extensions->get( 'portfolio' );
	$settings     = $ext_instance->get_settings(); //current extension settings
	$ext_name     = $ext_instance->get_name(); //current extension name
	$ext_version  = $ext_instance->manifest->get_version();

	if ( is_tax( $settings['taxonomy_name'] ) || is_post_type_archive( $settings['post_type'] ) ) {
		//add here all portfolio js files to include on the frontend

		/* Example of how include a js file from portfolio
			wp_enqueue_script(
				'fw-extension-' . $ext_name . '-scripts',
				$ext_instance->locate_js_URI( 'portfolio-scripts' ),
				array( 'jquery' ),
				$ext_version,
				true
			);
		*/

		$start_template_directory_uri = get_template_directory_uri();
		$start_version                = fw()->theme->manifest->get_version();

		wp_enqueue_script(
			'fw-shortcode-portfolio-script',
			$start_template_directory_uri . '/framework-customizations/extensions/shortcodes/shortcodes/fw-portfolio/static/js/portfolio-script.js',
			array( 'jquery' ),
			$start_version,
			true
		);
	}
}