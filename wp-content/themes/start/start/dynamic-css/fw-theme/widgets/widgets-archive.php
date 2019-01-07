/* widget archive */
.widget_archive ul li {
	font-style: italic;
	font-size: 0.95em;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.widget_archive ul li a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-4'], array()); ?>;
	font-size: 18px;
	font-weight: 700;
	font-style: normal;
	line-height: 54px;
	letter-spacing: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.widget_archive ul li a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}

/* Responsive */
@media (min-width: 1200px) {
	.widget_archive ul li {
		float: left;
		width: 50%;
		font-size: 1em;
	}
}
.widget_archive .screen-reader-text {
	display: none;
}

