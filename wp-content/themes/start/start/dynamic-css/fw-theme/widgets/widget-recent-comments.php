/* Recent Comments */
.widget_recent_comments ul li {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-size: 18px;
	letter-spacing: 0;
	margin-bottom: 1em;
	font-weight: normal;
	font-style: italic;
	color: #b6b8b9;
}
.widget_recent_comments ul li:last-child {
	margin-bottom: 0;
}
.widget_recent_comments ul li a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-size: 22px;
	font-weight: 400;
	font-style: normal;
	line-height: 26px;
	letter-spacing: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.widget_recent_comments ul li a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget_recent_comments ul li .comment-author-link a,
.widget_recent_comments ul li .comment-author-link {
	font-size: 22px;
	line-height: 26px;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}

