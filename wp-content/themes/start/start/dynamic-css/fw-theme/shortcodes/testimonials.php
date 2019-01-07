/* Testimonails */
/* -------------------------------------------------- */
.fw-testimonials {
	position: relative;
	opacity: 1;
	-webkit-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.fw-testimonials.hide-slider {
	height: 1px;
	overflow: hidden;
	opacity: 0;
}
.fw-testimonials.hide-slider .fw-slider-item img {
	visibility: hidden;
}
.fw-testimonials.hide-slider .fw-slider-prev,
.fw-testimonials.hide-slider .fw-slider-next,
.fw-testimonials.hide-slider .fw-slider-pagination,
.fw-testimonials.hide-slider .fw-slider-caption {
	opacity: 0 !important;
}
.fw-testimonials .fw-testimonials-item {
	position: relative;
}
.fw-testimonials .fw-testimonials-text {
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-base'], array()); ?>;
	font-style: italic;
	font-weight: <?php echo esc_js($start_less_variables['font-weight-base']); ?>;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	font-style: italic;
}
.fw-testimonials .fw-testimonials-text p {
	margin-bottom: 1.4em;
}
.fw-testimonials .fw-testimonials-text p:last-child {
	margin-bottom: 0;
}
.fw-testimonials .prev,
.fw-testimonials .next {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	height: 40px;
	line-height: 40px;
	font-size: 40px;
	text-align: center;
	font-weight: normal;
	opacity: 0.3;
}
.fw-testimonials .prev:hover,
.fw-testimonials .next:hover {
	opacity: 0.4
}
.fw-testimonials .prev:active,
.fw-testimonials .next:active {
	margin-top: 1px;
	opacity: 0.4
}
.fw-testimonials .prev i:before {
	content: "\f104";
}
.fw-testimonials .next i:before {
	content: "\f105";
}
.fw-testimonials .fw-testimonials-pagination a {
	width: 10px;
	height: 10px;
	background-color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	display: inline-block;
	margin: 3px;
	border-radius: 50%;
	overflow: hidden;
	opacity: 0.1;
}
.fw-testimonials .fw-testimonials-pagination a.selected,
.fw-testimonials .fw-testimonials-pagination a:hover {
	opacity: 0.3;
}
.fw-testimonials .fw-testimonials-pagination a span {
	display: block;
	text-indent: -300px;
}

/* Testimonials Type 1 */
.fw-testimonials-1 {
	text-align: center;
}
.fw-testimonials-1 .fw-testimonials-item {
	text-align: center;
}
.fw-testimonials-1 .fw-testimonials-avatar img {
	width: 90px;
	height: 90px;
	margin: 0 auto;
	display: inline-block;
	border-radius: 50%;
	box-shadow: 0 0 0 9px #edf1f2;
}
.fw-testimonials-1 .fw-testimonials-text {
	text-align: center;
	padding: 10px 10% 0;
}
.fw-testimonials-1 .fw-testimonials-author {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	font-style: normal;
	padding: 0 10px 0;
}
.fw-testimonials-1 .fw-testimonials-author .author-name {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-style: italic;
	font-size: 31px;
	letter-spacing: normal;
	line-height: 46px;
	display: block;
	font-size: 31px;
	font-style: italic;
}
.fw-testimonials-1 .fw-testimonials-author .author-name strong {
	font-style: normal;
}
.fw-testimonials-1 .fw-testimonials-avatar {
	margin: 22.5px 0;
}
.fw-testimonials-1 .fw-testimonials-author em {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	text-transform: uppercase;
	font-style: normal;
	font-weight: bold;
	font-size: 14px;
}
.fw-testimonials-1 .fw-testimonials-author em:before {
	content: "";
	margin-left: -3px;
}
.fw-testimonials-1 .fw-testimonials-author .fw-testimonials-url {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	text-transform: none;
}
.fw-testimonials-1 .fw-testimonials-author .fw-testimonials-url:before {
	content: " / ";
	margin-left: -3px;
}
.fw-testimonials-1 .prev,
.fw-testimonials-1 .next {
	position: absolute;
	z-index: 2;
	top: 42%;
	font-size: 40px;
}
.fw-testimonials-1 .prev i,
.fw-testimonials-1 .next i {
	position: relative;
	top: -1px;
}
.fw-testimonials-1 .prev:hover,
.fw-testimonials-1 .next:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.fw-testimonials-1 .prev:active,
.fw-testimonials-1 .next:active {
	margin-top: 1px;
}
.fw-testimonials-1 .prev {
	left: 1px;
}
.fw-testimonials-1 .prev i {
	left: -2px;
}
.fw-testimonials-1 .prev i:before {
	content: "\f104";
}
.fw-testimonials-1 .next {
	right: 1px;
}
.fw-testimonials-1 .next i {
	right: -2px;
}
.fw-testimonials-1 .next i:before {
	content: "\f105";
}
.fw-testimonials-1 .fw-testimonials-pagination {
	text-align: center;
	margin-top: 10px;
}

/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-testimonials .fw-testimonials-title{
		font-size: 24px !important;
		line-height: normal !important;
	}
	.fw-testimonials .fw-testimonials-text{
		font-size: 17px !important;
		line-height: normal !important;
	}
	.fw-testimonials .fw-testimonials-author .author-name{
		font-size: 30px !important;
		line-height: normal !important;
	}
	.fw-testimonials .fw-testimonials-author em.author-job,
	.fw-testimonials .fw-testimonials-url,
	.fw-testimonials .fw-testimonials-url a {
		font-size: 16px !important;
		line-height: normal !important;
	}
}

