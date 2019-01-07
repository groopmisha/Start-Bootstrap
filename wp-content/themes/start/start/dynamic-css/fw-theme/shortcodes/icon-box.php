/* Icons Box */
/* -------------------------------------------------- */
.fw-iconbox .fw-iconbox-text {
	padding-bottom: 22px;
}
.fw-iconbox .fw-iconbox-text p:last-child {
	margin-bottom: 0;
}
.fw-iconbox .fw-iconbox-image {
	text-align: center;
}
.fw-iconbox .fw-iconbox-image img {
	height: 100%;
}

/* Icon box style */
.fw-iconbox-2 {
	text-align: left;
}
.fw-iconbox-2 .fw-iconbox-image {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	float: left;
	width: 40px;
	font-size: 40px;
	line-height: 40px;
	text-align: center;
	border-radius: 3px;
	position: relative;
}
.fw-iconbox-2 .fw-iconbox-image .fa {
	font-size: 34px;
}
.fw-iconbox-2.fw-iconbox-image-type .fw-iconbox-image {
	width: 40px;
	height: 40px;
}
.fw-iconbox-2 .fw-iconbox-image img {
	border-radius: 3px;
}
.fw-iconbox-2 .fw-iconbox-aside {
	margin-left: 55px;
}
.fw-iconbox-2 .fw-iconbox-aside h3 {
	font-size: 31px;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	line-height: 31px;
}

/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-iconbox .fw-iconbox-title h3 {
		font-size: 25px!important;
		line-height: normal!important;
	}
	.fw-iconbox .fw-iconbox-text {
		font-size: 18px!important;
		line-height: normal!important;
	}
}

