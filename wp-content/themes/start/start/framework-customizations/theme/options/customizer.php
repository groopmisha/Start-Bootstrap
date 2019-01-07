<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */
$portfolio_tab = array();
if ( fw_ext( 'portfolio' ) ) {
	$portfolio_tab = fw()->theme->get_options( 'portfolio-tab' );
}
$colors     = array(
	'color_1' => '#d2a74d',
	'color_2' => '#0f1f25',
	'color_3' => '#898d8e',
	'color_4' => '#edf1f2',
	'color_5' => '#141e24'
);
$typography = array();

$admin_url                  = esc_url( admin_url() );
$template_directory         = get_template_directory_uri();
$start_color_settings = fw_get_db_customizer_option( 'color_settings', $colors );
$typography_settings        = fw_get_db_customizer_option( 'typography_settings', $typography );

$options = array(
	'general-options' => array(
		'title'   => esc_html__( 'General', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => esc_html__( 'Global Settings', 'start' ),
				'type'    => 'box',
				'options' => array(
					'website_background' => array(
						'type'          => 'multi',
						'label'         => false,
						'inner-options' => array(
							'website_bg_color' => array(
								'label' => esc_html__( 'Website Background', 'start' ),
								'desc'  => esc_html__( 'Select the website background color', 'start' ),
								'value' => '#f1eee9',
								'type'  => 'color-picker',
							),
							'website_bg'       => array(
								'type'    => 'background-image',
								'value'   => 'none',
								'label'   => '',
								'desc'    => esc_html__( 'Select the patern overlay', 'start' ),
								'choices' => array(
									'none' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/no_pattern.jpg',
										'css'  => array(
											'background-image' => 'none'
										),
									),
									'bg-1' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/diagonal_bottom_to_top_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-2' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/diagonal_top_to_bottom_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-3' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/dots_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/dots_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-4' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/noise_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/noise_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-5' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/romb_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/romb_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-6' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/square_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/square_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-7' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/vertical_lines_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/vertical_lines_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-8' => array(
										'icon' => $template_directory . '/assets/img/unyson/patterns/waves_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/assets/img/unyson/patterns/waves_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
								)
							)
						)
					),
					'logo_settings'      => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(
							'logo' => array(
								'type'         => 'multi-picker',
								'label'        => false,
								'desc'         => false,
								'picker'       => array(
									'selected_value' => array(
										'label'   => esc_html__( 'Logo Type', 'start' ),
										'desc'    => esc_html__( 'Select the logo type', 'start' ),
										'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
										'value'   => 'text',
										'type'    => 'radio',
										'choices' => array(
											'text'  => esc_html__( 'Text', 'start' ),
											'image' => esc_html__( 'Image', 'start' ),
										),
									)
								),
								'choices'      => array(
									'text'  => array(
										'title'    => array(
											'label' => esc_html__( 'Title', 'start' ),
											'desc'  => esc_html__( 'Enter the title', 'start' ),
											'type'  => 'short-text',
											'value' => get_bloginfo( 'name' )
										),
										'subtitle' => array(
											'label' => esc_html__( 'Subtitle', 'start' ),
											'desc'  => esc_html__( 'Enter the subtitle', 'start' ),
											'type'  => 'short-text',
											'value' => get_bloginfo( 'description' ),
										),
									),
									'image' => array(
										'image_logo'  => array(
											'label' => '',
											'desc'  => esc_html__( 'Upload logo image', 'start' ),
											'type'  => 'upload'
										),
										'retina_logo' => array(
											'type'         => 'switch',
											'label'        => '',
											'desc'         => esc_html__( 'Use logo as retina?', 'start' ),
											'left-choice'  => array(
												'value' => 'fw-logo-no-retina',
												'label' => esc_html__( 'No', 'start' ),
											),
											'right-choice' => array(
												'value' => 'fw-logo-retina',
												'label' => esc_html__( 'Yes', 'start' ),
											)
										),
									),
								),
								'show_borders' => false,
							),
						),
					),
					'comments_gdpr' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'selected' => array(
								'type'         => 'switch',
								'value'        => 'no',
								'label'        => __( 'Comments GDPR', 'start' ),
								'desc'         => __( 'Enable the GDPR for WP comments?', 'start' ),
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
						'choices' => array(
							'yes' => array(
								'comments_gdpr_text' => array(
									'label' => '',
									'desc'  => __( 'Enter the comments GDPR text', 'start' ),
									'value' => '',
									'type'  => 'wp-editor',
									'media_buttons' => false,
								),
							)
						)
					),
				)
			),
			'social-box'  => array(
				'title'   => esc_html__( 'Social', 'start' ),
				'type'    => 'box',
				'options' => array(
					'socials' => array(
						'type'          => 'addable-popup',
						'label'         => esc_html__( 'Social Links', 'start' ),
						'desc'          => esc_html__( 'Add your social profiles', 'start' ),
						'template'      => '{{=social_name}}',
						'popup-options' => array(
							'social_name' => array(
								'label' => esc_html__( 'Name', 'start' ),
								'desc'  => esc_html__( 'Enter a name (it is for internal use and will not appear on the front end)', 'start' ),
								'type'  => 'text',
							),
							'social_type' => array(
								'type'    => 'multi-picker',
								'label'   => false,
								'desc'    => false,
								'picker'  => array(
									'social-type' => array(
										'label'   => esc_html__( 'Icon', 'start' ),
										'desc'    => esc_html__( 'Select social icon type', 'start' ),
										'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
										'type'    => 'radio',
										'value'   => 'icon-social',
										'choices' => array(
											'icon-social' => esc_html__( 'Font Awesome', 'start' ),
											'upload-icon' => esc_html__( 'Custom Upload', 'start' ),
										),
									),
								),
								'choices' => array(
									'icon-social' => array(
										'icon_class' => array(
											'type'  => 'icon',
											'value' => 'fa fa-adn',
											'label' => '',
										),
									),
									'upload-icon' => array(
										'upload-social-icon' => array(
											'label' => '',
											'type'  => 'upload',
										)
									),
								)
							),
							'social-link' => array(
								'label' => esc_html__( 'Link', 'start' ),
								'desc'  => esc_html__( 'Enter your social URL link', 'start' ),
								'type'  => 'text',
							)
						),
					),
				)
			),
		)
	),
	'blog-posts'      => array(
		'title'   => esc_html__( 'Blog', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'posts-box'        => array(
				'title'   => esc_html__( 'Posts', 'start' ),
				'type'    => 'box',
				'options' => array(
					'posts_settings' => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(
							'blog_type'        => array(
								'type'    => 'multi-picker',
								'label'   => false,
								'desc'    => false,
								'picker'  => array(
									'selected' => array(
										'label'   => esc_html__( 'Type', 'start' ),
										'desc'    => esc_html__( 'Select the blog type', 'start' ),
										'type'    => 'short-select',
										'choices' => array(
											'blog-1' => __( 'Type 1', 'start' ),
											'blog-2' => __( 'Type 2', 'start' ),
										),
										'value'   => 'blog-1'
									),
								),
								'choices' => array()
							),
							'post_date'        => array(
								'label'        => esc_html__( 'Post Date', 'start' ),
								'desc'         => esc_html__( 'Show post date?', 'start' ),
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
							'post_author'      => array(
								'label'        => esc_html__( 'Post Author', 'start' ),
								'desc'         => esc_html__( 'Show post author?', 'start' ),
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
							'post_categories'  => array(
								'label'        => esc_html__( 'Post Categories', 'start' ),
								'desc'         => esc_html__( 'Show post categories?', 'start' ),
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
							'post_author_box'  => array(
								'label'        => esc_html__( 'Author Box', 'start' ),
								'desc'         => esc_html__( 'Show author box?', 'start' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'start' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'start' )
								),
								'value'        => 'no',
							),
							'related_articles' => array(
								'label'        => esc_html__( 'Related Articles', 'start' ),
								'desc'         => esc_html__( 'Show related articles?', 'start' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'start' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'start' )
								),
								'value'        => 'no',
							),
						)
					),
				)
			),
			'header-posts-box' => array(
				'title'   => esc_html__( 'Posts Header', 'start' ),
				'type'    => 'box',
				'options' => array(
					'general_posts_header' => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(

							'posts_header_image' => array(
								'label' => esc_html__( 'Header Image', 'start' ),
								'desc'  => esc_html__( 'Upload a header image', 'start' ),
								'help'  => esc_html__( "This default header image will be used for all your posts and categories.", "the-start" ),
								'type'  => 'upload'
							),
						)
					)
				)
			),
		)
	),
	$portfolio_tab,
	'pages'           => array(
		'title'   => esc_html__( 'Pages', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'general_page_header' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'posts_header_image' => array(
						'label' => esc_html__( 'Header Image', 'start' ),
						'desc'  => esc_html__( 'Upload a header image', 'start' ),
						'help'  => esc_html__( "This default header image will be used for all your pages (works only for pages that use Default Template).", "the-start" ),
						'type'  => 'upload'
					)
				)
			)
		)
	),
	'header'          => array(
		'title'   => esc_html__( 'Header', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'header_settings' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'enable_sticky_header'    => array(
						'type'         => 'switch',
						'value'        => '',
						'attr'         => array(),
						'label'        => esc_html__( 'Sticky Header', 'start' ),
						'desc'         => esc_html__( 'Make the header stick with the scroll?', 'start' ),
						'left-choice'  => array(
							'value' => '',
							'label' => esc_html__( 'No', 'start' ),
						),
						'right-choice' => array(
							'value' => 'fw-header-sticky',
							'label' => esc_html__( 'Yes', 'start' ),
						),
					),
					'enable_header_top_bar'   => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'selected_value' => array(
								'label'        => esc_html__( 'Header Top Bar', 'start' ),
								'desc'         => esc_html__( 'Enable the header top bar?', 'start' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'start' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'start' )
								),
								'value'        => 'no',
							)
						),
						'choices'      => array(
							'yes' => array(
								'header_text'           => array(
									'type'  => 'textarea',
									'value' => '',
									'label' => esc_html__( 'Text', 'start' ),
									'desc'  => esc_html__( 'This top bar text is usually used for an email address or phone no', 'start' ),
								),
								'enable_header_socials' => array(
									'type'         => 'multi-picker',
									'label'        => false,
									'desc'         => false,
									'picker'       => array(
										'selected_value' => array(
											'label'        => esc_html__( 'Social Icons', 'start' ),
											'desc'         => esc_html__( 'Enable social icons?', 'start' ),
											'help'         => sprintf( "%s", esc_html__( 'Your social links can be set from the', 'start' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings#fw-options-tab-social-options">' . esc_html__( 'Social Profiles', 'start' ) . '</a> ' . esc_html__( 'section under the General tab.', 'start' ) ),
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
										)
									),
									'choices'      => array(
										'yes' => array(
											'header_icon_size'       => array(
												'type'  => 'short-text',
												'label' => esc_html__( 'Icon Size', 'start' ),
												'desc'  => esc_html__( 'Enter icon size in pixels. Ex: 16', 'start' ),
												'value' => '16',
											),
											'header_social_position' => array(
												'type'         => 'switch',
												'label'        => esc_html__( 'Socials Position', 'start' ),
												'desc'         => esc_html__( 'Select the socials position', 'start' ),
												'right-choice' => array(
													'value' => 'fw-top-social-right',
													'label' => esc_html__( 'Right', 'start' )
												),
												'left-choice'  => array(
													'value' => 'fw-top-social-left',
													'label' => esc_html__( 'Left', 'start' )
												),
												'value'        => 'fw-top-social-right',
											),
										),
										'no'  => array(),
									),
									'show_borders' => false,
								),
							),
							'no'  => array(),
						),
						'show_borders' => false,
					),
					'search_group_typography' => array(
						'attr'    => array( 'class' => 'border-bottom-none' ),
						'type'    => 'group',
						'options' => array(
							'enable_search' => array(
								'type'         => 'multi-picker',
								'label'        => false,
								'desc'         => false,
								'picker'       => array(
									'selected_value' => array(
										'label'        => esc_html__( 'Search', 'start' ),
										'desc'         => esc_html__( 'Enable search?', 'start' ),
										'type'         => 'switch',
										'right-choice' => array(
											'value' => 'yes',
											'label' => esc_html__( 'Yes', 'start' )
										),
										'left-choice'  => array(
											'value' => 'no',
											'label' => esc_html__( 'No', 'start' )
										),
										'value'        => 'no',
									)
								),
								'choices'      => array(
									'yes' => array(
										'search_type'     => array(
											'type'    => 'multi-picker',
											'label'   => false,
											'desc'    => false,
											'picker'  => array(
												'selected' => array(
													'label'   => esc_html__( 'Type', 'start' ),
													'desc'    => esc_html__( 'Select your prefered search type', 'start' ),
													'type'    => 'select',
													'value'   => 'fw-input-search',
													'choices' => array(
														'fw-input-search' => esc_html__( 'Input Search', 'start' ),
														'fw-mini-search'  => esc_html__( 'Icon Search', 'start' ),
													),
												)
											),
											'choices' => array(
												'fw-input-search' => array(),
												'fw-mini-search'  => array(),
											)
										),
										'search_position' => array(
											'label'   => esc_html__( 'Position', 'start' ),
											'desc'    => esc_html__( 'Select the search position', 'start' ),
											'type'    => 'select',
											'value'   => 'top_bar',
											'choices' => array(
												'top_bar'  => esc_html__( 'Top Bar', 'start' ),
												'menu_bar' => esc_html__( 'Menu Bar', 'start' ),
											),
										),
									),
									'no'  => array(),
								),
								'show_borders' => false,
							),
						)
					),
				)
			)
		)
	),
	'footer'          => array(
		'title'   => esc_html__( 'Footer', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'footer_settings' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'show_footer_widgets' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'selected_value' => array(
								'label'        => esc_html__( 'Footer Widgets', 'start' ),
								'desc'         => esc_html__( 'Show footer widgets?', 'start' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'start' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'start' )
								),
								'value'        => 'no',
							)
						),
						'choices'      => array(
							'yes' => array(
								'number_of_columns' => array(
									'label'   => esc_html__( 'Number of Columns', 'start' ),
									'desc'    => esc_html__( 'Select the number of columns', 'start' ),
									'help'    => sprintf( "%s", esc_html__( 'You can set the widgets displayed in the footer from the', 'start' ) . ' <a target="_blank" href="' . $admin_url . 'widgets.php">' . esc_html__( 'Widgets section', 'start' ) . '</a> ' . esc_html__( 'under Appearance.', 'start' ) ),
									'type'    => 'short-select',
									'value'   => 'footer-cols-3',
									'choices' => array(
										'footer-cols-3' => esc_html__( '3', 'start' ),
										'footer-cols-4' => esc_html__( '4', 'start' ),
									),
								),
								'footer_widgets_bg' => array(
									'type'         => 'multi-picker',
									'label'        => false,
									'desc'         => false,
									'picker'       => array(
										'background' => array(
											'label'   => esc_html__( 'Background', 'start' ),
											'desc'    => esc_html__( 'Select the background for your widget area', 'start' ),
											'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
											'type'    => 'radio',
											'choices' => array(
												'none'  => esc_html__( 'None', 'start' ),
												'image' => esc_html__( 'Image', 'start' ),
												'color' => esc_html__( 'Color', 'start' ),
											),
											'value'   => 'none'
										),
									),
									'choices'      => array(
										'none'  => array(),
										'color' => array(
											'background_color' => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select the background color', 'start' ),
												'help'    => esc_html__( 'The default color palette can be changed from the', 'start' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings&_focus_tab=fw-options-tab-colors_tab">' . esc_html__( 'Colors section', 'start' ) . '</a> ' . esc_html__( 'found in the Theme Settings page', 'start' ),
												'value'   => '',
												'choices' => $start_color_settings,
												'type'    => 'color-palette'
											),
										),
										'image' => array(
											'background_image' => array(
												'label'   => '',
												'type'    => 'background-image',
												'choices' => array(//	in future may will set predefined images
												)
											),
											'background_color' => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select the background color', 'start' ),
												'help'    => esc_html__( 'The default color palette can be changed from the', 'start' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings&_focus_tab=fw-options-tab-colors_tab">' . esc_html__( 'Colors section', 'start' ) . '</a> ' . esc_html__( 'found in the Theme Settings page', 'start' ),
												'value'   => '',
												'choices' => $start_color_settings,
												'type'    => 'color-palette'
											),
											'repeat'           => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select how will the background repeat', 'start' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => 'no-repeat',
												'choices' => array(
													'no-repeat' => esc_html__( 'No-Repeat', 'start' ),
													'repeat'    => esc_html__( 'Repeat', 'start' ),
													'repeat-x'  => esc_html__( 'Repeat-X', 'start' ),
													'repeat-y'  => esc_html__( 'Repeat-Y', 'start' ),
												)
											),
											'bg_position_x'    => array(
												'label'   => esc_html__( 'Position', 'start' ),
												'desc'    => esc_html__( 'Select the horizontal background position', 'start' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => '',
												'choices' => array(
													'left'   => esc_html__( 'Left', 'start' ),
													'center' => esc_html__( 'Center', 'start' ),
													'right'  => esc_html__( 'Right', 'start' ),
												)
											),
											'bg_position_y'    => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select the vertical background position', 'start' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => '',
												'choices' => array(
													'top'    => esc_html__( 'Top', 'start' ),
													'center' => esc_html__( 'Center', 'start' ),
													'bottom' => esc_html__( 'Bottom', 'start' ),
												)
											),
											'bg_size'          => array(
												'label'   => esc_html__( 'Size', 'start' ),
												'desc'    => esc_html__( 'Select the background size', 'start' ),
												'help'    => esc_html__( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'start' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => '',
												'choices' => array(
													'auto'    => esc_html__( 'Auto', 'start' ),
													'cover'   => esc_html__( 'Cover', 'start' ),
													'contain' => esc_html__( 'Contain', 'start' ),
												)
											)
										),
									),
									'show_borders' => false,
								)
							),
						),
						'show_borders' => false,
					),
					'footer_socials'      => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'selected_value' => array(
								'type'         => 'switch',
								'value'        => 'no',
								'label'        => esc_html__( 'Footer Socials', 'start' ),
								'desc'         => esc_html__( 'Display footer social icons?', 'start' ),
								'help'         => sprintf( "%s", esc_html__( 'Your social links can be set from the', 'start' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings#fw-options-tab-social-options">' . esc_html__( 'Social Profiles', 'start' ) . '</a> ' . esc_html__( 'section under the General tab.', 'start' ) ),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'start' ),
								),
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'start' ),
								)
							)
						),
						'choices' => array(
							'yes' => array(
								'footer_icon_size' => array(
									'type'  => 'short-text',
									'label' => esc_html__( 'Icon Size', 'start' ),
									'desc'  => esc_html__( 'Enter icon size in pixels. Ex: 16', 'start' ),
									'value' => '16',
								),
							)
						)
					),
					'copyright_group'     => array(
						'type'    => 'group',
						'attr'    => array( 'class' => 'border-bottom-none' ),
						'options' => array(
							'copyright'          => array(
								'label' => esc_html__( 'Copyright', 'start' ),
								'desc'  => esc_html__( 'Please enter the copyright text', 'start' ),
								'type'  => 'textarea',
								'value' => 'Magazine WordPress Theme made by <a rel="nofollow" href="https://themefuse.com/" target="_blank">ThemeFuse</a>',
							),
							'copyright_position' => array(
								'label'   => esc_html__( 'Position', 'start' ),
								'desc'    => esc_html__( 'Select the copyright position', 'start' ),
								'type'    => 'image-picker',
								'value'   => '',
								'choices' => array(
									'fw-copyright-left'   => array(
										'small' => array(
											'height' => 50,
											'src'    => $template_directory . '/assets/img/unyson/image-picker/left-position.jpg',
											'title'  => esc_html__( 'Left', 'start' )
										),
									),
									'fw-copyright-center' => array(
										'small' => array(
											'height' => 50,
											'src'    => $template_directory . '/assets/img/unyson/image-picker/center-position.jpg',
											'title'  => esc_html__( 'Center', 'start' )
										),
									),
									'fw-copyright-right'  => array(
										'small' => array(
											'height' => 50,
											'src'    => $template_directory . '/assets/img/unyson/image-picker/right-position.jpg',
											'title'  => esc_html__( 'Right', 'start' )
										),
									),
								),
							),
							'html_label'         => array(
								'type'  => 'html',
								'html'  => '',
								'value' => '',
								'label' => esc_html__( 'Spacing', 'start' ),
							),
							'copyright_top'      => array(
								'label' => false,
								'desc'  => esc_html__( 'top', 'start' ),
								'type'  => 'short-text',
								'value' => '50',
							),
							'copyright_bottom'   => array(
								'label' => false,
								'desc'  => esc_html__( 'bottom ', 'start' ),
								'type'  => 'short-text',
								'value' => '50',
							)
						)
					)
				)
			)
		)
	),
	'colors_tab'      => array(
		'title'   => esc_html__( 'Colors', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'color_settings' => array(
				'attr'          => array( 'class' => 'fw-color-picker-palette' ),
				'type'          => 'multi',
				'label'         => false,
				'inner-options' => array(
					'color_1' => array(
						'label' => esc_html__( 'Color Palette', 'start' ),
						'desc'  => esc_html__( 'Color 1', 'start' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'start' ),
						'type'  => 'color-picker',
						'value' => '#d2a74d',
					),
					'color_2' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 2', 'start' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'start' ),
						'type'  => 'color-picker',
						'value' => '#0f1f25',
					),
					'color_3' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 3', 'start' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'start' ),
						'type'  => 'color-picker',
						'value' => '#898d8e',
					),
					'color_4' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 4', 'start' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'start' ),
						'type'  => 'color-picker',
						'value' => '#edf1f2',
					),
					'color_5' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 5', 'start' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'start' ),
						'type'  => 'color-picker',
						'value' => '#141e24',
					),
				)
			)
		)
	),
	'typography_tab'  => array(
		'title'   => esc_html__( 'Typography', 'start' ),
		'type'    => 'tab',
		'options' => array(
			'typography_settings' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'body_text' => array(
						'label' => esc_html__( 'Body Text', 'start' ),
						'type'  => 'tf-typography',
						'value' => array(
							'family'         => 'Crimson Text',
							'size'           => 19,
							'line-height'    => 28,
							'letter-spacing' => 0,
							'color-palette'  => '#5e6467',
						),
					),
					'titles'    => array(
						'label'      => __( 'Titles', 'start' ),
						'type'       => 'tf-typography',
						'value'      => array(
							'family'         => 'Crimson Text',
							'line-height'    => 28,
							'letter-spacing' => 0,
							'color-palette'  => '#5e6467',
						),
						'components' => array(
							'size' => false
						)
					),
				)
			)
		)
	)
);