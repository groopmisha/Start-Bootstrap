<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['title'] ) && empty( $atts['subtitle'] ) ) {
	return;
}
$heading = isset( $atts['heading']['selected'] ) ? $atts['heading']['selected'] : 'h2';

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
<div class="fw-heading <?php echo esc_attr( $atts['centered'] ); ?> <?php echo esc_attr( $atts['class'] ); ?>">
	<?php if ( $atts['title'] != '' ) : ?>
	<<?php echo esc_attr( $heading ); ?>
	class="fw-special-title"><?php echo wp_kses( start_translate( esc_attr( $atts['title'] ) ), start_allowed_html() ); ?></<?php echo esc_attr( $heading ); ?>>
<?php endif; ?>

<?php apply_filters( 'filter_theme_special_heading_separator', $atts ); ?>

<?php if ( $atts['subtitle'] != '' ) : ?>
	<div class="fw-special-subtitle"><?php echo wp_kses( start_translate( esc_attr( $atts['subtitle'] ) ), start_allowed_html() ); ?></div>
<?php endif; ?>
</div>