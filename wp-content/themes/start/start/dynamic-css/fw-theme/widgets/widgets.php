/* WP Widgets Layout */
/* -------------------------------------------------- */

.widget {
	margin-bottom: 65px;
	font-size: 18px;
	line-height: <?php echo esc_js( floatval($start_less_variables['line-height-base']) -2 ); ?>px;
}
.widget p a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-size: 22px;
	font-weight: 400;
	font-style: normal;
	line-height: 26px;
	letter-spacing: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.widget p a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget:last-child {
	margin-bottom: 0;
}
.widget .widget-title {
	margin: 0 0 20px 0;
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: normal;
	font-style: normal;
	font-size: 15px;
	line-height: 40px;
	position: relative;
	color: #b6b8b9;
	letter-spacing: 0;
}
.widget .widget-title span {
	background-color: <?php echo esc_js($start_less_variables['container-bg']); ?>;
	display: inline-block;
	padding-right: 10px;
	font-family: "Montserrat";
	font-size: 13px;
	font-weight: 500;
	text-transform: uppercase;
}
.widget .widget-title span:after {
	content: "";
	border-bottom: 1px solid #dee0e1;
	left: 0;
	position: absolute;
	right: 0;
	top: 50%;
	z-index: -1;
}
.widget .post-date {
	display: block;
	line-height: 1em;
	font-size: 15px;
	font-weight: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	margin-bottom: 10px;
}
.widget ul {
	list-style: none;
	overflow: hidden;
	padding-left: 0;
	margin: 0;
}
.widget div[class*='fw-btn-'] a {
	text-align: left;
	font-style: italic;
}
.widget div[class*='fw-btn-'] a span:before {
	font-family: 'FontAwesome';
	font-style: normal;
	margin-right: 6px;
}
.fw-sidebar .widget:first-child,
.fw-footer .fw-col-md-3 .widget:first-child,
.fw-footer .fw-col-md-4 .widget:first-child {
	margin-top: 0;
}

/* General Widget Responsive */
/* Screen 1024px */
@media (max-width: 1199px) {
	.widget .widget-title {
		font-size: 23px;
	}
}
/* Screen 768px */
@media (max-width: 991px) {
	.widget {
		margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.7) ); ?>px;
	}
	.widget .widget-title {
		margin-bottom: 25px;
	}
}

