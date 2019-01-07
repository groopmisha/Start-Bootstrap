<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) :
	$footer_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'footer_settings' ) : array();
	$number_of_columns = isset( $footer_settings['show_footer_widgets']['yes']['number_of_columns'] ) ? $footer_settings['show_footer_widgets']['yes']['number_of_columns'] : 'footer-cols-4';

	// footer widgets overlay
	$overlay_style_footer_widgets = '';
	if ( isset( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['overlay_options']['overlay'] ) && $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['overlay_options']['overlay'] == 'yes' && $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['background'] == 'image' ) {
		$overlay_bg = $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['overlay_options']['yes']['background']['id'];
		$opacity    = ( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['overlay_options']['yes']['overlay_opacity_image'] ) / 100;
		if ( $overlay_bg == 'fw-custom' && ! empty( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['overlay_options']['yes']['background']['color'] ) ) {
			$overlay_style_footer_widgets = '<div class="fw-main-row-overlay" style="background-color: ' . $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['overlay_options']['yes']['background']['color'] . '; opacity: ' . $opacity . ';"></div>';
		} else {
			$overlay_style_footer_widgets = '<div class="fw-main-row-overlay the_journal_bg_' . $overlay_bg . '" style="opacity: ' . $opacity . ';"></div>';
		}
	}
	?>
	<div class="fw-footer-widgets footer-cols-4">
		<?php echo do_shortcode( $overlay_style_footer_widgets ); ?>
		<div class="fw-inner">
			<div class="fw-container">
				<div class="fw-row">
					<?php
					if ( $number_of_columns == 'footer-cols-4' ) {
						$column_class = 'fw-col-md-3';
						$col_number   = 4;
					} else {
						$column_class = 'fw-col-md-4';
						$col_number   = 3;
					}
					for ( $i = 1; $i <= $col_number; $i ++ ): $footer_sidebar = 'footer-' . $i; ?>
						<div class="<?php echo esc_attr( $column_class ); ?>">
							<?php dynamic_sidebar( $footer_sidebar ); ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>