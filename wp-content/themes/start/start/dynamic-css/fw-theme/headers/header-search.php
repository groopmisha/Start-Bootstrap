/* Header Search */
.fw-wrap-search-form {
	width: 204px;
	background-color: #fff;
}
.fw-search {
	display: inline-block;
	line-height: normal;
	position: relative;
}
.fw-search-form {
	position: relative;
	display: inline-block;
	width: 100%;
}
.fw-submit-wrap {
	position: absolute;
	top: 0;
	right: 0;
	width: 35px;
	text-align: center;
	background: transparent;
	height: 33px;
	line-height: 33px;
}
.fw-submit-wrap:before {
	content: '\f002';
	font-family: 'FontAwesome';
	font-size: 16px;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-submit-wrap:hover:before {
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-1'], -10) ); ?>;
}
.fw-submit-wrap input {
	border: none;
	width: 100%;
	height: 100%;
	padding: 0;
	position: absolute;
	left: 0;
	background: transparent;
}
.fw-submit-wrap input:focus,
.fw-submit-wrap input:active {
	outline: none;
}
.fw-submit-wrap input:hover {
	opacity: 0.8;
}
.fw-search.fw-input-search input.fw-input-search::-moz-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
	opacity: 1;
}
.fw-search.fw-input-search input.fw-input-search:-ms-input-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
}
.fw-search.fw-input-search input.fw-input-search::-webkit-input-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
}
.fw-search.fw-input-search input.fw-input-search {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: 16px;
	letter-spacing: 0;
	height: 35px;
	line-height: 35px;
	border: none;
	background-color: rgba(0, 0, 0, 0.07);
	width: 100%;
	padding: 0 35px 0 10px!important;
	border-radius: 0;
}
.fw-search.fw-input-search input.fw-input-search:focus,
.fw-search.fw-input-search input.fw-input-search:active {
	outline: none;
}
.fw-search-icon {
	font-size: 16px;
	width: 16px;
	height: 16px;
	display: none;
	line-height: 1em;
	text-align: center;
	background: transparent;
}
.fw-search-icon:hover {
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-1'], -10) ); ?>;
	background: none;
	border-color: transparent;
}
.fw-mini-search .fw-search-icon {
	display: block;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-mini-search .fw-search-icon:hover {
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-1'], -10) ); ?>;
}
.fw-form-search-full {
	background-color: #fff;
}
.fw-form-search-full.fw-wrap-search-form {
	display: none;
	position: absolute;
	height: 0;
	overflow: hidden;
	left: 0;
	right: 0;
	width: 100%;
	z-index: 600;
	padding: 15px;
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-input-search::-moz-placeholder {
	color: #d3d3d3;
	opacity: 1;
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-input-search:-ms-input-placeholder {
	color: #d3d3d3;
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-input-search::-webkit-input-placeholder {
	color: #d3d3d3;
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form {
	display: block;
	margin: 0 auto;
	top: 50%;
	transform: translateY(-50%);
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-input-search {
	font-family: <?php echo wp_kses($start_less_variables['font-family-4'], array()); ?>;
	font-weight: 400;
	font-style: italic;
	font-size: 45px;
	letter-spacing: -2px;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	border: 0 solid transparent;
	background-color: #fff;
	padding-left: 50px!important;
	padding-right: 50px!important;
	height: calc(100%/2);
	line-height: calc(100%/2);
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-close-search-form {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	position: absolute;
	right: 17px;
	top: 50%;
	font-size: 20px;
	line-height: normal;
	transform: translateY(-50%);
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-submit-wrap {
	right: auto;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
}
.fw-form-search-full.fw-wrap-search-form .fw-search-form .fw-submit-wrap:before {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	font-size: 20px;
}
.fw-header.fw-sticky-menu .fw-form-search-full.fw-wrap-search-form {
	top: 0 !important;
}

/* Search in top bar */
.fw-top-bar-on.search-in-top-bar .fw-search.fw-mini-search {
	top: <?php echo (24/2 - floatval($start_less_variables['fw-top-bar-font-size-social'])/2 ); ?>px;
	background-color: transparent;
}
.fw-top-bar-on.search-in-top-bar.fw-top-social-right .fw-top-bar .fw-mini-search {
	border-left: 1px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-top-bar-on.search-in-top-bar.fw-top-social-left .fw-mini-search {
	border-left: 1px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-search-full .fw-top-bar .fw-text-top-bar,
.fw-search-full .fw-top-bar .fw-top-bar-social {
	top: 5px;
}
.search-in-top-bar .fw-search {
	float: right !important;
	margin-left: 15px!important;
	margin-right: 0 !important;
}
.search-in-top-bar .fw-top-bar-social,
.search-in-top-bar .fw-text-top-bar {
	position: relative;
}
.search-in-top-bar.fw-top-social-right .fw-top-bar .fw-search {
	padding-left: 10px!important;
}
.search-in-top-bar.fw-top-social-left .fw-text-top-bar {
	float: none;
}
.search-in-top-bar.fw-top-social-left .fw-search {
	padding-left: 10px!important;
}
.search-in-top-bar.fw-top-social-left .fw-mini-search {
	margin-left: 10px!important;
}

