<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Widget Area', 'start' ),
	'description' => esc_html__( 'Add a Widget Area', 'start' ),
	'tab'         => esc_html__( 'Content Elements', 'start' ),
	'popup_size'  => 'medium'
);