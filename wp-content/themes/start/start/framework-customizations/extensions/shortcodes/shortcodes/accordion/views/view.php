<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['tabs'] ) ) {
	return;
}

$id         = 'accordion-' . $atts['unique_id'];
$count      = 0;
$active_tab = false;

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
<div class="panel-group fw-accordion <?php echo esc_attr( $atts['class'] ); ?>" id="<?php echo esc_attr( $id ); ?>" role="tablist" aria-multiselectable="true">
	<?php foreach ( $atts['tabs'] as $tab ) :
		$count ++;
		$panel_class   = $icon = '';
		$collapsed     = 'collapsed';
		$aria_expanded = 'false';
		?>
		<div class="panel">
			<div class="panel-heading" role="tab" id="acc-heading-<?php echo esc_attr( $count ); ?>">
				<h4 class="panel-title">
					<a class="<?php echo esc_attr( $collapsed ); ?>" data-toggle="collapse"
					   data-parent="#<?php echo esc_attr( $id ); ?>"
					   href="#acc-tab-<?php echo esc_attr( $id ) . '-' . esc_attr( $count ); ?>"
					   aria-expanded="<?php echo esc_attr( $aria_expanded ); ?>"
					   aria-controls="acc-tab-<?php echo esc_attr( $id ) . '-' . esc_attr( $count ); ?>">
						<?php echo wp_kses( start_translate( esc_attr( $tab['title'] ) ), start_allowed_html() ); ?>
					</a>
				</h4>
			</div>
			<div id="acc-tab-<?php echo esc_attr( $id ) . '-' . esc_attr( $count ); ?>"
				 class="panel-collapse collapse <?php echo esc_attr( $panel_class ); ?>" role="tabpanel"
				 aria-labelledby="acc-heading-<?php echo esc_attr( $count ); ?>">
				<div class="panel-body">
					<?php echo do_shortcode( start_translate( esc_textarea( $tab['content'] ) ) ); ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>