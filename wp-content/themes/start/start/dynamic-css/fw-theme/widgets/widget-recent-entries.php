/* Recent Entries */
.widget_recent_entries ul li {
	margin-bottom: 1em;
}
.widget_recent_entries ul li a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-4'], array()); ?>;
	font-size: 18px;
	font-weight: 400;
	font-style: normal;
	line-height: 22px;
	letter-spacing: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	display: block;
	margin-bottom: 10px;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.widget_recent_entries ul li a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.widget_recent_entries ul li a em {
	font-size: 20px;
}

