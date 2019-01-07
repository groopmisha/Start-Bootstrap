<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options            = array(
	'type'         => array(
		'label'   => esc_html__( 'Type', 'start' ),
		'desc'    => esc_html__( 'Select divider type', 'start' ),
		'type'    => 'image-picker',
		'value'   => 'fw-line-solid',
		'choices' => array(
			'fw-line-solid'    => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/solid.jpg',
					'title'  => esc_html__( 'Solid Line', 'start' )
				),
			),
			'fw-divider-space' => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/space_gap.jpg',
					'title'  => esc_html__( 'Space', 'start' )
				),
			),
		),
	),
	'divider_size' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'size' => array(
				'label'   => esc_html__( 'Height', 'start' ),
				'desc'    => esc_html__( 'Select the top and bottom margin in px', 'start' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'choices' => array(
					'space-sm' => esc_html__( 'Small', 'start' ),
					'space-md' => esc_html__( 'Medium', 'start' ),
					'space-lg' => esc_html__( 'Large', 'start' ),
					'custom'   => esc_html__( 'Custom', 'start' ),
				),
				'value'   => 'space-md'
			),
		),
		'choices'      => array(
			'custom' => array(
				'margin_top'    => array(
					'label' => esc_html__( 'Margin Top', 'start' ),
					'desc'  => esc_html__( 'Enter margin-top in px', 'start' ),
					'attr'  => array( 'class' => 'fw-option-width-small' ),
					'type'  => 'short-text',
					'value' => ''
				),
				'margin_bottom' => array(
					'label' => esc_html__( 'Margin Bottom', 'start' ),
					'attr'  => array( 'class' => 'fw-option-width-small' ),
					'desc'  => esc_html__( 'Enter margin-bottom in px', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				),
			),
			'no'     => array(),
		),
		'show_borders' => false,
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