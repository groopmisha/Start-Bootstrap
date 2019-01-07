<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$class_width = 'fw-col-sm-' . ceil( 12 / count( $atts['table']['cols'] ) );

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
<div class="fw-price-table  clearfix fw-price-1 <?php echo esc_attr( $atts['class'] ); ?>">
	<?php foreach ( $atts['table']['cols'] as $col_key => $col ): ?>
		<div class="fw-price-col <?php echo ( $col['name'] == 'desc-col' ) ? 'fw-price-caption' : 'fw-price-package'; ?> <?php echo ( $col['name'] == 'highlight-col' ) ? 'fw-price-active' : ''; ?> ">
			<div class="fw-price-inner">
				<?php foreach ( $atts['table']['rows'] as $row_key => $row ): ?>
					<!--heading row type-->
					<?php if ( $row['name'] === 'heading-row' ): ?>
						<?php if ( $col['name'] == 'desc-col' ): ?>
							<?php $value = $atts['table']['content'][ $row_key ][ $col_key ]['textarea']; ?>
							<div class="fw-price-head"></div>
							<div class="fw-price-amount">
								<h2 class="fw-price-caption-title">
									<?php echo esc_attr( empty( $value ) && $col['name'] === 'desc-col' ) ? '&nbsp;' : wp_kses(start_translate( $value ), start_allowed_html() ); ?>
								</h2>
							</div>
						<?php else: ?>
							<div class="fw-price-head <?php echo ( $col['name'] == 'highlight-col' ) ? 'highlight-col' : 'default-col'; ?>">
								<?php $value = $atts['table']['content'][ $row_key ][ $col_key ]['textarea']; ?>
								<h3 class="fw-price-title <?php echo ( $col['name'] == 'highlight-col' ) ? 'highlight-col' : 'default-col'; ?>"
								">
								<?php echo esc_attr( empty( $value ) && $col['name'] === 'desc-col' ) ? '&nbsp;' : wp_kses( start_translate( $value ), start_allowed_html() ); ?>
								</h3>
							</div>
						<?php endif; ?>
						<!--pricing row type-->
					<?php elseif ( $row['name'] === 'pricing-row' ): ?>

						<?php if ( $col['name'] != 'desc-col' ): ?>
							<?php $amount = $atts['table']['content'][ $row_key ][ $col_key ]['amount'] ?>
							<?php $desc = $atts['table']['content'][ $row_key ][ $col_key ]['description']; ?>
							<div class="fw-price-amount">
								<strong class="fw-price-value <?php echo esc_attr( $col['name'] == 'highlight-col' ) ? 'highlight-col' : 'default-col'; ?>"><?php echo esc_attr( empty( $value ) && $col['name'] === 'desc-col' ) ? '&nbsp;' : wp_kses( start_translate( $amount ), start_allowed_html() ); ?></strong>
								<?php if ( $desc != '' ) : ?>
									<span class="fw-price-desc <?php echo esc_attr( $col['name'] == 'highlight-col' ) ? 'highlight-col' : 'default-col'; ?>"><?php echo esc_attr( empty( $value ) && $col['name'] === 'desc-col' ) ? '&nbsp;' : wp_kses( start_translate( $desc ), start_allowed_html() ); ?></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<!--button row type-->
					<?php elseif ( $row['name'] == 'button-row' &&  $col['name'] != 'desc-col' ) : ?>
						<?php $button = fw_ext( 'shortcodes' )->get_shortcode( 'button' ); ?>
						<div class="fw-price-foot <?php if ( $col['name'] == 'highlight-col' ) {
							echo 'highlight-col';
						} elseif ( $col['name'] == 'desc-col' ) {
							echo 'desc-col';
						} else {
							echo 'default-col';
						} ?>">
							<?php if ( false === empty( $atts['table']['content'][ $row_key ][ $col_key ]['button'] ) and false === empty( $button ) ) : ?>
								<?php echo wp_kses( start_translate( $button->render( $atts['table']['content'][ $row_key ][ $col_key ]['button'] ) ), start_allowed_html() ); ?>
							<?php else : ?>
								<span>&nbsp;</span>
							<?php endif; ?>
						</div>
						<!--switch row type    -->
					<?php elseif ( $row['name'] === 'switch-row' ) : ?>

						<?php if ( isset( $atts['table']['content'][ $row_key ][ $col_key ]['switch'] ) ) : ?>
							<?php $value = $atts['table']['content'][ $row_key ][ $col_key ]['switch']; ?>
							<div class="fw-switch-row <?php echo ( $col['name'] == 'highlight-col' ) ? 'highlight-col' : 'default-col'; ?>">
								<span class="fw-itable">
									<span class="fw-icell">
										<i class="fa fw-price-icon-<?php echo esc_attr( $value ); ?>"></i>
									</span>
								</span>
							</div>
						<?php else : ?>
							<?php $value = $atts['table']['content'][ $row_key ][ $col_key ]['textarea']; ?>
							<div class="fw-switch-row <?php echo ( $col['name'] == 'desc-col' ) ? 'desc-col' : ''; ?>">
								<span class="fw-itable">
									<span class="fw-icell <?php if ( $col['name'] == 'highlight-col' ) {
										echo 'highlight-col';
									} elseif ( $col['name'] == 'desc-col' ) {
										echo 'desc-col';
									} else {
										echo 'default-col';
									} ?>">
										<?php echo wp_kses( start_translate( esc_textarea( $value ) ), start_allowed_html() ); ?>
									</span>
								</span>
							</div>
						<?php endif; ?>
						<!-- default row type-->
					<?php elseif ( $row['name'] === 'default-row' ) : ?>
						<div class="fw-price-row <?php if ( $col['name'] == 'highlight-col' ) {
							echo 'highlight-col';
						} elseif ( $col['name'] == 'desc-col' ) {
							echo 'desc-col';
						} else {
							echo 'default-col';
						} ?>">
							<span class="fw-itable">
								<span class="fw-icell <?php if ( $col['name'] == 'highlight-col' ) {
									echo 'highlight-col';
								} elseif ( $col['name'] == 'desc-col' ) {
									echo 'desc-col';
								} else {
									echo 'default-col';
								} ?>">
									<?php $value = $atts['table']['content'][ $row_key ][ $col_key ]['textarea']; ?>
									<?php echo wp_kses( start_translate( esc_textarea( $value ) ), start_allowed_html() ); ?>
								</span>
							</span>
						</div>
					<?php endif; ?>

				<?php endforeach; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>