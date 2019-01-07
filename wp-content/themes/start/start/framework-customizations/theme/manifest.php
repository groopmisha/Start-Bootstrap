<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}
$manifest = array();

$manifest['id']           = 'start';
$manifest['skin']         = 'main';
$manifest['name']         = esc_html__( 'The Start', 'start' );
$manifest['requirements'] = array(
	'wordpress'  => array(
		'min_version' => '4.0',
		/*'max_version' => '1000.0.0'*/
	),
	'framework'  => array(/*'min_version' => '0.0.0',
        'max_version' => '1000.0.0'*/
	),
	'extensions' => array(
		/*'learning' => array(
			'min_version' => '0.0.0',
			'max_version' => '0.0.0'
		),*/
		/*'extension_name' => array(
			'min_version' => '0.0.0',
			'max_version' => '1000.0.0'
		)*/
	)
);

$manifest['supported_extensions'] = array(
	'sidebars'     => array(),
	'portfolio'    => array(),
	'page-builder' => array(),
	'backups'      => array(),
	'forms'        => array(),
	'mailer'       => array(),
	'slider'       => array(),
	'analytics'    => array(),
	'social'       => array(),
	'breadcrumbs'  => array()
);