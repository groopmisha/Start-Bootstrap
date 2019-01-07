/*-------------------------------*/
/*   Latest Posts Type 2 Style   */
/*-------------------------------*/

.latest-posts.lp-type2 .lp-content .lp-item .lp-thumb {
	margin-bottom: 20px;
}
.latest-posts.lp-type2 .lp-content .lp-item .lp-item-content .lp-text {
	-webkit-line-clamp: 5;
}

/* Responsive */
/* Screen 736px */
@media (max-width: 767px) {
	.latest-posts.lp-type2 .lp-item {
		margin-bottom: 20px;
	}
}

/* Screen 568px */
@media (max-width: 600px) {
	.latest-posts.lp-type2 .lp-content .lp-item .lp-title a {
		font-size: 27px;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type2 .lp-content .lp-item .lp-item-content .lp-meta .author,
	.latest-posts.lp-type2 .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author {
		display: block;
		margin-right: 0;
		margin-bottom: 5px;
	}
	.latest-posts.lp-type2 .lp-content .lp-item .lp-item-content .lp-meta .author:after,
	.latest-posts.lp-type2 .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author:after {
		display: none;
	}
	.latest-posts.lp-type2 .lp-content .lp-other-posts .lp-other-posts-item .lp-other-posts-content .lp-other-posts-meta .author {
		margin-bottom: 0;
	}
}

