/* Portfolio */
/* -------------------------------------------------- */
.fw-portfolio {
	position: relative;
}
.fw-portfolio.fw-portfolio-content-position-top .fw-icell {
	vertical-align: top;
}
.fw-portfolio.fw-portfolio-content-position-middle .fw-icell {
	vertical-align: middle;
}
.fw-portfolio.fw-portfolio-content-position-bottom .fw-icell {
	vertical-align: bottom;
}
.fw-portfolio .fw-portfolio-filter,
.fw-portfolio .fw-portfolio-wrapper,
.fw-portfolio .fw-portfolio-image {
	position: relative;
}
.fw-portfolio .fw-portfolio-wrapper ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.fw-portfolio .fw-portfolio-wrapper li {
	float: left;
}
.fw-portfolio img {
	max-width: 100%;
	display: block;
	position: relative;
	-webkit-backface-visibility: hidden;
}
.fw-portfolio a:hover {
	text-decoration: none;
}

/* Filter */
.fw-portfolio-filter {
	overflow: hidden;
	position: relative;
	border: 1px solid #dee0e1;
	padding: 20px;
	visibility: hidden;
	margin-bottom: <?php echo esc_js( floatval($start_less_variables['fw-content-density'] ) *8); ?>px;
}
.fw-portfolio-visible {
	visibility: visible !important;
}
.fw-portfolio-filter .caroufredsel_wrapper {
	margin: 0 auto !important;
}
.fw-portfolio-filter ul {
	padding: 0;
	text-align: center;
}
.fw-portfolio-filter li {
	display: inline-block;
	margin: 0 35px;
	float: left;
	line-height: 1.2em;
}
.fw-portfolio-filter li a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-style: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	font-weight: normal;
	font-size: 14px;
}
.fw-portfolio-filter li.active a,
.fw-portfolio-filter li a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-portfolio-filter .next,
.fw-portfolio-filter .prev {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	position: absolute;
	top: 0.5em;
	font-size: 30px;
	line-height: 1em;
	text-align: center;
	font-weight: normal;
}
.fw-portfolio-filter .next:hover,
.fw-portfolio-filter .prev:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-portfolio-filter .prev {
	left: 20px;
}
.fw-portfolio-filter .prev i:before {
	content: "\f104";
}
.fw-portfolio-filter .next {
	right: 20px;
}
.fw-portfolio-filter .next i:before {
	content: "\f105";
}

/* Responsive */
@media (max-width: 991px) {
	.site .fw-portfolio-1 .fw-portfolio-wrapper li {
		width: 47%;
	}
}

/* Screen 568px */
@media (max-width: 767px) {
	.site .fw-portfolio-1 .fw-portfolio-wrapper li {
		width: 97%;
	}
	.site .fw-project-details .fw-project-list .fw-project-list-item {
		width: 48%;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.site .fw-portfolio-1 .fw-portfolio-wrapper .fw-portfolio-image .fw-overlay-title {
		font-size: 100%;
	}
	.site .fw-project-details .fw-project-list .fw-project-list-item {
		width: 100%;
	}
	.site .fw-portfolio-filter .caroufredsel_wrapper {
		margin: 0 auto !important;
	}
}

