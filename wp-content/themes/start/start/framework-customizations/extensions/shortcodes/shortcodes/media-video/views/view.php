<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$video = $atts['video'];
$width = (int) $atts['width'];

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
<?php if ( ! empty( $video ) ) :
	global $wp_embed;

	$width  = ( is_numeric( $width ) && ( $width > 0 ) ) ? $width : '500';
	$height = '300'; // proportional with width of video, but need a default value
	$iframe = $wp_embed->run_shortcode( '[embed width="' . $width . '" height="' . $height . '"]' . trim( $video ) . '[/embed]' );
	?>
	<div class="fw-video <?php echo esc_attr( $atts['class'] ); ?>">
		<?php echo do_shortcode( $iframe ); ?>
	</div>
<?php endif;