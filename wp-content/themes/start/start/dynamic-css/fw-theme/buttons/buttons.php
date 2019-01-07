/* Buttons Layout */
/* -------------------------------------------------- */
.fw-btn {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array() ); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: 13px;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	letter-spacing: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	display: inline-block;
	margin-bottom: 0;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	text-decoration: none;
	white-space: nowrap;
	outline: none;
	position: relative;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	max-width: 100%;
}
.fw-btn span {
	position: relative;
	top: 1px;
}
.fw-btn:hover,
.fw-btn:focus {
	text-decoration: none;
	box-shadow: none;
	outline: none;
}

