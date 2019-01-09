<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start
 */

 /**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

if ( ! function_exists( 'start_action_theme_widgets_init' ) ) :
	/**
	 * Register widget areas (General and Footers widget areas)
	 * @internal
	 */
	function start_action_theme_widgets_init() {
		//shows html before widget
		$beforeWidget = '<aside id="%1$s" class="widget %2$s">';
		//shows html after widget
		$afterWidget = '</aside>';
		//html to wrap widget title
		$beforeTitle = '<h2 class="widget-title"><span>';
		$afterTitle  = '</span></h2>';

		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar-1', 'start' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Widgets under portfolio', 'start' ),
			'before_widget' => '<aside class="bg-dark"><div class="container text-center">',
			'after_widget'  => '</div></aside>',
			'before_title'  => '<div class="call-to-action"><h2>',
			'after_title'   => '</h2></div>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'General Widget Area', 'start' ),
			'id'            => 'sidebar-1',
			'before_widget' => $beforeWidget,
			'after_widget'  => $afterWidget,
			'before_title'  => $beforeTitle,
			'after_title'   => $afterTitle,
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 1', 'start' ),
			'id'            => 'footer-1',
			'before_widget' => $beforeWidget,
			'after_widget'  => $afterWidget,
			'before_title'  => $beforeTitle,
			'after_title'   => $afterTitle,
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 2', 'start' ),
			'id'            => 'footer-2',
			'before_widget' => $beforeWidget,
			'after_widget'  => $afterWidget,
			'before_title'  => $beforeTitle,
			'after_title'   => $afterTitle,
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 3', 'start' ),
			'id'            => 'footer-3',
			'before_widget' => $beforeWidget,
			'after_widget'  => $afterWidget,
			'before_title'  => $beforeTitle,
			'after_title'   => $afterTitle,
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 4', 'start' ),
			'id'            => 'footer-4',
			'before_widget' => $beforeWidget,
			'after_widget'  => $afterWidget,
			'before_title'  => $beforeTitle,
			'after_title'   => $afterTitle,
		) );
	}
endif;
add_action( 'widgets_init', 'start_action_theme_widgets_init' );