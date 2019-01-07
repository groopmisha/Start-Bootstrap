/*-------------------------------*/
/*   Latest Posts Type 8 Style   */
/*-------------------------------*/

.latest-posts.lp-type8 .lp-item {
	overflow: hidden;
	margin-bottom: 30px;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap {
	display: block;
	position: relative;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content {
	text-align: center;
	padding: 20px 30px;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	opacity: 0;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
	font-size: 27px;
	line-height: 30px;
	margin-top: 0;
	position: relative;
	padding-bottom: 25px;
	margin-bottom: 20px;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title:before {
	content: '';
	position: absolute;
	width: 65px;
	height: 1px;
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	left: 0;
	right: 0;
	bottom: 0;
	margin: 0 auto;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text {
	font-size: 17px;
	line-height: 1.2em;
	-webkit-line-clamp: 3;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text p {
	line-height: 1.2em;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap > img {
	height: auto;
	position: relative;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
	-webkit-font-smoothing: antialiased;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap:hover .lp-item-content {
	opacity: 1;
}
.latest-posts.lp-type8 .lp-item .lp-all-content-wrap:hover > img {
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-ms-transform: scale(1.1);
	-o-transform: scale(1.1);
}

/* If exist sidebar */
.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
	font-size: 20px;
	line-height: 24px;
	padding-bottom: 12px;
	margin-bottom: 10px;
}
.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text {
	font-size: 15px;
	line-height: 1.1em;
}
.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content {
	padding: 15px 25px;
}

/* Responsive */
/* View title & description on touch device */
body.fw-touchDevice .latest-posts.lp-type8 .lp-item .lp-all-content-wrap:hover > img {
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-ms-transform: scale(0);
	-o-transform: scale(0);
}
body.fw-touchDevice .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content {
	opacity: 0.9;
}

/*Screen 1024px*/
@media (max-width: 1199px) {
	.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 25px;
		padding-bottom: 20px;
		margin-bottom: 15px;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text,
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text {
		display: none;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title,
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		margin: 0;
		padding: 0;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title:before,
		.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title:before {
		display: none;
	}
}

/*Screen 768px*/
@media (max-width: 991px) {
	.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 18px;
		line-height: 23px;
		padding-bottom: 15px;
		margin-bottom: 10px;
	}
	.latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text {
		font-size: 14px;
		-webkit-line-clamp: 2;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text,
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text {
		display: -webkit-box;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title,
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		margin-bottom: 10px;
		padding-bottom: 12px;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title:before,
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title:before {
		display: block;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type8 .col-xs-6 {
		width: 100%;
	}
	body.fw-touchDevice .fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title,
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
		font-size: 25px;
		line-height: 30px;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type8 .lp-item .lp-all-content-wrap .lp-item-content .lp-text {
		font-size: 17px;
		line-height: 1.2em;
	}
}

