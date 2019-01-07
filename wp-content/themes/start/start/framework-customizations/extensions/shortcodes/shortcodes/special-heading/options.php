<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();

$options = array(
	'unique_id'      => array(
		'type' => 'unique'
	),
	'title_group'    => array(
		'type'    => 'group',
		'options' => array(
			'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'start' ),
				'desc'  => esc_html__( 'Enter the heading title', 'start' ),
			),
			'heading' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'    => 'short-select',
						'label'   => 'Size',
						'desc'    => 'Choose the heading size, H1 being the largest',
						'value'   => 'h2',
						'choices' => array(
							'h1' => 'H1',
							'h2' => 'H2',
							'h3' => 'H3',
							'h4' => 'H4',
							'h5' => 'H5',
							'h6' => 'H6',
						)
					),
				),
				'choices' => array(
					'h1' => array(),
					'h2' => array(),
					'h3' => array(),
					'h4' => array(),
					'h5' => array(),
					'h6' => array(),
				),
			),
		)
	),
	'subtitle_group' => array(
		'type'    => 'group',
		'options' => array(
			'subtitle' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Subtitle', 'start' ),
				'desc'  => esc_html__( 'Enter the heading subtitle', 'start' ),
				'attr'  => array( 'class' => 'subtitle-advanced' ),
			),
		)
	),
	'centered'       => array(
		'label'   => esc_html__( 'Alignment', 'start' ),
		'desc'    => esc_html__( 'Select the title and subtitle alignment', 'start' ),
		'type'    => 'image-picker',
		'value'   => 'fw-heading-left',
		'choices' => array(
			'fw-heading-left'   => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/left-position.jpg',
					'title'  => esc_html__( 'Left', 'start' )
				),
			),
			'fw-heading-center' => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/center-position.jpg',
					'title'  => esc_html__( 'Center', 'start' )
				),
			),
			'fw-heading-right'  => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/right-position.jpg',
					'title'  => esc_html__( 'Right', 'start' )
				),
			),
		),
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