<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$map_shortcode      = fw_ext( 'shortcodes' )->get_shortcode( 'map' );

$options = array(
	'unique_id'      => array(
		'type' => 'unique'
	),
	'location_group' => array(
		'type'    => 'group',
		'options' => array(
			'data_provider' => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'population_method' => array(
						'label'   => esc_html__( 'Population Method', 'start' ),
						'desc'    => esc_html__( 'Select map population method (Ex: events, custom)', 'start' ),
						'type'    => 'select',
						'choices' => $map_shortcode->_get_picker_dropdown_choices(),
					)
				),
				'choices'      => $map_shortcode->_get_picker_choices(),
				'show_borders' => false,
			),
		)
	),
	'map_type'       => array(
		'label'   => esc_html__( 'Map Type', 'start' ),
		'desc'    => esc_html__( 'Select map type', 'start' ),
		'type'    => 'image-picker',
		'value'   => '',
		'choices' => array(
			'roadmap'   => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-roadmap.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-roadmap.jpg'
				),
			),
			'terrain'   => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-terrain.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-terrain.jpg'
				),
			),
			'satellite' => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-satellite.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-satellite.jpg'
				),
			),
			'hybrid'    => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-hybrid.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/assets/img/unyson/image-picker/map-hybrid.jpg'
				),
			),
		),
	),
	'map_height'     => array(
		'label' => esc_html__( 'Map Height', 'start' ),
		'desc'  => esc_html__( 'Enter the map height in pixels (Ex: 300)', 'start' ),
		'type'  => 'short-text',
		'value' => '400',
	),
	'gmap_key'       => array(
		'label' => __( 'API Key', 'start' ),
		'type'  => 'gmap-key',
		/* translators: %s: google search console */
		'desc'  => sprintf( __( 'Create an application in %1$sGoogle Console%2$s and add the API Key here.', 'start' ), '<a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">', '</a>' )
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