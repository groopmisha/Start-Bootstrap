<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'type'    => 'box',
		'title'   => '',
		'options' => array(
			'id'       => array(
				'type'  => 'hidden',
				'value' => uniqid( 'contact-form-' )
			),
			'builder'  => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Form Fields', 'start' ),
				'options' => array(
					'form' => array(
						'label' => false,
						'type'  => 'form-builder',
						'value' => array(
							'json' => json_encode( array(
								array(
									'type'      => 'form-header-title',
									'shortcode' => 'form_header_title',
									'width'     => '',
									'options'   => array(
										'title'    => '',
										'subtitle' => '',
									)
								)
							) )
						)
					),
				),
			),
			'settings' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Settings', 'start' ),
				'options' => array(
					'settings-options' => array(
						'title'   => esc_html__( 'Options', 'start' ),
						'type'    => 'tab',
						'options' => array(
							'form_text_settings'  => array(
								'type'    => 'group',
								'options' => array(
									'subject-group'       => array(
										'type'    => 'group',
										'options' => array(
											'subject_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Subject Message', 'start' ),
												'desc'  => esc_html__( 'This text will be used as subject message for the email', 'start' ),
												'value' => esc_html__( 'New message', 'start' ),
											),
										)
									),
									'submit-button-group' => array(
										'type'    => 'group',
										'attr'    => array( 'class' => 'fw-form-button-dashboard' ),
										'options' => array(
											'button_options' => array(
												'attr'          => array(
													'data-advanced-for' => 'button-options',
													'class'             => 'fw-advanced-button'
												),
												'type'          => 'popup',
												'label'         => esc_html__( 'Custom Style', 'start' ),
												'desc'          => esc_html__( 'Change the style / typography of this button', 'start' ),
												'button'        => esc_html__( 'Styling', 'start' ),
												'size'          => 'medium',
												'popup-options' => array(
													'label-group' => array(
														'type'    => 'group',
														'options' => array(
															'label' => array(
																'label' => esc_html__( 'Label', 'start' ),
																'attr'  => array( 'class' => 'button-advanced' ),
																'desc'  => esc_html__( 'This is the text that appears on your button', 'start' ),
																'type'  => 'text',
																'value' => 'Submit'
															),
														)
													)
												),
											)
										)
									),
									'submit_button_text'  => array(
										'type'  => 'html',
										'label' => false,
										'desc'  => '',
										'value' => '',
										'html'  => '',
									),
									'success-group'       => array(
										'type'    => 'group',
										'options' => array(
											'success_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Success Message', 'start' ),
												'desc'  => esc_html__( 'This text will be displayed when the form will successfully send', 'start' ),
												'value' => esc_html__( 'Message sent!', 'start' ),
											),
										)
									),
									'failure_message'     => array(
										'type'  => 'text',
										'label' => esc_html__( 'Failure Message', 'start' ),
										'desc'  => esc_html__( 'This text will be displayed when the form will fail to be sent', 'start' ),
										'value' => esc_html__( 'Oops something went wrong.', 'start' ),
									),
								),
							),
							'form_email_settings' => array(
								'type'    => 'group',
								'options' => array(
									'email_to' => array(
										'type'  => 'text',
										'label' => esc_html__( 'Email To', 'start' ),
										'help'  => esc_html__( 'We recommend you to use an email that you verify often', 'start' ),
										'desc'  => esc_html__( 'The form will be sent to this email address.', 'start' ),
									),
								),
							),
						)
					),
					'mailer-options'   => array(
						'title'   => esc_html__( 'Mailer', 'start' ),
						'type'    => 'tab',
						'options' => array(
							'mailer' => array(
								'label' => false,
								'type'  => 'mailer'
							)
						)
					)
				),
			)
		)
	)
);