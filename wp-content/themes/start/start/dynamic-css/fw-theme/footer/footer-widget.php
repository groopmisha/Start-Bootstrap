/* Footer Widget */
.fw-footer-widgets {
	position: relative;
	padding-top: <?php echo esc_js($start_less_variables['fw-footer-widgets-padding-top']); ?>;
	padding-bottom: <?php echo esc_js($start_less_variables['fw-footer-widgets-padding-bot']); ?>;
	background-color: <?php echo esc_js($start_less_variables['fw-footer-widgets-bg']); ?>;
	background-image: url(<?php echo esc_js($start_less_variables['fw-footer-widget-bg-image']); ?>);
	background-repeat: <?php echo esc_js($start_less_variables['fw-footer-widget-bg-repeat']); ?>;
	background-position: <?php echo esc_js($start_less_variables['fw-footer-widget-bg-position']); ?>;
	background-size: <?php echo esc_js($start_less_variables['fw-footer-widget-bg-size']); ?>;
}
.fw-footer-widgets .widget-title {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	color: #fff;
	font-size: 23px;
	text-transform: none;
}
.fw-footer-widgets .widget-title span {
	color: #fff;
	font-family: <?php echo wp_kses($start_less_variables['font-family-4'], array()); ?>;
	font-size: 20px ;
	text-transform:none;
	font-style:normal;
	font-weight:400;
	background-color: transparent !important;
}
.fw-footer-widgets .widget-title span:after {
	display: none;
}
.fw-footer-widgets .widget_archive ul li {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-size: 18px;
	line-height: 37px;
	width: 100%;
}
.fw-footer-widgets .widget_archive ul li a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-size: 18px;
	line-height: normal !important;
	font-weight: 400;
}
.fw-footer-widgets .widget_recent_entries ul li a {
	font-family: "Crimson Text";
	font-size: 18px;
	font-weight: 400;
	font-style: normal;
	line-height: 22px;
	letter-spacing: 0px;
	display: block;
	margin-bottom: 10px;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-footer-widgets .widget_recent_entries ul li a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-footer-widgets .widget_recent_entries ul li .post-date {
	color: #C2C2C2;
	font-size: 15px;
}
.fw-footer-widgets .widget,
.fw-footer-widgets .widget li {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.fw-footer-widgets .widget a,
.fw-footer-widgets .widget .comment-author-link a {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.fw-footer-widgets .widget a:hover,
.fw-footer-widgets .widget .comment-author-link a:hover {
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-3'], 10) ); ?>;
}
.fw-footer-widgets .widget_text .textwidget {
	font-size: 17px;
	line-height: 30px;
}

/*Responsive*/
/*Screen 568px*/
@media(max-width:767px){
	.fw-footer-widgets{
		padding-top: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-top'])*0.5) ); ?>px;
		padding-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
	}
}

