<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$h_title = 'h3';

// image width
$style = 'width: 100%;';

if ( empty( $atts['image'] ) ) {
	$image['img'] = '<img src="' . get_template_directory_uri() . '/assets/img/unyson/no-photo-max-size.jpg' . '" alt="no-image" />';
} else {
	$args  = array(
		'size'     => 'full',
		'return'   => true,
		'img_attr' => array(),
	);
	$image = start_image( $atts['image'], $args );
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
<div class="fw-team <?php echo esc_attr( $atts['class'] ); ?>">
	<div style="<?php echo wp_kses( $style, start_allowed_html() ); ?>" class="fw-team-image fw-block-image-parent">
		<div class="fw-block-image-child"><?php echo do_shortcode( $image['img'] ); ?></div>
	</div>

	<div class="fw-team-inner">
		<div class="fw-team-name">
			<?php if ( $atts['name'] != '' ) : ?>
				<<?php echo esc_attr( $h_title ); ?>><?php echo wp_kses( start_translate( esc_attr( $atts['name'] ) ), start_allowed_html() ); ?></<?php echo esc_attr( $h_title ); ?>>
			<?php endif; ?>
			<?php if ( $atts['job'] != '' ) : ?>
				<span><?php echo wp_kses( start_translate( esc_attr( $atts['job'] ) ), start_allowed_html() ); ?></span>
			<?php endif; ?>
		</div>

		<?php if ( $atts['desc'] != '' ) : ?>
			<div class="fw-team-text"><?php echo do_shortcode( start_translate( esc_textarea( $atts['desc'] ) ) ); ?></div>
		<?php endif; ?>
	</div>
</div>