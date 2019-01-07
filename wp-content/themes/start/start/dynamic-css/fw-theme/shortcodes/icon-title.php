/* Icon Title */
/* -------------------------------------------------- */
/* Icon with Title */
.fw-icon-title {
	text-align:center;
	width: 100%;
	padding: 10px 0;
	position: relative;
}
.fw-icon-title .fw-icon-title-icon,
.fw-icon-title .fw-icon-title-name {
	display: inline-block;
}
.fw-icon-title .fw-icon-title-icon {
	color: <?php echo esc_js($start_less_variables['text-color']); ?>;
	margin: 0 auto;
	width: 42px;
	height: 42px;
	line-height: 40px;
	border: 1px solid <?php echo esc_js($start_less_variables['text-color']); ?>;
	border-radius: 50%;
	text-align: center;
	font-size: 20px;
	display: block;
	text-align: center;
	position: relative;
	overflow: hidden;
}
.fw-icon-title h4.fw-icon-title-text {
	margin: 0;
}
.fw-icon-title h4.fw-icon-title-text a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-style: normal;
	font-weight: 400;
	font-size: 19px;
	letter-spacing: 0px;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.fw-icon-title img {
	width: 100%;
	height: 100%;
	line-height: normal;
}
.fw-icon-title .fw-icon-title-name {
	color: <?php echo esc_js($start_less_variables['text-color']); ?>;
	display: inline-block;
	-ms-word-wrap: break-word;
	word-wrap: break-word;
}
.fw-icon-title .fw-icon-title-name a {
	color: <?php echo esc_js($start_less_variables['text-color']); ?>;
}
.fw-icon-title .fw-custom-icon-image {
	overflow: hidden;
}

/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-icon-title .fw-icon-title-text {
		font-size: 25px!important;
	}
}

