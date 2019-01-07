<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
* The shortcode configuration file. It contains an array that must be stored in a $cfg variable
 * and is typically used to provide configurations for the visual page builder.
 * title - the title that will appear in the shortcode box.
 * description - the text that will be shown in a tooltip when hovering the shortcode box.
 * tab - the builder tab in which the shortcode box will appear.
 * popup_size - the size of the popup in which the shortcode options will be displayed.
*/
$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Accordion', 'start' ),
		'description' => esc_html__( 'Add an Accordion', 'start' ),
		'tab'         => esc_html__( 'Content Elements', 'start' ),
		'popup_size'  => 'medium'
	)
);