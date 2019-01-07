<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['tabs'] ) ) {
	return;
}

$id   = uniqid( 'tab-cont-' );
$type = 'fw-tabs-framed fw-tabs-top';

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
<div class="fw-tabs <?php echo esc_attr( $type ); ?> <?php echo esc_attr( $atts['class'] ); ?>">
	<ul class="nav nav-tabs">
		<?php $counter_li = 1; ?>
		<?php foreach ( $atts['tabs'] as $tab ) : ?>
			<li <?php echo ( $counter_li == 1 ) ? 'class="active"' : ''; ?>>
				<a href="#<?php echo esc_attr( $id ) . '-' . esc_attr( $counter_li ); ?>" data-toggle="tab">
					<span><?php echo wp_kses( start_translate( $tab['tab_title'] ), start_allowed_html() ); ?></span>
				</a>
			</li>
			<?php $counter_li ++; ?>
		<?php endforeach; ?>
	</ul>

	<div class="tab-content clearfix">
		<?php $counter_tab = 1; ?>
		<?php foreach ( $atts['tabs'] as $tab ) : ?>
			<div id="<?php echo esc_attr( $id ) . '-' . esc_attr( $counter_tab ); ?>" class="tab-pane fade <?php echo ( $counter_tab == 1 ) ? 'in active' : ''; ?>">
				<?php if ( ! empty( $tab['tab_content_title'] ) ): ?>
					<h5 class="tab-content-title"><?php echo wp_kses( start_translate( $tab['tab_content_title'] ), start_allowed_html() ); ?></h5>
				<?php endif; ?>

				<?php if ( ! empty( $tab['tab_content'] ) ): ?>
					<?php echo wp_kses( esc_textarea( start_translate( $tab['tab_content'] ) ), start_allowed_html() ); ?>
				<?php endif; ?>
			</div>
			<?php $counter_tab ++; ?>
		<?php endforeach; ?>
	</div>
</div>