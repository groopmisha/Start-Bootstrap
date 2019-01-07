/*-------------------------------*/
/*     Latest Posts Style        */
/*-------------------------------*/

.latest-posts {
	margin-bottom: 50px;
	padding: 0;
}
.latest-posts:last-child {
	margin-bottom: 0;
}
.latest-posts .lp-category-name-wrap {
	border-bottom: 2px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	margin-bottom: 20px;
}
.latest-posts .lp-category-name-wrap .lp-category-name {
	font-size: 14px;
	line-height: 15px;
	letter-spacing: 1px;
	font-weight: 700;
	font-style: italic;
	text-transform: uppercase;
	padding: 9px;
	display: inline-block;
	border: 2px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	border-bottom: none;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	margin: 0;
}
.latest-posts .lp-content .lp-item .lp-thumb {
	display: block;
	max-width: 100%;
	height: auto;
	position: relative;
}
.latest-posts .lp-content .lp-item .lp-thumb img {
	height: auto;
}
.latest-posts .lp-content .lp-item .lp-thumb:before {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: #fff;
	opacity: 0;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts .lp-content .lp-item .lp-thumb:hover:before {
	opacity: 0.3;
}
.latest-posts .lp-content .lp-item .lp-title a {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 30px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.latest-posts .lp-content .lp-item .lp-title a span {
	font-weight: bold;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	font-weight: 400;
	font-size: 20px;
	line-height: 21px;
	margin-bottom: 15px;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta .author a,
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta .posted-on a,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author a,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .posted-on a {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-style: italic;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta .author a:hover,
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta .posted-on a:hover,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author a:hover,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .posted-on a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta .author,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author {
	margin-right: 15px;
	position: relative;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-meta .author:after,
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author:after {
	content: '';
	position: absolute;
	width: 1px;
	top: 6px;
	right: -7.5px;
	bottom: 3px;
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], 0.6) ); ?>;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-text {
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: 1.5em;
	overflow: hidden;
	display: inline-block;
	display: -webkit-box;
	-webkit-line-clamp: 5;
	-webkit-box-orient: vertical;
}
.latest-posts .lp-content .lp-item .lp-item-content .lp-text p {
	line-height: 1.5em;
}
.latest-posts .lp-content .lp-item .lp-comments-link {
	font-style: normal;
	float: right;
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	position: relative;
	display: inline-block;
	font-size: 13px;
	line-height: 25px;
	font-weight: 400;
	color: #fff !important;
	min-width: 28px;
	height: 25px;
	padding: 0 10px;
	text-align: center;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts .lp-content .lp-item .lp-comments-link:before {
	content: '+';
	position: absolute;
	left: 0;
	top: 0;
	min-width: 28px;
	height: 25px;
	line-height: 25px;
	font-size: 13px;
	opacity: 0;
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts .lp-content .lp-item .lp-comments-link:after {
	content: '';
	width: 0;
	height: 0;
	border-right: 7px solid transparent;
	position: absolute;
	left: 6px;
	bottom: -6px;
	border-top: 6px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts .lp-content .lp-item .lp-comments-link:hover:before {
	opacity: 1;
}
.latest-posts .lp-content .lp-item .lp-comments-link:hover:after {
	border-top: 6px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item {
	border-bottom: 1px solid <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], floatval($start_less_variables['latests-posts-separator-opacity']) ) ); ?>;
	padding-bottom: 10px;
	margin-bottom: 10px;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-thumb {
	width: 100px;
	margin-right: 15px;
	float: left;
	position: relative;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-thumb > img {
	height: auto;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-thumb:before {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: #fff;
	opacity: 0;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-thumb:hover:before {
	opacity: 0.3;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content {
	padding-left: 115px;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-title {
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	margin: 0 0 5px 0;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-title a {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 21px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-title a span {
	font-weight: bold;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-text {
	font-size: 15px;
	line-height: 1.45em;
	margin-bottom: 5px;
	display: inline-block;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	overflow: hidden;
}
.latest-posts .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-text p {
	line-height: 1.45em;
}

/* If exist sidebar */
.content-area.col-md-8 .latest-posts {
	max-width: 100%;
}

