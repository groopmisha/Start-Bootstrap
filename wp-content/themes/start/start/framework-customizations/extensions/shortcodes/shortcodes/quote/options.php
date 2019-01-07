<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options            = array(
	'text_group'   => array(
		'type'    => 'group',
		'options' => array(
			'text' => array(
				'attr'    => array( 'class' => 'text-advanced' ),
				'label'   => esc_html__( 'Text', 'start' ),
				'desc'    => esc_html__( 'Enter quote text', 'start' ),
				'value'   => '',
				'type'    => 'wp-editor',
				'tinymce' => true,
				'reinit'  => true,
				'wpautop' => false,
			),
		)
	),
	'text_align'   => array(
		'label'   => esc_html__( 'Text Alignment', 'start' ),
		'desc'    => esc_html__( 'Select the prefered text alignment', 'start' ),
		'type'    => 'image-picker',
		'value'   => '',
		'choices' => array(
			'fw-quote-left'   => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/left-position.jpg',
					'title'  => esc_html__( 'Left', 'start' )
				),
			),
			'fw-quote-center' => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/center-position.jpg',
					'title'  => esc_html__( 'Center', 'start' )
				),
			),
			'fw-quote-right'  => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/right-position.jpg',
					'title'  => esc_html__( 'Right', 'start' )
				),
			),
		),
	),
	'author_group' => array(
		'type'    => 'group',
		'options' => array(
			'author'      => array(
				'attr'  => array( 'class' => 'author-advanced' ),
				'label' => esc_html__( 'Author', 'start' ),
				'desc'  => esc_html__( 'Enter the quote author', 'start' ),
				'type'  => 'text',
				'value' => ''
			),
			'author_link' => array(
				'label' => esc_html__( 'Link', 'start' ),
				'desc'  => esc_html__( 'Enter the author link', 'start' ),
				'type'  => 'text',
				'value' => ''
			),
		)
	),
	'responsive'     => array(
		'attr'          => array( 'class' => 'fw-advanced-button' ),
		'type'          => 'popup',
		'label'         => __( 'Responsive Behavior', 'start' ),
		'button'        => __( 'Settings', 'start' ),
		'size'          => 'medium',
		'popup-options' => array(
			'desktop_display'          => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Desktop', 'start' ),
						'desc'         => __( 'Display this shortcode on desktop?', 'start' ),
						'help'         => __( 'Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'start' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'start' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'start' ),
						)
					),
				),
			),
			'tablet_landscape_display' => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Landscape', 'start' ),
						'desc'         => __( 'Display this shortcode on tablet landscape?', 'start' ),
						'help'         => __( 'Applies to devices with the resolution between 992px - 1199px (tablet landscape)', 'start' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'start' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'start' ),
						)
					),
				),
			),
			'tablet_display'           => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Portrait', 'start' ),
						'desc'         => __( 'Display this shortcode on tablet portrait?', 'start' ),
						'help'         => __( 'Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'start' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'start' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'start' ),
						)
					),
				),
				'choices' => array(),
			),
			'smartphone_display'       => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Smartphone', 'start' ),
						'desc'         => __( 'Display this shortcode on smartphone?', 'start' ),
						'help'         => __( 'Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'start' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'start' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'start' ),
						)
					),
				),
				'choices' => array(),
			),
		),
	),
	'class'          => array(
		'label' => __( 'Custom Class', 'start' ),
		'desc'  => __( 'Enter custom CSS class', 'start' ),
		'type'  => 'text',
		'value' => '',
	),
);