<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! fw_ext( 'portfolio' ) ) {
	// if portfolio extensions is disabled return
	return;
}

$cfg = array(
	'page_builder' => array(
		'title'       => __( 'Porfolio', 'start' ),
		'description' => __( 'Add a Portfolio', 'start' ),
		'tab'         => __( 'Content Elements', 'start' ),
		'popup_size'  => 'medium',
	)
);