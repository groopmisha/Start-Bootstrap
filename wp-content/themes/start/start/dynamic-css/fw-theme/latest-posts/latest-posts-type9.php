/*-------------------------------*/
/*   Latest Posts Type 9 Style   */
/*-------------------------------*/

.latest-posts.lp-type9 .lp-item {
	overflow: hidden;
	margin-bottom: 30px;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap {
	display: block;
	position: relative;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content {
	text-align: center;
	padding: 0 20px;
	position: absolute;
	top: 15px;
	right: 15px;
	bottom: 15px;
	left: 15px;
	border: 1px solid <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	background-color: transparent;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	z-index: 3;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
	font-size: 27px;
	line-height: 30px;
	margin: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	overflow: hidden;
	display: -webkit-box;
	-webkit-line-clamp: 4;
	-webkit-box-orient: vertical;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap > img {
	height: auto;
	position: relative;
	z-index: 1;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap:before {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	opacity: 0.5;
	z-index: 2;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-category-name-wrap {
	border: none;
	margin: 15px 0 0;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-category-name-wrap .lp-category-name {
	font-weight: bold;
	border: 1px solid <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap:hover .lp-item-content {
	background-color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap:hover .lp-item-content .lp-title {
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.latest-posts.lp-type9 .lp-item .lp-all-content-wrap:hover .lp-item-content .lp-category-name-wrap .lp-category-name {
	border-color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}

/* If exist sidebar */
.fw-content-area.col-md-8 .latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
	font-size: 23px;
	line-height: 25px;
	-webkit-line-clamp: 3;
}

/* Responsive */
/*Screen 1024px*/
@media (max-width: 1199px) {
	.fw-content-area.col-md-8 .latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 19px;
		line-height: 22px;
		-webkit-line-clamp: 2;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content {
		top: 10px;
		right: 10px;
		bottom: 10px;
		left: 10px;
	}
}

/*Screen 768px*/
@media (max-width: 991px) {
	.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 20px;
		line-height: 23px;
	}
	.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-category-name-wrap {
		margin-top: 10px;
	}
	.latest-posts.lp-type9 .lp-category-name-wrap .lp-category-name {
		font-size: 12px;
		line-height: 13px;
		padding: 7px;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 21px;
		line-height: 23px;
		-webkit-line-clamp: 3;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content {
		top: 15px;
		right: 15px;
		bottom: 15px;
		left: 15px;
	}
}

/* Screen 736px */
@media (max-width: 767px) {
	.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 25px;
		line-height: 30px;
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
	}
	.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-category-name-wrap {
		margin-top: 15px;
	}
	.latest-posts.lp-type9 .lp-category-name-wrap .lp-category-name {
		font-size: 14px;
		line-height: 15px;
		padding: 9px;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 23px;
		line-height: 27px;
		-webkit-line-clamp: 4;
	}
}

/* Screen 479px */
@media (max-width: 479px) {
	.latest-posts.lp-type9 .col-xs-6 {
		width: 100%;
	}
}

/* Screen 370px */
@media (max-width: 320px) {
	.latest-posts.lp-type9 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		-webkit-line-clamp: 2;
	}
}

