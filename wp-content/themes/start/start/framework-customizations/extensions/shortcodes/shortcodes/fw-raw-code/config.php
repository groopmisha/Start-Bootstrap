<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'          => __( 'RAW Code', 'start' ),
		'description'    => __( 'Add Raw Code', 'start' ),
		'tab'            => __( 'Content Elements', 'start' ),
		'popup_size'     => 'medium',
		'title_template' => '{{ if (!o.shortcode_name) { }} {{- title}} {{ } }} {{ if (o.shortcode_name) { }} {{- o.shortcode_name}} {{ } }}',
	)
);
