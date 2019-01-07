/*-------------------------------*/
/*   Latest Posts Type 4 Style   */
/*-------------------------------*/

.latest-posts.lp-type4 .lp-content .lp-item {
	margin-bottom: 30px;
}
.latest-posts.lp-type4 .lp-content .lp-item .lp-title a {
	font-size: 25px;
}
.latest-posts.lp-type4 .lp-content .lp-item .lp-thumb {
	margin-bottom: 20px;
}

/* If exist sidebar */
.fw-content-area.col-md-8 .latest-posts.lp-type4 .lp-item-content .lp-title a {
	font-size: 24px;
}
.fw-content-area.col-md-8 .latest-posts.lp-type4 .lp-item-content .lp-meta {
	font-size: 15px;
}

/* Responsive */
/*Screen 768px*/
@media (max-width: 991px) {
	.latest-posts.lp-type4 .lp-content .lp-item .lp-title a {
		font-size: 21px;
	}
	.latest-posts.lp-type4 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: block;
		margin-right: 0;
		margin-bottom: 5px;
	}
	.latest-posts.lp-type4 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: none;
	}
	.fw-content-area.col-md-8 .latest-posts.lp-type4 .lp-item-content .lp-meta {
		font-size: 18px;
	}
}

/* Screen 736px */
@media (max-width: 767px) {
	.latest-posts.lp-type4 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: inline-block;
		margin-right: 15px;
		margin-bottom: 0;
	}
	.latest-posts.lp-type4 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: block;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type4 .lp-content .col-xs-6 {
		width: 100%;
	}
}

