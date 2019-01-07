<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * {population-method}.php - extra options for concrete population method,
 *  shown after default options on edit slider page.
 *
*/
$options = array(
	'link' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Link', 'start' ),
		'value' => '',
		'desc'  => esc_html__( 'Enter the link', 'start' )
	)
);