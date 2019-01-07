<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$img         = $atts['upload_img'];
$image_size  = $atts['image_size'];
$open_img    = $atts['open_img'];
$ratio_class = '';

if ( $image_size['select_size'] == 'custom' ) {
	$style    = 'width: ' . (int) $image_size['custom']['width'] . 'px;';
	$img_attr = array( 'width' => (int) $image_size['custom']['width'] );

} else {
	$style    = 'width: 100%;';
	$img_attr = array();
}

$ratio = '';
if ( isset( $atts['ratio'] ) ) {
	$ratio = $atts['ratio'];
}

$args = array(
	'size'     => 'full',
	'return'   => true,
	'img_attr' => $img_attr,
	'ratio'    => $ratio
);

$image       = start_image( $img, $args );
$ratio_class = $image['ratio'];

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
<?php if ( ! empty( $img ) ): ?>

	<?php if ( $open_img['icon-box-img'] == 'nothing' ): ?>

		<div class="fw-block-image-parent <?php echo esc_attr( $atts['class'] ); ?>" style="<?php echo wp_kses( $style, start_allowed_html() ); ?>">
			<span class="fw-block-image-child <?php echo esc_attr( $ratio_class ); ?>">
				<?php echo do_shortcode( $image['img'] ); ?>
			</span>
		</div>

	<?php else:
		$a_class = '';
		if ( strpos( $open_img['link']['custom_link'], "#" ) !== false && strlen( $open_img['link']['custom_link'] ) > 1 ) {
			$a_class = 'anchor';
		}

		$open_link = ( $open_img['link']['open'] == 'yes' ) ? "target='_blank'" : '';
		?>
		<div class="fw-block-image-parent fw-overlay-1 fw-block-image-icon <?php echo esc_attr( $atts['class'] ); ?>" style="<?php echo wp_kses( $style, start_allowed_html() ); ?>">
			<a class="fw-block-image-child <?php echo esc_attr( $a_class ); ?> <?php echo esc_attr( $ratio_class ); ?>"
			   href="<?php echo esc_url( $open_img['link']['custom_link'] ); ?>" <?php echo esc_attr( $open_link ); ?>>
				<?php echo do_shortcode( $image['img'] ); ?>
				<div class="fw-block-image-overlay">
					<div class="fw-itable">
						<div class="fw-icell">
							<i class="fw-icon-link"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	<?php endif; ?>

<?php endif;