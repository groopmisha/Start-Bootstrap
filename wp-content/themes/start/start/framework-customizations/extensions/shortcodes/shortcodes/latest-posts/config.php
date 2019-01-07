<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Latest Posts', 'start' ),
		'description' => esc_html__( 'Add Latest Posts', 'start' ),
		'tab'         => esc_html__( 'Content Elements', 'start' ),
		'popup_size'  => 'medium'
	)
);