/* Image Overlay 1 */
.fw-overlay-1 .fw-block-image-child {
	position: relative;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
}
.fw-overlay-1 .fw-block-image-child .fw-block-image-overlay {
	opacity: 0;
	position: absolute;
	background-color: rgba(0, 0, 0, 0.7);
	text-align: center;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	padding: 10px;
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.fw-overlay-1 .fw-block-image-child .fw-block-image-overlay i[class*='fw-icon-'] {
	font-family: FontAwesome;
	width: 43px;
	height: 43px;
	font-size: 18px;
	line-height: 44px;
	text-align: center;
	color: #fff;
	display: inline-block;
	border-radius: 50%;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	z-index: 11;
	transform: scale(0.5);
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.fw-overlay-1 .fw-block-image-child:hover {
	cursor: pointer;
}
.fw-overlay-1 .fw-block-image-child:hover .fw-block-image-overlay {
	opacity: 1;
}
.fw-overlay-1 .fw-block-image-child:hover .fw-block-image-overlay i {
	transform: scale(1);
}

/* Image Overlay 2 */
.fw-overlay-2 {
	overflow: hidden;
	position: relative;
	cursor: default;
}
.fw-overlay-2 img {
	display: block;
}
.fw-overlay-2:before {
	content: '';
	background-color: #fff;
	opacity: 0;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	overflow: hidden;
	z-index: 1;
}
.fw-overlay-2:hover {
	cursor: pointer;
}
.fw-overlay-2:hover:before {
	opacity: 0.2;
}
.fw-overlay-2 .fw-overlay-title {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	-webkit-transform-origin: translateY(0);
	-moz-transform-origin: translateY(0);
	-ms-transform-origin: translateY(0);
	transform-origin: translateY(0);
	-webkit-transition: all 0.6s ease-in-out 0.7s;
	-o-transition: all 0.6s ease-in-out 0.7s;
	transition: all 0.6s ease-in-out 0.7s;
	background: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-5'], 0.94) ); ?>;
	opacity: 1;
	z-index: 2;
}

/* Image Overlay 3 */
.fw-overlay-3 {
	overflow: hidden;
	position: relative;
}
.fw-overlay-3 img {
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
.fw-overlay-3 .fw-block-image-overlay {
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
.fw-overlay-3 .fw-block-image-overlay .fw-overlay-title {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	position: relative;
	margin-bottom: 35px;
	vertical-align: middle;
	text-align: center;
	display: block;
	height: auto !important;
	padding: 0;
}
.fw-overlay-3 .fw-block-image-overlay .fw-overlay-title:before {
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
.fw-overlay-3 .fw-block-image-overlay .fw-overlay-description {
	display: block;
	text-align: center;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	padding: 0;
}
.fw-overlay-3:hover {
	cursor: pointer;
}
.fw-overlay-3:hover .fw-block-image-overlay {
	opacity: 1;
}
.fw-overlay-3:hover img {
	transform: scale(1.1);
}

/* Video */
.fw-block-image-parent.fw-block-image-video .fw-block-image-overlay {
	opacity: 1;
	background-color: transparent;
}
.fw-block-image-parent.fw-block-image-video .fw-block-image-overlay:hover {
	background-color: rgba(0, 0, 0, 0.7);
}
.fw-block-image-parent.fw-block-image-video .fw-block-image-overlay:hover i {
	border-color: transparent!important;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?> !important;
}
.fw-block-image-parent.fw-block-image-video .fw-block-image-overlay i {
	transform: scale(1) !important;
	background-color: transparent !important;
	border: 1px solid #fff;
}
.fw-block-image-parent .fw-icon-zoom,
.fw-block-image-parent .fw-icon-link,
.fw-block-image-parent .fw-icon-video,
.fw-block-image-parent .fw-icon-more,
.fw-block-image-parent .fw-icon-like {
	font-family: 'FontAwesome';
	font-style: normal;
}
.fw-block-image-parent .fw-icon-zoom:before {
	content: "\f065";
}
.fw-block-image-parent .fw-icon-link:before {
	content: "\f105";
	padding-left: 4px;
}
.fw-block-image-parent .fw-icon-video:before {
	content: "\f04b";
	text-indent: 0.2em;
	margin-left: .2em;
}
.fw-block-image-parent .fw-icon-more:before {
	content: "\f0f6";
}
.fw-block-image-parent .fw-icon-like:before {
	content: "\f08a";
}
.fw-block-image-parent .fw-block-image-overlay .fw-overlay-description {
	text-align: center;
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	line-height: normal;
	padding: 20px;
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-base'] ) - 1); ?>px;
}
.fw-block-image-parent .fw-block-image-overlay .fw-overlay-description p:last-child {
	margin-bottom: 0;
}
.fw-block-image-parent .fw-block-image-overlay .fw-overlay-title {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	padding: 5%;
	text-align: center;
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
}

