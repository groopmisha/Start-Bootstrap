/* Pagination , paging navigation */
/* -------------------------------------------------- */
.navigation.pagination {
	padding: <?php echo esc_js($start_less_variables['fw-section-padding-sm']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-3'], 0.1) ); ?>;
	margin: 45px 0;
	overflow: hidden;
	display: block;
	width: 100%;
	text-align: center;
}
.navigation.pagination .screen-reader-text {
	display: none;
}
.navigation.pagination .loop-pagination {
	text-align: center;
	position: relative;
	display: block;
	margin: 0;
}
.navigation.pagination .page-numbers,
.page-links a {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	display: inline-block;
	line-height: <?php echo esc_js($start_less_variables['line-height-large']); ?>;
	margin-left: 10px;
	margin-right: 10px;
	font-size: 18px;
	padding: <?php echo esc_js($start_less_variables['padding-large-vertical']); ?> 0;
	-webkit-transition: all 0.2s ease;
	-o-transition: all 0.2s ease;
	transition: all 0.2s ease;
}
.navigation.pagination .page-numbers:hover,
.navigation.pagination .page-numbers.current,
.page-links a:hover,
.page-links a.current {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.navigation.pagination .page-numbers.dots,
.page-links a.dots {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.navigation.pagination .page-numbers.prev,
.navigation.pagination .page-numbers.next,
.page-links a.prev,
.page-links a.next {
	font-size: 15px;
	text-transform: uppercase;
	padding: <?php echo esc_js($start_less_variables['padding-large-vertical']); ?> <?php echo esc_js($start_less_variables['padding-large-horizontal']); ?>;
	line-height: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*1.15) ); ?>px;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	color: #fff;
}
.navigation.pagination .page-numbers.prev i,
.navigation.pagination .page-numbers.next i,
.page-links a.prev i,
.page-links a.next i {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-size: 20px;
	line-height: 15px;
	position: relative;
	top: 1px;
}
.navigation.pagination .page-numbers.prev:hover,
.navigation.pagination .page-numbers.next:hover,
.page-links a.prev:hover,
.page-links a.next:hover {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.navigation.pagination .page-numbers.prev:hover i,
.navigation.pagination .page-numbers.next:hover i,
.page-links a.prev:hover i,
.page-links a.next:hover i {
	color: #fff;
}
.navigation.pagination .page-numbers.prev:active,
.navigation.pagination .page-numbers.next:active,
.page-links a.prev:active,
.page-links a.next:active {
	box-shadow: inset 0 0 15px <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-1'], 20) ); ?>;
}
.navigation.pagination .page-numbers.prev,
.page-links a.prev {
	float: left;
	margin-left: 0;
}
.navigation.pagination .page-numbers.prev i,
.page-links a.prev i {
	margin-right: 10px;
	color: white;
}
.navigation.pagination .page-numbers.next,
.page-links a.next {
	float: right;
	margin-right: 0;
}
.navigation.pagination .page-numbers.next i,
.page-links a.next i {
	margin-left: 10px;
	color: white;
}
.navigation.pagination .page-numbers.disabled,
.page-links a.disabled {
	pointer-events: none;
	cursor: not-allowed;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	box-shadow: none;
	opacity: .65;
}
.navigation.pagination .page-numbers.disabled:hover,
.page-links a.disabled:hover {
	background: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.page-links .page-links-title {
	font-weight: bold;
	margin: 0 5px 0 0;
	color: inherit;
}
.page-links > span {
	display: inline-block;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	font-weight: bold;
	margin: 2px;
}

/* Comment pagination */
.paging-navigation.comment-navigation {
	padding: 0;
	background-color: transparent;
	text-align: left;
}
.paging-navigation.comment-navigation .loop-pagination {
	text-align: left;
}
.paging-navigation.comment-navigation .page-numbers {
	border: 2px solid <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	padding: <?php echo esc_js($start_less_variables['padding-small-vertical']); ?> <?php echo esc_js($start_less_variables['padding-small-horizontal']); ?>;
	font-size: 15px;
	line-height: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*1.15) ); ?>px;
	float: none;
	margin: 5px;
}
.paging-navigation.comment-navigation .page-numbers.prev,
.paging-navigation.comment-navigation .page-numbers.next {
	text-transform: uppercase;
	background-color: transparent;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.paging-navigation.comment-navigation .page-numbers.prev i,
.paging-navigation.comment-navigation .page-numbers.next i {
	margin: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	font-size: 20px;
	font-weight: bold;
}
.paging-navigation.comment-navigation .page-numbers:hover,
.paging-navigation.comment-navigation .page-numbers.current {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	border-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.paging-navigation.comment-navigation .page-numbers:hover i,
.paging-navigation.comment-navigation .page-numbers.current i {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.paging-navigation.comment-navigation .page-numbers span {
	display: none;
}
/* Blog Post Navigation */
.blog-post-navigation {
	margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot']) *0.85) ); ?>px;
	padding: 0 15px;
}
.blog-post-navigation a {
	display: inline-block;
	width: 49%;
	height: 180px;
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-3'], 0.1) ); ?>;
	position: relative;
	text-align: center;
	padding: 0 50px;
	font-weight: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	font-size: 14px;
}
.blog-post-navigation a i {
	position: absolute;
	top: 50%;
	margin-top: -37px;
	left: 15px;
	font-size: 70px;
	color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-3'], 0.2) ); ?>;
}
.blog-post-navigation a[rel="prev"] {
	padding-left: 75px;
}
.blog-post-navigation a[rel="next"] {
	float: right;
	padding-right: 75px;
}
.blog-post-navigation a[rel="next"] i {
	left: auto;
	right: 15px;
}
.blog-post-navigation a span {
	font-size: 15px;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: normal;
	font-style: normal;
	color: <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-3'], 50) ); ?>;
	margin-bottom: 10px;
	display: block;
	text-transform: uppercase;
}
.blog-post-navigation a strong {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-style: normal;
	font-weight: 400;
}
.blog-post-navigation a:hover {
	opacity: 0.8;
}

/*Responsive*/
/* Screen 568px */
@media (max-width: 767px) {
	.paging-navigation {
		padding: 20px;
	}
	.blog-post-navigation {
		margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot']) *0.5) ); ?>px;
		overflow: hidden;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.blog-post-navigation a {
		width: 100%;
	}
	.blog-post-navigation a i {
		display: none;
	}
}

