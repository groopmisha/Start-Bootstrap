/* Posts Type 2 */
.has-post-thumbnail.post-list-type-2 .fw-post-image {
	float: none;
}
.has-post-thumbnail.post-list-type-2 .comments-link {
	position: absolute;
	left: -9px;
	bottom: 40px;
	z-index: 100;
}
.post-list-type-2 {
	border-bottom: none;
}
.post-list-type-2 .fw-post-image {
	margin-right: 45px;
	box-shadow: none;
	float: left;
	margin-left: 0;
}
.post-list-type-2 .entry-title,
.post-list-type-2 .entry-meta,
.post-list-type-2 .entry-content {
	padding-right: 20px;
	padding-left: 20px;
}
.post-list-type-2 .entry-header .entry-title {
	margin-bottom: 30px;
}
.post-list-type-2 footer.entry-meta {
	margin: 30px 0  0 !important;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta {
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*0.8) ); ?>px;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	overflow: hidden;
	padding: 12px 0;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta a {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta .author a,
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta .entry-date a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-5'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: 15px;
	margin-top: -8px;
	margin-bottom: 8px;
	text-transform: uppercase;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta .author a:hover,
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta .entry-date a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta .entry-date a {
	text-transform: none;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .footer-meta .entry-date {
	float: right;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .cat-links {
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-base']) -2); ?>px;
	margin-top: 25px;
	display: block;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .cat-links a {
	font-weight: 400;
	font-style: italic;
	font-size: 19px;
	margin-top: -8px;
	margin-bottom: 8px;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .cat-links a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.post-list-type-2 footer.entry-meta .wrap-entry-meta .separator {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin: 0 5px;
}
.postlist.postlist-grid .has-post-thumbnail.post-list-type-2 .fw-post-image {
	width: 100%;
	margin-bottom: 30px;
	position: relative;
	top: 0;
}
.postlist.postlist-grid .has-post-thumbnail.post-list-type-2 .fw-post-image .fw-block-image-parent {
	width: 100%;
}
.postlist.postlist-grid .post-list-type-2 {
	margin-bottom: 80px;
}
.postlist.postlist-grid .post-list-type-2 .fw-post-image {
	position: absolute;
	top: 9px;
	right: 0;
	width: auto;
	margin-bottom: 0;
	margin-right: 0;
}
.postlist.postlist-grid .post-list-type-2 .entry-meta .footer-meta {
	margin: 0;
}

/*Responsive*/
/* Screen 1024px */
@media (max-width: 1199px) {
	.post-list-type-2 .fw-post-image {
		margin-bottom: 25px;
		margin-right: 25px;
	}
}
@media (max-width: 767px) {
	.postlist.postlist-grid .post-list-type-2 {
		margin-bottom: 40px;
	}
}

