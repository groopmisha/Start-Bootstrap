<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start
 */

?>
<?php start_html_before(); ?><!doctype html>
<!--[if lt IE 8 ]>
<html <?php language_attributes(); ?> class="ie7"><![endif]-->
<!--[if IE 8 ]>
<html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html <?php language_attributes(); ?> class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<?php start_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php start_head_bottom(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php start_body_top(); ?>
<div id="page-top" class="hfeed site">
	<?php start_header_before(); ?>
	<?php get_template_part( 'templates/headers/header' ); //Display theme header ?>
	<?php start_header_after(); ?>
	<div id="main" class="site-main">

	