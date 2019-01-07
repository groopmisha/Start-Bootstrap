<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title-group'        => array(
		'type'    => 'group',
		'options' => array(
			'title' => array(
				'label' => esc_html__( 'Title', 'start' ),
				'desc'  => esc_html__( 'Please enter the title', 'start' ),
				'type'  => 'text',
				'value' => '',
			)
		)
	),
	'testimonials-group' => array(
		'type'    => 'group',
		'options' => array(
			'testimonials' => array(
				'attr'          => array( 'class' => 'advanced-testimonials' ),
				'label'         => esc_html__( 'Testimonials', 'start' ),
				'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'start' ),
				'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'start' ),
				'type'          => 'addable-popup',
				'template'      => '{{=author_name}}',
				'popup-options' => array(
					'content'       => array(
						'label'   => esc_html__( 'Testimonial', 'start' ),
						'desc'    => esc_html__( 'Enter the testimonial here', 'start' ),
						'type'    => 'wp-editor',
						'tinymce' => true,
						'reinit'  => true,
						'wpautop' => false,
					),
					'author_avatar' => array(
						'label' => esc_html__( 'Image', 'start' ),
						'desc'  => esc_html__( 'Add an image to this testimonial', 'start' ),
						'type'  => 'upload',
					),
					'author_name'   => array(
						'label' => esc_html__( 'Name', 'start' ),
						'desc'  => esc_html__( 'Enter the name of the person that gave the testimonial', 'start' ),
						'type'  => 'text'
					),
					'author_job'    => array(
						'label' => esc_html__( 'Job Title', 'start' ),
						'desc'  => esc_html__( 'Enter the job title', 'start' ),
						'type'  => 'text'
					),
					'site_name'     => array(
						'label' => esc_html__( 'Company', 'start' ),
						'desc'  => esc_html__( 'Name of the company', 'start' ),
						'type'  => 'text'
					),
					'site_url'      => array(
						'label' => esc_html__( 'Website Link', 'start' ),
						'desc'  => esc_html__( 'The company\'s website link', 'start' ),
						'type'  => 'text'
					)
				)
			),
		)
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