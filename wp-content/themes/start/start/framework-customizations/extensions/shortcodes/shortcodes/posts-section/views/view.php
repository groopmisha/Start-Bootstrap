<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

$type = $atts['type']['selected'];

$posts_per_page = start_post_types_posts_per_page( $type );
if ( isset( $atts['type'][ $type ]['posts_number'] ) ) {
	$posts_per_page = (int) $atts['type'][ $type ]['posts_number'];

	if ( $posts_per_page == 0 ) {
		$posts_per_page = start_post_types_posts_per_page( $type );
	}
}

// for desktop
if ( isset( $atts['responsive']['desktop_display']['selected'] ) && $atts['responsive']['desktop_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-desktop-hide-element';
}

// for tablet landscape
if ( isset( $atts['responsive']['tablet_landscape_display']['selected'] ) && $atts['responsive']['tablet_landscape_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-landscape-hide-element';
}

// for tablet portrait
if ( isset( $atts['responsive']['tablet_display']['selected'] ) && $atts['responsive']['tablet_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-hide-element';
}

// for display on smartphone
if ( isset( $atts['responsive']['smartphone_display']['selected'] ) && $atts['responsive']['smartphone_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-mobile-hide-element';
}
?>
<div class="fw-shortcode-post-section <?php echo esc_attr( $atts['class'] ); ?>">
	<?php
	set_query_var( 'posts_section_atts', array(
		'category'       => $atts['category'],
		'posts_per_page' => $posts_per_page,
	) );

	get_template_part( 'templates/posts-sections/' . $type );
	?>
</div>