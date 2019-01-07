/* Tabs */
/* -------------------------------------------------- */
.fw-tabs .nav-tabs {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: bold;
	font-style: italic;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	letter-spacing: normal;
}
.fw-tabs .nav-tabs li i {
	font-size: 18px;
	position: relative;
	top: 1px;
	margin-right: 5px;
}
.fw-tabs .nav-tabs li img {
	max-width: 18px;
}

/* Framed Tabs */
.fw-tabs-framed .nav-tabs {
	border-bottom: 2px solid #ddd;
}
.fw-tabs-framed .nav-tabs > li {
	padding-top: 0;
	margin-bottom: -2px;
}
.fw-tabs-framed .nav-tabs > li > a {
	border: 2px solid #ddd;
	background-color: #ededed;
	padding: 8px 20px;
	color: #666;
	border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	-webkit-border-radius: 4px 4px 0 0;
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
}
.fw-tabs-framed .nav-tabs > li > a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-tabs-framed .nav-tabs > li > a:before {
	content: '';
	height: 2px;
	background: #ddd;
	position: absolute;
	bottom: -2px;
	left: -2px;
	right: -2px;
}
.fw-tabs-framed .nav-tabs > li.active {
	padding-top: 0;
}
.fw-tabs-framed .nav-tabs > li.active a:before {
	background: #fff;
	border-right: 2px solid #ddd;
	border-left: 2px solid #ddd;
}
.fw-tabs-framed .nav-tabs > li.active > a,
.fw-tabs-framed .nav-tabs > li.active > a:hover,
.fw-tabs-framed .nav-tabs > li.active > a:focus {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	background-color: #fff;
	padding: 8px 20px;
	border: 2px solid #ddd;
	border-bottom: none;
}
.fw-tabs-framed .tab-content {
	background-color: #fff;
	border: 2px solid #ddd;
	border-top: none;
	padding: 20px;
	border-radius: 0 0 4px 4px;
}
.fw-tabs-framed .tab-content p:last-child {
	margin-bottom: 0;
}
.fw-tabs-framed .nav-justified > li {
	padding-top: 0;
	bottom: -2px;
	margin-bottom: -2px;
	padding-right: 2px;
}
.fw-tabs-framed .nav-justified > li:first-child {
	border-left: none;
}
.fw-tabs-framed .nav-justified > li:last-child {
	padding-right: 0;
}
.fw-tabs-framed .nav-justified > li a {
	padding: 8px 20px;
	border-bottom: 2px solid #ddd;
	position: relative;
}

/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-tabs-framed .nav-tabs > li > a span {
		font-size: 19px !important;
		line-height: 19px !important;
	}
	.tab-content .tab-content-title {
		font-size: 25px !important;
		line-height: normal !important;
	}
	.tab-content > .tab-pane {
		font-size: 18px !important;
		line-height: normal !important;
	}
}

/* Screen 320px */
@media(max-width:479px){
	.nav-tabs > li {
		float: none;
	}
}

