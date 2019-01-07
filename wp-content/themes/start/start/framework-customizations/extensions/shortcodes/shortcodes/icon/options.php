<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'unique_id'  => array(
		'type' => 'unique'
	),
	'icon-type'  => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'icon-box-img' => array(
				'label'   => esc_html__( 'Icon', 'start' ),
				'desc'    => esc_html__( 'Select icon type', 'start' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'value'   => 'icon-class',
				'choices' => array(
					'icon-class'  => esc_html__( 'Font Awesome', 'start' ),
					'upload-icon' => esc_html__( 'Custom Upload', 'start' ),
				),
			),
		),
		'choices' => array(
			'icon-class'  => array(
				'icon_class' => array(
					'type'  => 'icon',
					'value' => '',
					'label' => ''
				)
			),
			'upload-icon' => array(
				'upload-custom-img' => array(
					'label' => '',
					'type'  => 'upload',
				),
			),
		)
	),
	'text_group' => array(
		'type'    => 'group',
		'options' => array(
			'text' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'start' ),
				'desc'  => esc_html__( 'Icon title', 'start' ),
			),
		)
	),
	'link'       => array(
		'type'  => 'text',
		'label' => esc_html__( 'Link', 'start' ),
		'desc'  => esc_html__( 'Enter the URL link', 'start' ),
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