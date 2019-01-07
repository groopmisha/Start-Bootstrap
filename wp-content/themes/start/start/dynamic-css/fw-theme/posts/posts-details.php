/* Post Details */
.post-details {
	margin-top: 8px;
	margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
}
.post-details img.aligncenter,
.post-details .wp-caption {
	margin-bottom: 20px;
}
.post-details img.alignleft,
.post-details .wp-caption.alignleft {
	margin: 0 5% 5px -45px;
}
.post-details .fw-post-image {
	margin-bottom: 45px;
}
.post-details .entry-header,
.post-details .entry-content {
	padding-left: 45px;
	padding-right: 45px;
}
.post-details .entry-header .wrap-entry-meta {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin: 0 0 45px 0;
	font-size: 14px;
	margin-bottom: 32px;
	font-weight: 400;
}
.post-details .entry-header .wrap-entry-meta a {
	font-style: normal;
	margin-right: 2px;
	color: #49ca9f;
}
.post-details .entry-header .wrap-entry-meta a:hover {
	color: #d12a5c;
}
.post-details .entry-header .wrap-entry-meta .entry-date a,
.post-details .entry-header .wrap-entry-meta .author a {
	font-size: 19px;
	line-height: 15px;
	font-weight: 400;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-style: italic;
}
.post-details .entry-header .wrap-entry-meta .cat-links a {
	font-weight: 400;
	font-style: italic;
	font-size: 19px;
	margin-top: -8px;
	margin-bottom: 8px;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.post-details .entry-header .wrap-entry-meta .entry-date a:hover,
.post-details .entry-header .wrap-entry-meta .author a:hover,
.post-details .entry-header .wrap-entry-meta .cat-links a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.post-details .entry-header .wrap-entry-meta .entry-date {
	white-space: nowrap;
}
.post-details .entry-header .wrap-entry-meta .cat-links {
	float: right;
}
.post-details .entry-header .entry-title {
	display: block;
	margin: 0 0 42px;
}
.post-details .entry-content {
	padding-bottom: <?php echo esc_js($start_less_variables['fw-footer-widgets-padding-bot']); ?>;
	border-bottom: 1px solid #dee0e1;
}
.post-details .entry-content p:last-child {
	margin-bottom: 0;
}
.post-details footer.entry-meta {
	margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
}
.post-details footer.entry-meta .fw-tag-links {
	padding: 45px 2%;
	margin-bottom: 70px;
	border-bottom: 1px solid #dee0e1;
}
.post-details p {
	color: #5D696E;
}
.post-details .wp-caption-text {
	padding: 0 5px 0 45px;
}
.post-details blockquote:after {
	display: none;
}
.post-details blockquote p {
	font-family: Merriweather;
	font-style: normal;
	font-weight: 300;
	line-height: 39px;
	font-size: 21px;
	letter-spacing: 0.4px;
	color: #8C8C8C;
}

/* HomePage Section */
body.home .post.post-details {
	padding-top: 0;
}
body.home .post.post-details .entry-header {
	padding-left: 0;
}
body.home .post.post-details .entry-content {
	padding-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
}

/* Author Description */
/*-----------------------------------*/
.author-description {
	padding: 0 0 <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
	margin-bottom: <?php echo esc_js($start_less_variables['fw-footer-widgets-padding-bot']); ?>;
	border-bottom: 1px solid #dee0e1;
}
.author-description:after {
	content: '';
	display: block;
	clear: both;
}
.author-description .author-image {
	float: left;
	border-radius: 50%;
	overflow: hidden;
}
.author-description .author-image,
.author-description .author-image img {
	width: 100px;
	height: 100px;
}
.author-description .author-text {
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-base']) -1 ); ?>px;
	margin-left: 130px;
}
.author-description .author-name {
	font-size: 24px;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	margin-bottom: 5px;
	margin-top: 14px;
	font-weight: bold;
}
.author-description .author-name span {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-style: italic;
	font-weight: normal;
}
/* Responsive */
/* Screen 568px */
@media (max-width: 767px) {
	.post-details .entry-header .wrap-entry-meta,
	.post-details .entry-header .entry-title {
		margin-bottom: 23px;
	}
	.post-details .entry-header .entry-title {
		font-size: 30px;
	}
	.post-details .author-description,
	.post-details footer.entry-meta,
	.post-details,
	.post-details .entry-content{
		margin-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-footer-widgets-padding-bot'])*0.5) ); ?>px;
	}
	.post-details footer.entry-meta {
		margin-bottom: 0;
	}
	.post-details .entry-content {
		margin-bottom: 0;
	}
}
/* Screen 320px */
@media (max-width: 479px) {
	.post-details .entry-content,
	.post-details .entry-header {
		padding-left: 0;
		padding-right: 0;
	}
	.post-details .entry-header .wrap-entry-meta .cat-links {
		float: none;
		margin-left: 10px;
	}
	.post-details .wp-caption.alignleft,
	.post-details img.alignleft {
		margin-left: 0;
	}
	.author-description .author-image {
		float: none;
	}
	.author-description .author-text {
		margin-left: 0;
	}
}


