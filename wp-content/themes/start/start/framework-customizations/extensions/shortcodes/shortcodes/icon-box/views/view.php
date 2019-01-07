<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$title            = $atts['box_title'];
$desc             = $atts['box_desc'];
$icon_type_picker = 'fw-iconbox-2';

// check icon type array
$icon_type = $atts['icon_type'];
// get icon type image class
$icon_img_class = $icon_type['icon-box-img'] == 'icon-class' ? '' : 'fw-iconbox-image-type';

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
<div class="fw-iconbox clearfix <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $icon_type_picker ) . ' ' . esc_attr( $icon_img_class ) ?>">
	<div class="fw-iconbox-image">
		<?php if ( $icon_img_class == 'fw-iconbox-image-type' ) : ?>
			<?php if ( ! empty( $icon_type['upload-icon']['upload-custom-img'] ) ): ?>
				<img src="<?php echo esc_url( $icon_type['upload-icon']['upload-custom-img']['url'] ); ?>" alt=""/>
			<?php endif; ?>
		<?php else: ?>
			<i class="<?php echo esc_attr( $icon_type['icon-class']['icon_class'] ); ?>"></i>
		<?php endif; ?>
	</div>

	<div class="fw-iconbox-aside">
		<?php if ( ! empty( $title ) ) : ?>
			<div class="fw-iconbox-title">
				<h3><?php echo wp_kses( start_translate( esc_attr( $title ) ), start_allowed_html() ); ?></h3>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $desc ) ) : ?>
			<div class="fw-iconbox-text">
				<?php echo do_shortcode( start_translate( esc_textarea( $desc ) ) ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>