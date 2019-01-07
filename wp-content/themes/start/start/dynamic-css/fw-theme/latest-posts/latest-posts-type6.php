/*-------------------------------*/
/*   Latest Posts Type 6 Style   */
/*-------------------------------*/

.latest-posts.lp-type6 .lp-content .lp-item {
	margin-bottom: 40px;
}
.latest-posts.lp-type6 .lp-content .lp-item:before,
.latest-posts.lp-type6 .lp-content .lp-item:after {
	content: " ";
	display: table;
}
.latest-posts.lp-type6 .lp-content .lp-item:after {
	clear: both;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-title {
	margin: 0 0 20px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-title a {
	font-size: 27px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap {
	position: relative;
	max-width: 250px;
	float: left;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap .lp-thumb {
	display: block;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap .lp-comments-link {
	position: absolute;
	left: -15px;
	bottom: 35px;
	font-size: 18px;
	line-height: 35px;
	min-width: 35px;
	height: 35px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap .lp-comments-link:before {
	min-width: 35px;
	height: 35px;
	line-height: 32px;
	font-size: 21px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap .lp-comments-link:after {
	border-right-width: 10px;
	border-top-width: 9px;
	bottom: -9px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content {
	margin-left: 275px;
	padding-right: 40px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta {
	font-size: 18px;
	margin-top: 25px;
	margin-bottom: 0;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author,
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on {
	padding-top: 6px;
	position: relative;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author:before,
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on:before {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	left: 0;
	height: 1px;
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], 0.4) ); ?>;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author {
	padding-right: 11px;
	margin-right: 0;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
	top: 0;
	right: 0;
	bottom: 0;
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], 0.4) ); ?>;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on {
	padding-left: 9px;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-text {
	-webkit-line-clamp: 5;
	line-height: 1.2em;
}
.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-text p {
	line-height: 1.2em;
}

/* If exist sidebar */
.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap {
	float: none;
}
.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content {
	margin-left: 0;
	margin-top: 20px;
}

/* Responsive */
/*Screen 1024px*/
@media (max-width: 1199px) {
	.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap {
		max-width: 230px;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content {
		margin-left: 250px;
		padding-right: 0;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: block;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: none;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on {
		margin-top: 5px;
		padding-left: 0;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on:before {
		display: none;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: inline-block;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: block;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on {
		margin-top: 0;
		padding-left: 9px;
		padding-top: 5px;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on:before {
		display: block;
	}
}

/*Screen 768px*/
@media (max-width: 991px) {
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: inline-block;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: block;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on {
		margin-top: 0;
		padding-left: 9px;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta .posted-on:before {
		display: block;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap {
		float: left;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content {
		margin-left: 250px;
		margin-top: 0;
	}
}

/* Screen 568px */
@media (max-width: 600px) {
	.latest-posts.lp-type6 .lp-content .lp-item .lp-title a {
		font-size: 22px;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type6 .lp-content .lp-item {
		margin-bottom: 20px;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap,
	.latest-posts.lp-type6 .lp-content .lp-item .lp-thumb-wrap {
		max-width: 100%;
		float: none;
		margin-bottom: 15px;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type6 .lp-content .lp-item .lp-item-content,
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content {
		margin-left: 0;
	}
	.latest-posts.lp-type6 .lp-content .lp-item .lp-item-content .lp-meta {
		margin-bottom: 18px;
	}
}

