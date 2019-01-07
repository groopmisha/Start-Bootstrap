/* Posts */
/* -------------------------------------------------- */
.footer-meta {
	border-top: 1px solid #dee0e1;
	border-bottom: 1px solid #dee0e1;
	padding: 1em 0;
}
.archive .fw-row, .single-post .fw-row{
	margin-top: 20px;
	margin-bottom: -20px;
}
.archive .fw-main-row-top .fw-row,
.single-post .fw-main-row-top .fw-row{
	margin: 0;
}

/* Post list grid */
.postlist.postlist-grid .fw-post-image {
	margin-bottom: 20px;
}
.postlist.postlist-grid .fw-post-image {
	display: block;
	width: 100%;
	position: relative;
}
.postlist.postlist-grid .no-post-thumbnail .fw-post-image {
	margin: 0 15px 0 -5px;
	float: left;
}
.postlist.postlist-grid footer .footer-meta {
	font-size: 13px;
	margin-top: 1em;
	margin-bottom: 1.2em;
}
.postlist.postlist-grid footer .footer-meta a {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.postlist.postlist-grid footer .footer-meta .author a {
	font-family: <?php echo wp_kses($start_less_variables['font-family-5'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: 15px;
	margin-top: -8px;
	margin-bottom: 8px;
	text-transform: uppercase;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.postlist.postlist-grid footer .footer-meta .author a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.postlist.postlist-grid footer .cat-links {
	font-size: <?php echo esc_js( floor(floatval($start_less_variables['font-size-base'])*0.9) ); ?>px;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.postlist.postlist-grid footer .footer-meta .entry-date {
	float: right;
}

/* Post list */
.postlist .wrap-entry-meta .entry-date a,
.postlist .wrap-entry-meta .author a,
.postlist .wrap-entry-meta .cat-links a {
	font-size: 20px;
	line-height: 15px;
	font-weight: 400;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-style: italic;
}
.postlist .wrap-entry-meta .entry-date a:hover,
.postlist .wrap-entry-meta .author a:hover,
.postlist .wrap-entry-meta .cat-links a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.postlist .wrap-entry-meta a {
	font-style: normal;
	margin-right: 2px;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.postlist .wrap-entry-meta a:hover {
	color: #d12a5c;
}

/* Post overlay */
.postlist .fw-post-image .fw-block-image-child {
	position: relative;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
}
.postlist .fw-post-image .fw-block-image-child .fw-block-image-overlay {
	opacity: 0;
	position: absolute;
	background-color: rgba(0, 0, 0, 0.7);
	text-align: center;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	padding: 10px;
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.postlist .fw-post-image .fw-block-image-child .fw-block-image-overlay i[class*='fw-icon-'] {
	font-family: FontAwesome;
	width: 43px;
	height: 43px;
	font-size: 18px;
	line-height: 44px;
	text-align: center;
	color: #fff;
	display: inline-block;
	border-radius: 50%;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	z-index: 11;
	transform: scale(0.5);
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.postlist .fw-post-image .fw-block-image-child:hover {
	cursor: pointer;
}
.postlist .fw-post-image .fw-block-image-child:hover .fw-block-image-overlay {
	opacity: 1;
}
.postlist .fw-post-image .fw-block-image-child:hover .fw-block-image-overlay i {
	transform: scale(1);
}

/* Sticky Icon */
.postlist .sticky-icon {
	z-index: 11;
	font-style: normal;
}
.postlist .sticky-icon:before {
	content: '\f097';
	font-family: 'FontAwesome';
	line-height: 1em;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	text-shadow: 0 1px 1px rgba(15, 31, 37, 0.7);
}

/*Responsive*/
@media (min-width: 768px) {
	.fw-col-sm-12 .postlist-grid .postlist-col {
		width: 33.33333333%;
		padding: 0 15px;
	}
	.fw-col-sm-8 .postlist-grid .postlist-col,
	.fw-col-sm-6 .postlist-grid .postlist-col,
	.fw-col-sm-5th-4 .postlist-grid .postlist-col,
	.fw-col-sm-5th-3 .postlist-grid .postlist-col {
		width: 50%;
		padding: 0 15px;
	}
	.fw-col-sm-4 .postlist-grid .postlist-col,
	.fw-col-sm-3 .postlist-grid .postlist-col {
		width: 100%;
		padding: 0 15px;
	}
	.fw-col-sm-4 .postlist .has-post-thumbnail.post-list-type-1 .fw-post-image,
	.fw-col-sm-3 .postlist .has-post-thumbnail.post-list-type-1 .fw-post-image,
	.fw-col-sm-4 .postlist .has-post-thumbnail.post-list-type-2 .fw-post-image,
	.fw-col-sm-3 .postlist .has-post-thumbnail.post-list-type-2 .fw-post-image {
		width: 100%;
		margin-right: 0;
		margin-bottom: 45px;
	}
	.fw-col-sm-4 .postlist .post-list-type-2 .fw-post-image,
	.fw-col-sm-3 .postlist .post-list-type-2 .fw-post-image {
		margin-bottom: 10px;
	}
}

/*Screen 768px*/
@media (max-width: 991px) {
	.fw-content-area {
		margin-bottom: 60px;
	}
}
/* Screen 320px */
@media (max-width: 479px) {
	.postlist .post .fw-post-image {
		margin-bottom: 25px;
	}
}

