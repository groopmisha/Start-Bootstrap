/* Posts Comments Link */
/* -------------------------------------------------- */
.comments-link {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-style: normal;
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	position: relative;
	display: inline-block;
	font-size: 17px;
	font-weight: 400;
	color: #fff;
	text-align: center;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.comments-link.fw-comment-link-type-1 {
	min-width: 44px;
	height: 40px;
	line-height: 40px;
	padding: 0 10px;
}

/* Type 1 */
.comments-link.fw-comment-link-type-1:before {
	content: '+';
	position: absolute;
	left: 0;
	top: 0;
	min-width: 44px;
	height: 40px;
	line-height: 40px;
	font-size: 20px;
	opacity: 0;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.comments-link.fw-comment-link-type-1:after {
	content: '';
	width: 0;
	height: 0;
	border-right: 10px solid transparent;
	position: absolute;
	left: 14px;
	bottom: -8px;
	border-top: 8px solid <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.comments-link.fw-comment-link-type-1:hover {
	color: #fff;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.comments-link.fw-comment-link-type-1:hover:before {
	opacity: 1;
}
.comments-link.fw-comment-link-type-1:hover:after {
	border-top-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}

