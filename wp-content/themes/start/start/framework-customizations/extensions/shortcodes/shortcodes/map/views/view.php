<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $map_data_attr
 * @var $atts
 * @var $content
 * @var $tag
 */
if ( ! isset( $atts['map_pin'] ) || empty( $atts['map_pin'] ) ) {
	$map_data_attr['data-map-pin'] = json_encode( array( 'url' => start_include_file_from_child( '/assets/img/unyson/map-pin.png' ) ) );
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
<div class="wrap-map fw-map <?php echo esc_attr( $atts['class'] ); ?>" <?php echo start_attr_to_html( $map_data_attr ); ?>>
	<div class="fw-map-canvas map"></div>
</div>