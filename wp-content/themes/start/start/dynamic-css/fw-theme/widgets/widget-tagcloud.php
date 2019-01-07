/* Widget TagCloud */
.widget_tag_cloud {}
.widget_tag_cloud .tagcloud a,
.fw-tag-links a {
	display: inline-block;
	font-size: 11px !important;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	color: #fff !important;
	height: 32px;
	line-height: 32px;
	padding: 0 10px;
	margin: 8px;
	background-color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	border-radius: 0 3px 3px 0;
	position: relative;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.widget_tag_cloud .tagcloud a:before,
.fw-tag-links a:before {
	content: '';
	width: 0;
	height: 0;
	border-top: 16px solid transparent;
	border-right: 10px solid <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	border-bottom: 16px solid transparent;
	position: absolute;
	top: 0;
	left: -10px;
	box-shadow: 2px 0 0 -1px <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.widget_tag_cloud .tagcloud a:after,
.fw-tag-links a:after {
	content: '';
	width: 6px;
	height: 6px;
	background-color: #fff;
	border-radius: 50%;
	position: absolute;
	left: -2px;
	top: 13px;
}
.widget_tag_cloud .tagcloud a:hover,
.fw-tag-links a:hover {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	color: #fff;
}
.widget_tag_cloud .tagcloud a:hover:before,
.fw-tag-links a:hover:before {
	border-right-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	box-shadow: 2px 0 0 -1px <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}

