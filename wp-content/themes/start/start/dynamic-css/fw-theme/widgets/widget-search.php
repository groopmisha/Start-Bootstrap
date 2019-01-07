/* Widget Search */
.widget_search .fw-search-form {
	position: relative;
}
.widget_search .screen-reader-text {
	display: none;
}
.widget_search label {
	display: block;
}
.widget_search .fw-input-search {
	width: 100%;
	line-height: <?php echo esc_js( floatval($start_less_variables['input-padding-y']) *2 ); ?>px;
	border: none;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	background-color: rgba(0, 0, 0, 0.07);
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: <?php echo esc_js($start_less_variables['input-font-size']); ?>;
	padding: <?php echo esc_js($start_less_variables['input-padding-y']); ?> <?php echo esc_js($start_less_variables['input-padding-x']); ?> !important;
	height: auto;
}
.widget_search .fw-input-search::-moz-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
	opacity: 1;
}
.widget_search .fw-input-search:-ms-input-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
}
.widget_search .fw-input-search::-webkit-input-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
}
.widget_search .fw-submit-wrap {
	height: 100%;
	text-align: center;
}
.widget_search .fw-submit-wrap:before {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	transform: translateY(-50%);
}


