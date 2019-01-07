/* Accordion */
/* -------------------------------------------------- */

.fw-accordion .panel {
	border-radius: 0;
	border-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-accordion h4.panel-title{
	position: relative;
	font-size: 15px;
}
.fw-accordion .panel-title {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 29px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.fw-accordion .panel-title a {
	display: block;
}
.fw-accordion .panel-title a:before {
	font-family: FontAwesome;
	content: "\f068";
	display: inline-block;
	margin-left: 3px;
	position: absolute;
	right: 0;
	top: 50%;
	font-weight: normal;
	text-align: center;
	font-size: 14.11px;
	margin-top: -8.5px;
	width: 17px;
	height: 17px;
	line-height: 19px;
}
.fw-accordion .panel-title a.collapsed:before {
	content: "\f067";
}
.fw-accordion .panel-body{
	padding: 15px 20px;
}
.fw-accordion .panel-body *:last-child {
	margin-bottom: 0;
}
.fw-accordion .panel-heading {
	padding: 5px 15px;
	border-bottom: 1px solid transparent;
	border-radius: 0;
	background: #fbf4e9 none repeat scroll 0% 0%;
}
.fw-accordion .panel-group .panel {
	border-radius: 0;
	border-color: #bfbfbf;
}
.panel-body * {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}

/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-accordion .panel-title a{
		font-size: 18px !important;
		line-height: normal !important;
	}
	.panel-body {
		font-size: 15px !important;
		line-height: normal !important;
	}
}

