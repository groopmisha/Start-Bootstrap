/* Map Style */
/* -------------------------------------------------- */
.site .fw-map-canvas .infowindow-title a {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-base'], array()); ?>;
	font-style: <?php echo esc_js($start_less_variables['font-style-base']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-weight-base']); ?>;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: <?php echo esc_js($start_less_variables['line-height-base']); ?>;
	letter-spacing: normal;
	text-decoration: underline;
}
.site .fw-map-canvas .infowindow-title a:hover {
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-1'], 10) ); ?>;
	text-decoration: underline;
}
.site .fw-map-canvas .infowindow-description {
	font-family: <?php echo wp_kses($start_less_variables['font-family-base'], array()); ?>;
	font-style: <?php echo esc_js($start_less_variables['font-style-base']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-weight-base']); ?>;
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*0.85) ); ?>px;
	line-height: <?php echo esc_js($start_less_variables['line-height-base']); ?>;
	letter-spacing: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}

