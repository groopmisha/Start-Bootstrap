/*-------------------------------*/
/*   Latest Posts Type 5 Style   */
/*-------------------------------*/

.latest-posts.lp-type5 .lp-content .lp-item {
	margin-bottom: 30px;
}
.latest-posts.lp-type5 .lp-content .lp-item .lp-thumb {
	max-width: 250px;
	float: left;
	margin-bottom: 20px;
}
.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content {
	margin-left: 275px;
	padding-right: 40px;
}
.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content .lp-meta .lp-comments-link {
	right: -40px;
}
.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content .lp-text {
	-webkit-line-clamp: 4;
}

/* Responsive */
/* Screen 736px */
@media (max-width: 767px) {
	.latest-posts.lp-type5 .lp-content .lp-item .lp-title a {
		font-size: 27px;
	}
}

/* Screen 568px */
@media (max-width: 600px) {
	.latest-posts.lp-type5 .lp-content .lp-item .lp-title a {
		font-size: 23px;
	}
	.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: block;
		margin-right: 0;
		margin-bottom: 5px;
	}
	.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: none;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type5 .lp-content .lp-item .lp-thumb {
		float: none;
		display: block;
		max-width: 100%;
	}
	.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content {
		padding: 0;
		margin: 0;
	}
	.latest-posts.lp-type5 .lp-content .lp-item .lp-item-content .lp-meta .lp-comments-link {
		right: 0;
	}
}

