<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

//allowed images sizes
$cfg['image_sizes'] = array(
	'landscape'     => array(
		'width'  => 282,
		'height' => 182,
		'crop'   => true
	),
	'gallery-image' => array(
		'width'  => 280,
		'height' => 180,
		'crop'   => true
	)
);

/*
Define if the portfolio custom post will support gallery or not.
$cfg['has-gallery'] = false;
*/
