<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$colors                     = array(
	'color_1' => '#d2a74d',
	'color_2' => '#0f1f25',
	'color_3' => '#898d8e',
	'color_4' => '#edf1f2',
	'color_5' => '#141e24'
);
$start_color_settings = fw_get_db_settings_option( 'color_settings', $colors );

$options = array(
	'is_fullwidth'       => array(
		'label' => esc_html__( 'Full Width Content', 'start' ),
		'type'  => 'switch',
		'desc'  => 'Make the content inside this section full width?',
	),
	'background_options' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'background' => array(
				'label'   => esc_html__( 'Background', 'start' ),
				'desc'    => esc_html__( 'Select the background for your section', 'start' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'choices' => array(
					'none'  => esc_html__( 'None', 'start' ),
					'image' => esc_html__( 'Image', 'start' ),
					'video' => esc_html__( 'Video', 'start' ),
					'color' => esc_html__( 'Color', 'start' ),
				),
				'value'   => 'none'
			),
		),
		'choices'      => array(
			'none'  => array(),
			'image' => array(
				'background_image' => array(
					'label'   => '',
					'type'    => 'background-image',
					'choices' => array(//	in future may will set predefined images
					)
				),
			),
			'video' => array(
				'video_type' => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'selected' => array(
							'label'   => esc_html__( 'Video Type', 'start' ),
							'desc'    => esc_html__( 'Select the video type', 'start' ),
							'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
							'type'    => 'radio',
							'choices' => array(
								'youtube'  => esc_html__( 'Youtube', 'start' ),
								'uploaded' => esc_html__( 'Video', 'start' ),
							),
							'value'   => 'youtube'
						),
					),
					'choices'      => array(
						'youtube'  => array(
							'video' => array(
								'label' => '',
								'desc'  => esc_html__( 'Insert a YouTube video URL', 'start' ),
								'type'  => 'text',
							),
						),
						'uploaded' => array(
							'video' => array(
								'label'       => '',
								'desc'        => esc_html__( 'Upload a video', 'start' ),
								'images_only' => false,
								'type'        => 'upload',
							),
						),
					),
					'show_borders' => false,
				),
			),
			'color' => array(
				'background_color' => array(
					'label'   => '',
					'desc'    => esc_html__( 'Select the background color', 'start' ),
					'value'   => '',
					'choices' => $start_color_settings,
					'type'    => 'color-palette'
				),
			),
		),
		'show_borders' => false,
	),
	'responsive'         => array(
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
	'class'              => array(
		'label' => __( 'Custom Class', 'start' ),
		'desc'  => __( 'Enter custom CSS class', 'start' ),
		'type'  => 'text',
		'value' => '',
	),
);