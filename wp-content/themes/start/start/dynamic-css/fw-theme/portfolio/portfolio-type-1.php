/* Portfolio Type 1 */
.fw-portfolio-1.fw-portfolio-content-align-left .fw-block-image-overlay .fw-overlay-title,
.fw-portfolio-1.fw-portfolio-content-align-left .fw-block-image-overlay .fw-overlay-description {
	text-align: left;
}
.fw-portfolio-1.fw-portfolio-content-align-left .fw-block-image-overlay .fw-overlay-title:before {
	right: auto;
}
.fw-portfolio-1.fw-portfolio-content-align-left .fw-block-image-overlay .fw-overlay-description {
	float: left;
}
.fw-portfolio-1.fw-portfolio-content-align-center .fw-block-image-overlay .fw-overlay-title,
.fw-portfolio-1.fw-portfolio-content-align-center .fw-block-image-overlay .fw-overlay-description {
	text-align: center;
}
.fw-portfolio-1.fw-portfolio-content-align-center .fw-block-image-overlay .fw-overlay-title:before {
	left: 0;
	right: 0;
}
.fw-portfolio-1.fw-portfolio-content-align-center .fw-block-image-overlay .fw-overlay-description {
	float: none;
}
.fw-portfolio-1.fw-portfolio-content-align-right .fw-block-image-overlay .fw-overlay-title,
.fw-portfolio-1.fw-portfolio-content-align-right .fw-block-image-overlay .fw-overlay-description {
	text-align: right;
}
.fw-portfolio-1.fw-portfolio-content-align-right .fw-block-image-overlay .fw-overlay-title:before {
	left: auto;
}
.fw-portfolio-1.fw-portfolio-content-align-right .fw-block-image-overlay .fw-overlay-description {
	float: none;
}
.fw-portfolio-1.fw-portfolio-content-align-right .fw-block-image-overlay .fw-overlay-description * {
	float: right;
}
.fw-portfolio-1 .fw-portfolio-list li {
	background: #fff;
	border: 1px solid #ece8df;
	padding: 20px;
	-webkit-box-shadow: 0 9px 40px rgba(236, 232, 223, 0.68);
	box-shadow: 0 9px 40px rgba(236, 232, 223, 0.68);
}
.fw-portfolio-1 .fw-portfolio-image {
	display: block;
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	overflow: hidden;
	position: relative;
}
.fw-portfolio-1 .fw-portfolio-image img {
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
.fw-portfolio-1 .fw-portfolio-image .fw-block-image-overlay {
	opacity: 0;
	position: absolute;
	background-color: rgba(255, 255, 255, 0.95);
	text-align: center;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	padding: 10px;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.fw-portfolio-1 .fw-portfolio-image .fw-block-image-overlay .fw-overlay-title {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	position: relative;
	margin-bottom: 35px;
	vertical-align: middle;
	text-align: center;
	display: block;
	height: auto !important;
	padding: 0;
}
.fw-portfolio-1 .fw-portfolio-image .fw-block-image-overlay .fw-overlay-title:before {
	content: '';
	position: absolute;
	width: 130px;
	height: 1px;
	background: #e2e2e2;
	margin: 0 auto;
	bottom: -20px;
	left: 0;
	right: 0;
}
.fw-portfolio-1 .fw-portfolio-image .fw-block-image-overlay .fw-overlay-description {
	display: block;
	text-align: center;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	padding: 0;
}
.fw-portfolio-1 .fw-portfolio-image:hover {
	cursor: pointer;
}
.fw-portfolio-1 .fw-portfolio-image:hover .fw-block-image-overlay {
	opacity: 1;
}
.fw-portfolio-1 .fw-portfolio-image:hover img {
	transform: scale(1.1);
}
.fw-portfolio-1 .fw-portfolio-image .fw-overlay-title {
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base']) *1.32) ); ?>px;
	line-height: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base']) *1.32) + 2 ); ?>px;
	padding: 0 6% 2%;
}
.fw-portfolio-1 .fw-portfolio-image .fw-overlay-description * {
	max-width: 200px;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
	margin: 0 auto;
}

/* 2 columns */
.fw-portfolio-1.fw-portfolio-cols-2 .fw-portfolio-wrapper li {
	width: 47%;
	margin: 0 1.41% 32px;
}
.fw-portfolio-1.fw-portfolio-cols-2 .fw-portfolio-wrapper .fw-portfolio-title {
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-base']) *1.32); ?>px;
}
.fw-portfolio-1.fw-portfolio-cols-2 .fw-portfolio-wrapper .fw-portfolio-image img {
	width: 100%;
}

/* 3 columns */
.fw-portfolio-1.fw-portfolio-cols-3 .fw-portfolio-wrapper li {
	width: 30.6%;
	margin: 0 1.36% 32px;
}

/* 4 columns */
.fw-portfolio-1.fw-portfolio-cols-4 .fw-portfolio-wrapper li {
	width: 22%;
	margin: 0 1.36% 32px;
}
.fw-portfolio-1.fw-portfolio-cols-4 .fw-portfolio-wrapper .fw-portfolio-title {
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base']) *1.056) ); ?>px;
	padding: 10px;
}

