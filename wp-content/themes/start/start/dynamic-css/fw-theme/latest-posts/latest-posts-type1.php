/*-------------------------------*/
/*   Latest Posts Type 1 Style   */
/*-------------------------------*/

.latest-posts.lp-type1 .lp-content .lp-item {
	border-bottom: 1px solid <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], floatval($start_less_variables['latests-posts-separator-opacity']) ) ); ?>;;
	padding-bottom: 20px;
	margin-bottom: 20px;
}
.latest-posts.lp-type1 .lp-content .lp-item .lp-thumb {
	width: 300px;
	float: left;
	margin-right: 20px;
}
.latest-posts.lp-type1 .lp-content .lp-item .lp-item-content {
	padding-left: 320px;
}

/* Responsive */
/* Screen 736px */
@media (max-width: 767px) {
	.latest-posts .lp-content .lp-item .lp-item-content .lp-meta {
		margin-bottom: 22px;
	}
}

/* Screen 568px */
@media (max-width: 600px) {
	.latest-posts.lp-type1 .lp-content .lp-item .lp-item-content .lp-meta .author {
		display: block;
		margin-right: 0;
		margin-bottom: 5px;
	}
	.latest-posts.lp-type1 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
		display: none;
	}
	.latest-posts.lp-type1 .lp-content .lp-item .lp-item-content .lp-title a {
		font-size: 22px;
	}
	.latest-posts.lp-type1 .lp-content .lp-item .lp-item-content {
		font-size: 17px;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.latest-posts.lp-type1 .lp-content .lp-item .lp-thumb {
		float: none;
		margin-right: 0;
		margin-bottom: 15px;
	}
	.latest-posts.lp-type1 .lp-content .lp-item .lp-item-content {
		padding-left: 0;
	}
}

