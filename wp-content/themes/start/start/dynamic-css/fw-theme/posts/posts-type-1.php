/* Posts Listing & Type 1 */
.post {
	position: relative;
	padding-top: 45px;
	margin-bottom: 45px;
}
.post:first-child {
	border-top: none;
	padding-top: 0;
	margin-top: 0;
}
.post .wrap-entry-meta {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
}
.post .wrap-entry-meta .entry-date a,
.post .wrap-entry-meta .author a,
.post .wrap-entry-meta .cat-links a {
	font-style: italic;
}
.post h1.entry-title a {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 45px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.post h2.entry-title a {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 33px;
	line-height: 40px;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.post h2.entry-title a span,
.post .post h2.entry-title a.entry-title a span {
	font-weight: bold;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
}
.post h3.entry-title a {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 31px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.post h4.entry-title a {
	font-family: <?php echo wp_kses($start_less_variables['font-titles-family'], array()); ?>;
	font-style:  <?php echo esc_js($start_less_variables['font-titles-style']); ?>;
	font-weight: <?php echo esc_js($start_less_variables['font-titles-weight']); ?>;
	font-size: 29px;
	line-height: <?php echo esc_js($start_less_variables['line-titles-height']); ?>;
	letter-spacing: <?php echo esc_js($start_less_variables['letter-titles-spacing']); ?>;
	color: <?php echo esc_js($start_less_variables['fw-titles-color']); ?>;
}
.post .entry-title {
	display: block;
}
.post .entry-title strong,
.post .entry-title span {
	font-style: normal;
}
.entry-content:before,
.entry-content:after {
	content: " ";
	display: table;
}
.entry-content:after {
	clear: both;
}
.separator {
	color: #b6b8b9;
}
.post-tags a {
	display: inline-block;
	font-size: 11px !important;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	color: #fff !important;
	height: 32px;
	line-height: 32px;
	padding: 0 10px;
	margin: 8px;
	background-color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	border-radius: 0 3px 3px 0;
	position: relative;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.post-tags a:before {
	content: '';
	width: 0;
	height: 0;
	border-top: 16px solid transparent;
	border-right: 10px solid <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	border-bottom: 16px solid transparent;
	position: absolute;
	top: 0;
	left: -10px;
	box-shadow: 2px 0 0 -1px <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.post-tags a:after {
	content: '';
	width: 6px;
	height: 6px;
	background-color: #fff;
	border-radius: 50%;
	position: absolute;
	left: -2px;
	top: 13px;
}
.post-tags a:hover {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	color: #fff;
}
.post-tags a:hover:before {
	border-right-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	box-shadow: 2px 0 0 -1px <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.postlist .post header .entry-meta {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin: 0 0 5px 0;
	font-weight: 600;
}
.postlist .post header .entry-meta a {
	font-style: italic;
}
.postlist .post .entry-title {
	margin: 0 0 10px 0;
}
.postlist .post .entry-title strong,
.postlist .post .entry-title span {
	font-style: normal;
}
.postlist .post .fw-post-image {
	margin-bottom: 45px;
}
.postlist .post .entry-content {
	padding: 0;
}
.postlist .post.post-list-type-2 .entry-content {
	padding-right: 20px;
	padding-left: 20px;
}
.postlist .post .entry-content iframe,
.postlist .post .entry-content embed,
.postlist .post .entry-content img {
	max-width: 100% !important;
}
.postlist .post footer.entry-meta .footer-meta {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
}
.postlist .post footer.entry-meta {
	margin: 20px 0 0;
}
.postlist .post footer.entry-meta .comments-link {
	float: right;
}
.postlist.postlist-list .post {
	margin-bottom: <?php echo esc_js( floatval($start_less_variables['fw-content-density']*5) ); ?>px;
	padding-bottom: <?php echo esc_js( floatval($start_less_variables['fw-content-density']*5) ); ?>px;
	border-bottom: 1px solid #dee0e1;
}
.postlist.postlist-list .post:last-child {
	border-bottom: none;
}
.postlist.postlist-list .comments-link {
	float: right;
}

