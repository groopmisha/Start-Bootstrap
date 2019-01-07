<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'         => esc_html__( 'Layout Elements', 'start' ),
		'title'       => esc_html__( 'Section', 'start' ),
		'description' => esc_html__( 'Add a Section', 'start' ),
		'popup_size'  => 'medium',
		'type'        => 'section' // WARNING: Do not edit this
	)
);