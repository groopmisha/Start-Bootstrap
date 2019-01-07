/* Header Logo */
.fw-wrap-logo {
	font-family: <?php echo wp_kses($start_less_variables['font-family-base'], array()); ?>;
	margin-top: 65px;
	margin-bottom: 65px;
	z-index: 100;
}
.fw-wrap-logo .fw-site-logo {
	display: block;
	text-align: center;
	max-width: 100%;
}
.fw-wrap-logo .fw-site-logo strong {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: normal;
	font-style: normal;
	font-size: 20px;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	letter-spacing: 1px;
	line-height: 20px;
	display: block;
}
.fw-wrap-logo .fw-site-logo span {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: normal;
	font-style: normal;
	font-size: 10px;
	color: #aeaab1;
	letter-spacing: 4px;
	line-height: 10px;
	display: block;
	margin-top: 6px;
}
.fw-wrap-logo.fw-no-subtitle {
	margin-top: 9px;
}

/* Logo Retina & No-Retina */
.fw-logo-retina .fw-site-logo {
	line-height: normal;
	width: <?php echo esc_js( floatval($start_less_variables['fw-menu-logo-width']) /2 ); ?>px;
}