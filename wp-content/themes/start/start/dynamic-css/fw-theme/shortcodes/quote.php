/* Quote */
/* -------------------------------------------------- */
.fw-quote {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin: 0;
}
.fw-quote:after {
	display: none;
}
.fw-quote .fw-quote-text p {
	line-height: 30px;
}
.fw-quote .fw-quote-text *:last-child {
	margin-bottom: 0;
}
.fw-quote .fw-quote-author a {
	line-height: 45px;
}
.fw-quote small.fw-quote-author {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: bold;
	font-style: italic;
	font-size: <?php echo esc_js( floor(floatval($start_less_variables['font-size-base'])*1.06) ); ?>px;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	letter-spacing: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	display: block;
}
.fw-quote small.fw-quote-author span {
	display: block;
}
.fw-quote small.fw-quote-author:before {
	display: none;
}

/* Quote text align */
.fw-quote.fw-quote-left small:before {
	margin-left: 0;
	margin-bottom: 1em;
}
.fw-quote.fw-quote-left:before {
	text-align: left;
}
.fw-quote.fw-quote-left p:first-child:before {
	text-align: left;
}
.fw-quote.fw-quote-right {
	text-align: right;
}
.fw-quote.fw-quote-right small:before {
	float: none;
	margin-right: 0;
	margin-bottom: 1em;
}
.fw-quote.fw-quote-right:before {
	text-align: right;
}
.fw-quote.fw-quote-right p:first-child:before {
	text-align: right;
}
.fw-quote.fw-quote-center {
	text-align: center;
}
.fw-quote.fw-quote-center small:before {
	margin: 5px auto 10px auto;
}
.fw-quote.fw-quote-center:before {
	text-align: center;
}


/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-quote small.fw-quote-author{
		font-size: 18px !important;
	}
	.fw-quote .fw-quote-text {
		font-size: 24px !important;
		line-height: normal !important;
	}
	.fw-quote .fw-quote-text cite {
		font-size: 16px !important;
		line-height: normal !important;
	}
}

