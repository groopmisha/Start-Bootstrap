<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Register menus
 */
$menu_locations = array(
	'primary' => esc_html__( 'Top Primary Menu', 'start' ),
	'header-menu' => esc_html__( 'Header Menu', 'start' ),
);
/**
 * This theme uses wp_nav_menu() in 3 locations.
 */
register_nav_menus( $menu_locations );

global $start_menus;
$start_menus = array(
	'primary' => array(
		'depth'           => 4,
		'container'       => 'nav',
		'container_id'    => 'fw-menu-primary',
		'container_class' => 'fw-site-navigation primary-navigation',
		'menu_class'      => 'fw-nav-menu',
		'theme_location'  => 'primary',
		/*'fallback_cb'     => 'start_select_menu_message',*/
		'fallback_cb'     => '',
		'link_before'     => '<span>',
		'link_after'      => '</span>'
	),
	'header-menu' => array(
		'depth'           => 4,
		'container'       => 'div',
		'container_id'    => 'bs-example-navbar-collapse-1',
		'container_class' => 'collapse navbar-collapse',
		'menu_class'      => 'nav navbar-nav navbar-right',
		'theme_location'  => 'primary',
		/*'fallback_cb'     => 'start_select_menu_message',*/
		'fallback_cb'     => '',
		'link_before'     => '<span>',
		'link_after'      => '</span>'
	)
);

if ( ! function_exists( 'start_nav_menu' ) ) :
	/**
	 * Display the nav menu
	 */
	function start_nav_menu( $menu_type ) {
		global $start_menus;
		if ( isset( $start_menus[ $menu_type ] ) ) {
			wp_nav_menu( $start_menus[ $menu_type ] );
		}
	}
endif;

if ( ! function_exists( 'start_select_menu_message' ) ) :
	/**
	 * Display the select menu message
	 */
	function start_select_menu_message() {
		echo '<div class="topmenu"><p class="fw-primary-menu-message">' . esc_html__( 'Please go to the', 'start' ) . ' <a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" target="_blanck">' . esc_html__( 'Menu', 'start' ) . '</a> ' . esc_html__( 'section, create a  menu and then select the newly created menu from the Theme Locations box from the left.', 'start' ) . '</p></div>';
	}
endif;



