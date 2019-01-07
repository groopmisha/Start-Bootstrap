/* Top bar */
.fw-top-bar {
	text-align: right;
	background-color: transparent;
	padding: 10px 0;
	line-height: 24px;
	font-size: 16px;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.fw-top-bar .fw-container {
	z-index: 101;
}
.fw-top-bar a {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.fw-top-bar a:hover {
	text-decoration: underline;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.fw-top-bar .fw-text-top-bar {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	letter-spacing: normal;
	font-weight: normal;
	font-family: <?php echo wp_kses($start_less_variables['font-family-base'], array()); ?>;
	font-style: normal;
	text-align: left;
	display: inline-block;
}
.fw-top-bar .fw-text-top-bar a {
	font-style:italic;
}
.fw-top-bar .fw-top-bar-social {
	line-height: <?php echo esc_js($start_less_variables['fw-top-bar-font-size-social']); ?>;
	display: inline-block;
}
.fw-top-bar .fw-top-bar-social a {
	font-size: <?php echo esc_js($start_less_variables['fw-top-bar-font-size-social']); ?>;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin-left: 10px;
}
.fw-top-bar .fw-top-bar-social a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-top-bar .fw-top-bar-social a:first-child {
	margin-left: 0;
}

/*----> Responsive <---- */
/* Screen 568px */
@media(max-width:767px){
	.fw-top-bar .fw-top-bar-social a {
		margin-left: 15px;
	}
}

