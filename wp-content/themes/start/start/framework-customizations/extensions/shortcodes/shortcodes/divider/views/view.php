<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( $atts['divider_size']['size'] == 'custom' ) {
	$size           = '';
	$custom_spacing = 'padding-top:' . (int) $atts['divider_size']['custom']['margin_top'] . 'px;' . ' margin-bottom:' . (int) $atts['divider_size']['custom']['margin_bottom'] . 'px;';
} else {
	$size           = $atts['divider_size']['size'];
	$custom_spacing = '';
}

if ( $atts['type'] == 'fw-divider-space' ) {
	$line_class = '';
} else {
	$line_class = 'fw-divider-line';
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
<div class="fw-divider <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $atts['type'] ); ?> <?php echo esc_attr( $line_class ); ?> <?php echo esc_attr( $size ); ?>"<?php echo 'style=" ' . esc_attr( $custom_spacing ) . '"'; ?> ></div>
