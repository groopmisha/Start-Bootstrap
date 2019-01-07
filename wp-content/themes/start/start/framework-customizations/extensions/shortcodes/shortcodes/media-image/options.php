<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'img_settings' => array(
		'type'    => 'group',
		'options' => array(
			'upload_img' => array(
				'label' => esc_html__( 'Image', 'start' ),
				'desc'  => esc_html__( 'Upload image', 'start' ),
				'type'  => 'upload',
			)
		)
	),
	'ratio'        => array(
		'type'    => 'short-select',
		'label'   => __( 'Image Format', 'start' ),
		'value'   => '',
		'choices' => array(
			array( // optgroup
				'attr'    => array( 'label' => __( 'Original', 'start' ) ),
				'choices' => array(
					'' => __( 'Original Ratio', 'start' ),
				),
			),
			array( // optgroup
				'attr'    => array( 'label' => __( 'Landscape', 'start' ) ),
				'choices' => array(
					'fw-ratio-16-9' => __( '16-9', 'start' ),
					'fw-ratio-4-3'  => __( '4-3', 'start' ),
					'fw-ratio-2-1'  => __( '2-1', 'start' ),
				),
			),
			array( // optgroup
				'attr'    => array( 'label' => __( 'Portret', 'start' ) ),
				'choices' => array(
					'fw-ratio-9-16' => __( '9-16', 'start' ),
					'fw-ratio-3-4'  => __( '3-4', 'start' ),
					'fw-ratio-1-2'  => __( '1-2', 'start' ),
				),
			),
			array( // optgroup
				'attr'    => array( 'label' => __( 'Square', 'start' ) ),
				'choices' => array(
					'fw-ratio-1' => __( '1-1', 'start' ),
				),
			),
		),
		'desc'    => __( 'Choose the image format', 'start' )
	),
	'image_size'   => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'select_size' => array(
				'label'   => esc_html__( 'Size', 'start' ),
				'desc'    => esc_html__( 'Select the image size', 'start' ),
				'help'    => esc_html__( "<strong>Container size</strong> - the image will take the width of the container. Ex: in a 1/3 column the image will ocuppy the column's full width.", "the-start" ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'value'   => 'auto',
				'choices' => array(
					'auto'   => esc_html__( 'Container size', 'start' ),
					'custom' => esc_html__( 'Custom', 'start' )
				),
			),
		),
		'choices' => array(
			'custom' => array(
				'width' => array(
					'label' => '',
					'desc'  => esc_html__( 'Image width in pixels', 'start' ),
					'type'  => 'short-text',
					'value' => '250',
				),
			),
		)
	),
	'open_img'     => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'icon-box-img' => array(
				'label'   => esc_html__( 'On Click', 'start' ),
				'desc'    => esc_html__( 'What happens when you click the image?', 'start' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'value'   => 'nothing',
				'choices' => array(
					'nothing' => esc_html__( 'Nothing happens', 'start' ),
					'link'    => esc_html__( 'Open custom Link', 'start' )
				),
			),
		),
		'choices' => array(
			'link' => array(
				'custom_link' => array(
					'label' => '',
					'desc'  => esc_html__( 'Enter your custom URL link', 'start' ),
					'type'  => 'text'
				),
				'open'        => array(
					'type'         => 'switch',
					'value'        => '',
					'label'        => '',
					'desc'         => esc_html__( 'Open link in new window', 'start' ),
					'left-choice'  => array(
						'value' => 'no',
						'label' => esc_html__( 'No', 'start' ),
					),
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_html__( 'Yes', 'start' ),
					)
				),
			),
		)
	),
	'responsive'   => array(
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
	'class'        => array(
		'label' => __( 'Custom Class', 'start' ),
		'desc'  => __( 'Enter custom CSS class', 'start' ),
		'type'  => 'text',
		'value' => '',
	),
);