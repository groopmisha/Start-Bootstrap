<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'unique_id'      => array(
		'type' => 'unique'
	),
	'category'       => array(
		'label'   => __( 'Display From', 'start' ),
		'desc'    => __( 'Select a Portfolio Category', 'start' ),
		'type'    => 'select',
		'value'   => '',
		'choices' => start_get_all_portfolio_taxonomy_list(),
		'help'    => sprintf( "%s \n\n<br/><br/>\n\n %s",
			__( 'You need to have a least one', 'start' ) . ' <a target="_blank" href="' . admin_url() . 'edit-tags.php?taxonomy=fw-portfolio-category&post_type=fw-portfolio' . '">' . __( 'Portfolio Category', 'start' ) . '</a> ' . __( 'in order to be able to use this shortcode.', 'start' ),
			__( 'If the selected Category has sub categories then a filter will appear on the front end letting users filter the projects.', 'start' )
		),
	),
	'posts_per_page' => array(
		'label' => __( 'No. of Projects', 'start' ),
		'desc'  => __( 'Enter the number of project to display. Ex: 3, 6, maximum of 50', 'start' ),
		'type'  => 'short-text',
		'value' => '6',
		'help'  => sprintf( "%s", __( 'We advise you to use this short code as a Latest Works widget displaying only a small no of projects (6, 9). For a full fledge portfolio page please use the built in', 'start' ) . ' <a target="_blank" href="' . admin_url() . 'edit.php?post_type=fw-portfolio' . '">' . __( 'Portfolio Module', 'start' ) . '</a>.' ),
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