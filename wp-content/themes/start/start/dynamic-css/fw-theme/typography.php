/* Typography */
/* -------------------------------------------------- */

/* Body text */
body {
	font-family: <?php echo wp_kses($start_less_variables['font-family-base'], array()); ?>;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: <?php echo esc_js($start_less_variables['line-height-base']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-weight-base']); ?>;
	font-style: <?php echo esc_js($start_less_variables['font-style-base']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['font-letter-spacing-base']); ?>;
	color: <?php echo esc_js($start_less_variables['text-color']); ?>;
}

/* Links */
a {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
a:hover,
a:focus,
a:active {
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-1'], 10) ); ?>
}

/* Paragraph */
p {
	margin: 0 0 1em 0;
}
p:last-child {
	margin-bottom: 0;
}

/* Links */
a:hover,
a:focus,
a:active {
	text-decoration: none;
	outline: none;
}

/* Headings */
/* ------------------------- */
h1,
.h1 {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 45px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
h2,
.h2 {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 34px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
h3,
.h3 {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 31px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
h4,
.h4 {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 29px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
h5,
.h5 {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 24px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
h6,
.h6 {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 22px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
	font-weight: normal;
	line-height: 1;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
	margin-top: 10px;
	margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
	font-size: 65%;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
	font-size: 75%;
}

/* text inside Post */
.fw-text h1,
.entry-content h1,
.fw-text h2,
.entry-content h2,
.fw-text h3,
.entry-content h3,
.fw-text h4,
.entry-content h4,
.fw-text h5,
.entry-content h5,
.fw-text h6,
.entry-content h6,
.fw-text .h1,
.entry-content .h1,
.fw-text .h2,
.entry-content .h2,
.fw-text .h3,
.entry-content .h3,
.fw-text .h4,
.entry-content .h4,
.fw-text .h5,
.entry-content .h5,
.fw-text .h6,
.entry-content .h6 {
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.fw-text h1 small,
.entry-content h1 small,
.fw-text h2 small,
.entry-content h2 small,
.fw-text h3 small,
.entry-content h3 small,
.fw-text h4 small,
.entry-content h4 small,
.fw-text h5 small,
.entry-content h5 small,
.fw-text h6 small,
.entry-content h6 small,
.fw-text .h1 small,
.entry-content .h1 small,
.fw-text .h2 small,
.entry-content .h2 small,
.fw-text .h3 small,
.entry-content .h3 small,
.fw-text .h4 small,
.entry-content .h4 small,
.fw-text .h5 small,
.entry-content .h5 small,
.fw-text .h6 small,
.entry-content .h6 small,
.fw-text h1 .small,
.entry-content h1 .small,
.fw-text h2 .small,
.entry-content h2 .small,
.fw-text h3 .small,
.entry-content h3 .small,
.fw-text h4 .small,
.entry-content h4 .small,
.fw-text h5 .small,
.entry-content h5 .small,
.fw-text h6 .small,
.entry-content h6 .small,
.fw-text .h1 .small,
.entry-content .h1 .small,
.fw-text .h2 .small,
.entry-content .h2 .small,
.fw-text .h3 .small,
.entry-content .h3 .small,
.fw-text .h4 .small,
.entry-content .h4 .small,
.fw-text .h5 .small,
.entry-content .h5 .small,
.fw-text .h6 .small,
.entry-content .h6 .small {
	color: #bfbfbf;
}
hr {
	margin: 23px auto;
}
blockquote {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: normal;
	font-size: 19px;
	line-height: 35px;
	font-style: italic;
	border: none;
	padding: 0;
	margin: 1.8em 0 1.8em 0;
	clear: both;
}
blockquote .fw-symbols-quote {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	display: block;
	font-size: 100px;
}
blockquote:after {
	display: block;
	content: "";
	width: 33%;
	height: 1px;
	margin: 1.5em auto 0 auto;
	background-color: #dee0e1;
}
blockquote.fw-quote-position {
	position: relative;
}
blockquote.fw-quote-position .fw-symbols-quote {
	position: absolute;
	z-index: 1;
	width: 50px;
	top: 35%;
	left: 50%;
	text-align: center !important;
}
blockquote.fw-quote-position .fw-quote-text {
	z-index: 4;
	position: relative;
}
blockquote cite {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: bold;
	font-style: normal;
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*1.06) ); ?>px;
	display: block;
	text-align: center;
	margin-top: 0.6em;
}

/* Responsive */
/*Screen 1024px*/
@media (max-width: 1199px) {
	body {
		font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*0.9) ); ?>px;
	}
	h1,
	.h1 {
		font-size: 36px;
	}
	h2,
	.h2 {
		font-size: 25px;
	}
	h3,
	.h3 {
		font-size: 28px;
	}
	h4,
	.h4 {
		font-size: 24px;
	}
	h5,
	.h5 {
		font-size: 21px;
	}
	h6,
	.h6 {
		font-size: 19px;
	}
}
/*Screen 768px*/
@media (max-width: 991px) {
	blockquote cite {
		font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	}
}
/* Screen 568px */
@media (max-width: 767px) {
	body {
		font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*0.88) ); ?>px;
	}
	h1,
	.h1 {
		font-size: 27px;
	}
	h2,
	.h2 {
		font-size: 19px;
	}
	h3,
	.h3 {
		font-size: 21px;
	}
	h4,
	.h4 {
		font-size: 18px;
	}
	h5,
	.h5 {
		font-size: 17px;
	}
	h6,
	.h6 {
		font-size: 16px;
	}
	blockquote {
		font-size: 18px !important;
		line-height: normal !important;
	}
	blockquote cite {
		font-size: 16px !important;
		line-height: normal !important;
	}
}

