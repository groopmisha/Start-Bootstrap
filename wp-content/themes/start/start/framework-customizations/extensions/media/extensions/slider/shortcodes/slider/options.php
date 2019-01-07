<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$choices = fw()->extensions->get( 'slider' )->get_populated_sliders_choices();

if ( ! empty( $choices ) ) {
	$options = array(
		'slider_id' => array(
			'type'    => 'select',
			'label'   => esc_html__( 'Select Slider', 'start' ),
			'choices' => fw()->extensions->get( 'slider' )->get_populated_sliders_choices()
		),
	);
} else {
	$options = array(
		'no_sliders' => array(
			'type'  => 'html-full',
			'label' => false,
			'desc'  => false,
			/* translators: %s: no slider text */
			'html'  => '<div style=""><h1 style="font-weight:100; text-align:center; margin-top:80px">' . esc_html__( 'No Sliders Available', 'start' ) . '</h1>' . '<p style="text-align:center"><i>' . sprintf( esc_html__( 'No Sliders created yet. Please go to the %1$s Sliders page and %2$s create a new Slider', 'start' ), '<br/>', '<a href="' . esc_url( admin_url( 'post-new.php?post_type=' . fw()->extensions->get( 'slider' )->get_post_type() ) ) . '">', '</a> </i></p></div>' )

		)
	);
}
