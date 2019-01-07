<?php

$cfg = array();

//define sidebar positions
$cfg['sidebar_positions'] = array(
	'full'  => array(
		/**
		 * Image from: framework-customizations/extensions/sidebars/images/
		 * (required)
		 */
		'icon_url'        => 'full.png',
		/**
		 * Number of sidebars on page.
		 * The maximum number is 4.
		 * (optional)
		 * (default 0)
		 */
		'sidebars_number' => 0
	),
	'left'  => array(
		/**
		 * Image from: framework-customizations/extensions/sidebars/images/
		 * (required)
		 */
		'icon_url'        => 'left.png',
		/**
		 * Number of sidebars on page.
		 * The maximum number is 4.
		 * (optional)
		 * (default 0)
		 */
		'sidebars_number' => 1
	),
	'right' => array(
		/**
		 * Image from: framework-customizations/extensions/sidebars/images/
		 * (required)
		 */
		'icon_url'        => 'right.png',
		/**
		 * Number of sidebars on page.
		 * The maximum number is 4.
		 * (optional)
		 * (default 0)
		 */
		'sidebars_number' => 1
	)
);

/**
 * Array that will be passed to register_sidebar($args)
 * Should be without 'id' and 'name'.
 * Will be used for all dynamic sidebars.
 */
$cfg['dynamic_sidebar_args'] = array(
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title"><span>',
	'after_title'   => '</span></h1>',
);

