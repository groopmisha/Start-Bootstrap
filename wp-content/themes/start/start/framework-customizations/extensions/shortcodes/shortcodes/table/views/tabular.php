<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php
/*
 * you may add the following classes to the `.fw-table` div:
 * `fw-table-bordered`, `fw-table-hover`, `fw-table-striped`
 */
?>
<?php
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
<div class="fw-table fw-table-bordered fw-table-hover fw-table-striped <?php echo esc_attr( $atts['class'] ); ?>">
	<table>
		<?php foreach ( $atts['table']['rows'] as $row_key => $row ) : ?>
			<?php if ( $row['name'] == 'heading-row' ) : ?>
				<thead>
				<tr class="<?php echo esc_attr( $row['name'] ); ?>">
					<?php foreach ( $atts['table']['cols'] as $col_key => $col ) : ?>
						<th class="<?php echo esc_attr( $col['name'] == 'desc-col' ) ? 'table-col-desc' : 'table-col-default'; ?>">
							<?php echo wp_kses( start_translate( esc_textarea( $atts['table']['content'][ $row_key ][ $col_key ]['textarea'] ) ), start_allowed_html() ); ?>
						</th>
					<?php endforeach; ?>
				</tr>
				</thead>
			<?php elseif ( $row['name'] == 'default-row' ) : ?>
				<tr class="<?php echo esc_attr( $row['name'] ); ?>">
					<?php foreach ( $atts['table']['cols'] as $col_key => $col ) : ?>
						<?php if ( $col['name'] == 'desc-col' ): ?>
							<th class="table-col-desc">
								<?php echo wp_kses( start_translate( esc_textarea( $atts['table']['content'][ $row_key ][ $col_key ]['textarea'] ) ), start_allowed_html() ); ?>
							</th>
						<?php else: ?>
							<td>
								<?php echo wp_kses( start_translate( esc_textarea( $atts['table']['content'][ $row_key ][ $col_key ]['textarea'] ) ), start_allowed_html() ); ?>
							</td>
						<?php endif; ?>
					<?php endforeach; ?>
				</tr>
			<?php endif; ?>
		<?php endforeach; ?>
	</table>
</div>