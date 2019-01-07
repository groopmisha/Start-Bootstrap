/* Widget Text */
.widget_text .textwidget .wp-caption img {
	height: auto;
}
.widget_text .textwidget form select {
	max-width: 100%;
}
.widget_text .textwidget ul {
	list-style-type: inherit;
}
.widget_text .textwidget ul,
.widget_text .textwidget ol {
	padding-left: 20px;
	margin-bottom: 1em;
}
.widget_text .textwidget a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-size: 22px;
	font-weight: 400;
	font-style: normal;
	line-height: 26px;
	letter-spacing: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.widget_text .textwidget a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}

