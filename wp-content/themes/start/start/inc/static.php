<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Include static files: javascript and css
 *
 */
$template_directory = get_template_directory_uri();
if ( defined( 'FW' ) ) {
	$version = fw()->theme->manifest->get_version();
} else {
	$version = '1.0';
}

/**
 * Enqueue scripts and styles for the front end.
 */

// Load bootstrap stylesheet.
wp_enqueue_style(
	'bootstrap',
	$template_directory . '/assets/css/unyson/bootstrap.css',
	array(),
	$version
);

// Load menu stylesheet.
wp_enqueue_style(
	'fw-mmenu',
	$template_directory . '/assets/css/unyson/jquery.mmenu.all.css',
	array(),
	$version
);

// Load owl slidet for section type 10.
wp_enqueue_style(
	'owlcarousel',
	$template_directory . '/assets/css/unyson/owl.carousel.css',
	array(),
	$version
);

// Load our main stylesheet. 

wp_enqueue_style(
	'fw-style',
	$template_directory . '/assets/css/unyson/fw-style.css',
	array(),
	$version
);

// Load our main stylesheet.
wp_enqueue_style(
	'start-style',
	get_stylesheet_uri(),
	array(),
	$version
);

// Load prettyPhoto stylesheet.
wp_enqueue_style(
	'prettyPhoto',
	$template_directory . '/assets/css/unyson/prettyPhoto.css',
	array(),
	$version
);

// Load animate stylesheet.
wp_enqueue_style(
	'animate',
	$template_directory . '/assets/css/unyson/animate.css',
	array(),
	$version
);

// Load font-awesome stylesheet.
wp_enqueue_style(
	'font-awesome',
	$template_directory . '/assets/css/unyson/font-awesome.css',
	array(),
	$version
);

// Load font-awesome stylesheet.
wp_enqueue_style(
	'magnific',
	$template_directory . '/assets/vendor/magnific-popup/magnific-popup.css',
	array(),
	$version
);

wp_enqueue_style(
	'creative',
	$template_directory . '/assets/css/creative.css',
	array(),
	$version
);


// Load js files.
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

wp_enqueue_script(
	'modernizr',
	$template_directory . '/assets/js/unyson/lib/modernizr.js',
	array( 'jquery' ),
	$version,
	false
);

// wp_enqueue_script(
// 	'bootstrap',
// 	$template_directory . '/assets/js/unyson/lib/bootstrap.js',
// 	array(),
// 	$version,
// 	false
// );

wp_enqueue_script(
	'carouFredSel',
	$template_directory . '/assets/js/unyson/jquery.carouFredSel-6.2.1.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'prettyPhoto',
	$template_directory . '/assets/js/unyson/jquery.prettyPhoto.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script( 'masonry' );

wp_enqueue_script(
	'selectize',
	$template_directory . '/assets/js/unyson/selectize.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'customInput',
	$template_directory . '/assets/js/unyson/jquery.customInput.js',
	array( 'jquery' ),
	$version,
	true
);



wp_enqueue_script(
	'navigation',
	$template_directory . '/assets/js/navigation.js',
	array(),
	$version,
	true
);

wp_enqueue_script(
	'skip-link-focus',
	$template_directory . '/assets/js/skip-link-focus-fix.js',
	array(),
	$version,
	true
);

// wp_enqueue_script(
// 	'jquery-min',
// 	$template_directory . '/assets/vendor/jquery/jquery.min.js',
// 	array(),
// 	$version,
// 	true
// );

wp_enqueue_script(
	'bootstrap',
	$template_directory . '/assets/vendor/bootstrap/js/bootstrap.min.js',
	array(),
	$version,
	true
);

wp_enqueue_script(
	'jquery-131',
	$template_directory . '/assets/vendor/jquery/jquery.easing.min.js',
	array(),
	$version,
	true
);

wp_enqueue_script(
	'scrollreveal',
	$template_directory . '/assets/vendor/scrollreveal/scrollreveal.min.js',
	array(),
	$version,
	true
);

wp_enqueue_script(
	'magnific-popup',
	$template_directory . '/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',
	array(),
	$version,
	true
);


wp_enqueue_script(
	'start-general',
	$template_directory . '/assets/js/creative.min.js',
	array(),
	$version,
	true
);

// wp_enqueue_script(
// 	'general',
// 	$template_directory . '/assets/js/unyson/general.js',
// 	array(),
// 	$version,
// 	true
// );


/*
*  Send success and error messages of the contact form in general.js
*/
wp_localize_script( 'the-start-general', 'FwPhpVars', array(
	'ajax_url'           => esc_url( admin_url( 'admin-ajax.php' ) ),
	'template_directory' => $template_directory,
) );
if ( defined( 'FW' ) && FW_Form::get_submitted() && ! FW_Form::get_submitted()->is_valid() ) {
	wp_localize_script( 'general', '_fw_form_invalid', array(
		'id'     => FW_Form::get_submitted()->get_id(),
		'errors' => FW_Form::get_submitted()->get_errors(),
	) );
}

wp_enqueue_script(
	'lazysizes',
	$template_directory . '/assets/js/unyson/lazysizes.js',
	array( 'jquery' ),
	$version,
	true
);

// js for ie < ie9
wp_enqueue_script( 'html5shiv', $template_directory . '/assets/js/unyson/lib/html5shiv.js', array(), $version );
wp_style_add_data( 'html5shiv', 'conditional', 'if lt IE 9' );

wp_enqueue_script( 'respond', $template_directory . '/assets/js/unyson/lib/respond.js', array(), $version );
wp_style_add_data( 'respond', 'conditional', 'if lt IE 9' );


