<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'portfolio-posts' => array(
		'title'   => esc_html__( 'Portfolio', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'portfolio-options'    => array(
				'title'   => esc_html__( 'Portfolio', 'start' ),
				'type'    => 'box',
				'options' => array(
					'enable_portfolio_filter'  => array(
						'label'        => esc_html__( 'Portfolio Filter', 'start' ),
						'desc'         => esc_html__( 'Enable portfolio filter?', 'start' ),
						'help'         => sprintf( "%s", esc_html__( 'This filter appears only on the Portfolio category page.', 'start' ) ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'start' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'start' )
						),
						'value'        => 'yes',
					),
					'portfolio_posts_per_page' => array(
						'label' => esc_html__( 'No. of Projects per Page', 'start' ),
						'desc'  => esc_html__( 'Enter how many projects will be displayed on a page', 'start' ),
						'value' => get_option( 'posts_per_page' ),
						'type'  => 'short-text',
					)
				)
			),
			'header-portfolio-box' => array(
				'title'   => esc_html__( 'Projects Header', 'start' ),
				'type'    => 'box',
				'options' => array(
					'general_portfolio_header' => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(

							'posts_header_image' => array(
								'label' => esc_html__( 'Header Image', 'start' ),
								'desc'  => esc_html__( 'Upload a header image', 'start' ),
								'help'  => esc_html__( "This default header image will be used for all your portfolio posts and categories if you didn't set one for a specific category or portfolio post.", "the-start" ),
								'type'  => 'upload'
							)
						)
					)
				)
			),
		)
	),
);