/* RSS */
.widget_rss .widget-title a {
	color: #b6b8b9;
}
.widget_rss .widget-title a:hover {
	color: #b6b8b9;
}
.widget_rss .widget-title a:first-child {
	float: left;
	margin-right: 5px;
	position: relative;
	top: 10px;
	line-height: 10px;
}
.widget_rss ul li {
	margin-bottom: 1em;
}
.widget_rss ul li .rss-date {
	display: block;
	line-height: 1em;
	font-size: 15px;
	font-weight: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	margin-bottom: 10px;
}
.widget_rss ul li cite {
	color: #b6b8b9;
}
.widget_rss ul li .rsswidget {
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
.widget_rss ul li .rsswidget:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget_rss ul li .rssSummary {
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*0.85) ); ?>px;
}
.widget_rss ul li cite {
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-base']) -1 ); ?>px;
}

