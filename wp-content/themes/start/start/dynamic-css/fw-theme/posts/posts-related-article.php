/* Posts Related Article */
/* -------------------------------------------------- */
.fw-wrap-related-article {
	margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
	padding: 0 15px;
	text-align: justify;
}
.fw-wrap-related-article .fw-related-article-image {
	margin-bottom: 0;
}
.fw-wrap-related-article .fw-title-related {
	display: block;
	position: relative;
	margin-bottom: 40px;
	font-size: 26px;
	text-transform: uppercase;
	font-style: normal;
	margin-top: 0;
}
.fw-wrap-related-article .fw-title-related strong  {
	font-style: normal;
}
.fw-wrap-related-article .fw-related-article {
	padding: 0;
	margin: 0;
}
.fw-wrap-related-article .fw-related-article li {
	display: inline-block;
	width: 48%;
}
.fw-wrap-related-article .fw-related-article:after {
	content: '';
	width: 100%;
	height: 0;
	display: inline-block;
}
.fw-related-article-image.fw-block-image-parent {
	overflow: hidden;
	position: relative;
	cursor: default;
}
.fw-related-article-image.fw-block-image-parent img {
	display: block;
}
.fw-related-article-image.fw-block-image-parent:before {
	content: '';
	background-color: #fff;
	opacity: 0;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	overflow: hidden;
	z-index: 1;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.fw-related-article-image.fw-block-image-parent:hover {
	cursor: pointer;
}
.fw-related-article-image.fw-block-image-parent:hover:before {
	opacity: 0.2;
}
.fw-related-article-image.fw-block-image-parent .fw-overlay-title {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	color: #fff;
	opacity: 1;
	z-index: 2;
	-webkit-transform-origin: translateY(0);
	-moz-transform-origin: translateY(0);
	-ms-transform-origin: translateY(0);
	transform-origin: translateY(0);
	-webkit-transition: all 0.6s ease-in-out 0.7s;
	-o-transition: all 0.6s ease-in-out 0.7s;
	transition: all 0.6s ease-in-out 0.7s;
}
.fw-related-article-image a {
	z-index: 999;
}
.fw-wrap-related-article.fw-related-article-type-1 .fw-related-article-description {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	text-align: center;
	padding: 20px;
	font-style: italic;
}
.fw-wrap-related-article.fw-related-article-type-1 .fw-related-article-description strong {
	font-style: normal;
}

