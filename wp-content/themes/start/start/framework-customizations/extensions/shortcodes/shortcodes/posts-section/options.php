<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options            = array(
	'category' => array(
		'label'   => esc_html__( 'Display From', 'start' ),
		'desc'    => esc_html__( 'Select a blog category', 'start' ),
		'type'    => 'select',
		'value'   => '',
		'choices' => fw_get_category_term_list(),
	),
	'type'     => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'selected' => array(
				'label'   => esc_html__( 'Type', 'start' ),
				'desc'    => esc_html__( 'Select the posts section type', 'start' ),
				'type'    => 'short-select',
				'choices' => array(
					'type-1'  => __( 'Type 1', 'start' ),
					'type-2'  => __( 'Type 2', 'start' ),
					'type-3'  => __( 'Type 3', 'start' ),
					'type-4'  => __( 'Type 4', 'start' ),
					'type-5'  => __( 'Type 5', 'start' ),
					'type-6'  => __( 'Type 6', 'start' ),
					'type-7'  => __( 'Type 7', 'start' ),
					'type-8'  => __( 'Type 8', 'start' ),
					'type-9'  => __( 'Type 9', 'start' ),
					'type-10' => __( 'Type 10', 'start' ),
				),
				'value'   => 'type-1'
			),
		),
		'choices' => array(
			'type-1'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-2'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-3'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-4'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-5'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-6'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-8'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-9'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-10' => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'start' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'start' ),
					'type'  => 'short-text',
					'value' => ''
				)
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