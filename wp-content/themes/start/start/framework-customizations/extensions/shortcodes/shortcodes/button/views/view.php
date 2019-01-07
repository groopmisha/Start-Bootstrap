<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

if ( strpos( $atts['link'], "#" ) !== false && strlen( $atts['link'] ) > 1 ) {
	$atts['class'] .= ' anchor';
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
<a href="<?php echo esc_url( $atts['link'] ); ?>" target="<?php echo esc_attr( $atts['target'] ); ?>"
   class="fw-btn fw-btn-1 fw-btn-md <?php echo esc_attr( $atts['class'] ); ?>">
    <span>
        <?php echo wp_kses( start_translate( esc_attr( $atts['label'] ) ), start_allowed_html() ); ?>
    </span>
</a>