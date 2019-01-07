/* Special Heading */
/* -------------------------------------------------- */
.fw-heading {
	margin-bottom: 1em;
	position: relative;
	z-index: 50;
}
.fw-heading .fw-special-title {
	margin-bottom: 5px;
	margin-top: 0;
}
.fw-heading .fw-special-subtitle {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	letter-spacing: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.fw-heading .fw-special-title span {
	font-weight: normal;
}
.fw-heading.fw-heading-left {
	text-align: left;
}
.fw-heading.fw-heading-center {
	text-align: center;
}
.fw-heading.fw-heading-right {
	text-align: right;
}

