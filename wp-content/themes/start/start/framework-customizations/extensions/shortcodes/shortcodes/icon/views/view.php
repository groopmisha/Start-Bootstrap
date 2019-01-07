<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$icon_type = $atts['icon_type'];

if ( $icon_type['icon-box-img'] == 'icon-class' ) {
	// if icon type class
	$icon      = $icon_type['icon-class']['icon_class'];
	$icon_view = '<i class="' . $icon . '" ></i>';
} else {
	$image_icon_class = 'fw-custom-icon-image';
	//if icon type image
	$icon_image_size = ! empty( $icon_type['upload-icon']['icon_size'] ) ? 'style="width:' . (int) $icon_type['upload-icon']['icon_size'] . 'px;height:' . (int) $icon_type['upload-icon']['icon_size'] . 'px;"' : '';

	$icon      = $icon_type['upload-icon']['upload-custom-img'];
	$icon_view = '<img src="' . esc_url( $icon['url'] ) . '" alt="" ' . $icon_image_size . ' />';
}

$a_class = '';
if ( strpos( $atts['link'], "#" ) !== false && strlen( $atts['link'] ) > 1 ) {
	$a_class = 'anchor';
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
<div class="fw-icon-title clearfix <?php echo esc_attr( $atts['class'] ); ?>">
	<div class="fw-icon-title-name">
        <span class="fw-icon-title-icon">
            <?php if ( $atts['link'] != '' ) : ?>
				<a class="<?php echo esc_attr( $a_class ); ?>" href="<?php echo esc_url( $atts['link'] ); ?>">
                    <?php echo do_shortcode( $icon_view ); ?>
                </a>
            <?php else: ?>
	            <?php echo do_shortcode( $icon_view ); ?>
            <?php endif; ?>
        </span>
		<?php if ( ! empty( $atts['text'] ) ) : ?>
			<?php if ( $atts['link'] != '' ) : ?>
				<h4 class="fw-icon-title-text">
					<a class="<?php echo esc_attr( $a_class ); ?>"
					   href="<?php echo esc_url( $atts['link'] ); ?>"><?php echo wp_kses( start_translate( esc_attr( $atts['text'] ) ), start_allowed_html() ); ?></a>
				</h4>
			<?php else: ?>
				<h4 class="fw-icon-title-text">
					<?php echo wp_kses( start_translate( esc_attr( $atts['text'] ) ), start_allowed_html() ); ?>
				</h4>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>