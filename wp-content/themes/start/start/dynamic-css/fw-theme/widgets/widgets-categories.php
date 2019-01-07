/* Widget Categories, Widget Menu, Widget Meta & Widget Pages */

.widget_categories ul > li,
.widget_meta ul > li,
.widget_pages ul > li,
.widget_nav_menu ul > li {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-style: italic;
}
.widget_categories ul > li a,
.widget_meta ul > li a,
.widget_pages ul > li a,
.widget_nav_menu ul > li a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-4'], array()); ?>;
	font-size: 18px;
	font-weight: 700;
	font-style: normal;
	line-height: 40px;
	letter-spacing: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.widget_categories ul > li a:hover,
.widget_meta ul > li a:hover,
.widget_pages ul > li a:hover,
.widget_nav_menu ul > li a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget_categories ul > li ul,
.widget_meta ul > li ul,
.widget_pages ul > li ul,
.widget_nav_menu ul > li ul {
	margin-bottom: 0.3em;
}
.widget_categories ul > li ul li:before,
.widget_meta ul > li ul li:before,
.widget_pages ul > li ul li:before,
.widget_nav_menu ul > li ul li:before {
	content: '\f148';
	font-family: 'FontAwesome';
	font-style: normal;
	display: inline-block;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin-right: 20px;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-o-transform: rotate(90deg);
}
.widget_nav_menu .screen-reader-text {
	display: none;
}
.widget_nav_menu .sub-menu-has-icons .fa {
	margin-right: 10px;
}
.widget_pages ul li a {
	line-height: 33px;
}

