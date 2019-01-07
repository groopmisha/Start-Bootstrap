/*-------------------------------*/
/*   Latest Posts Type 10 Style  */
/*-------------------------------*/

.latest-posts.lp-type10 {
	overflow: hidden;
}
.latest-posts.lp-type10 .lp-item {
	position: relative;
	overflow: hidden;
	max-height: 450px;
}
.latest-posts.lp-type10 .lp-item > img {
	height: auto;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap {
	position: absolute;
	top: 0;
	right: 25px;
	bottom: 0;
	left: 25px;
	z-index: 5;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content {
	background-color: rgba(255, 255, 255, 0.9);
	padding: 15px 25px;
	text-align: center;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-category-name-wrap {
	border: none;
	margin-bottom: 10px;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-category-name-wrap .lp-category-name {
	font-size: 12px;
	line-height: 13px;
	border: 1px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-title {
	margin: 0;
	overflow: hidden;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-title a {
	font-size: 26px;
}
.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-meta {
	font-size: 17px;
	margin-top: 10px;
}

/* Slider nav */
.latest-posts.lp-type10 .owl-nav .owl-next,
.latest-posts.lp-type10 .owl-nav .owl-prev {
	position: absolute;
	top: 50%;
	font-size: 55px;
	color: #fff;
	transform: translateY(-50%);
}
.latest-posts.lp-type10 .owl-nav .owl-next:active,
.latest-posts.lp-type10 .owl-nav .owl-prev:active {
	top: 50.2%;
}
.latest-posts.lp-type10 .owl-nav .owl-next:focus,
.latest-posts.lp-type10 .owl-nav .owl-prev:focus {
	outline: none;
}
.latest-posts.lp-type10 .owl-nav .owl-next {
	right: 3px;
	text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}
.latest-posts.lp-type10 .owl-nav .owl-prev {
	left: 3px;
	text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

/* Responsive */
/*Screen 1024px*/
@media (max-width: 1199px) {
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-title a {
		font-size: 23px;
	}
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-meta {
		margin-bottom: 0;
	}
}

/*Screen 736px*/
@media (max-width: 767px) {
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content {
		padding: 30px 25px;
	}
}

/* Screen 568px */
@media (max-width: 600px) {
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content {
		padding: 50px 25px;
	}
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-title a {
		font-size: 30px;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content {
		padding: 25px;
	}
	.latest-posts.lp-type10 .lp-item .lp-all-content-wrap .lp-item-content .lp-title a {
		font-size: 23px;
	}
}

