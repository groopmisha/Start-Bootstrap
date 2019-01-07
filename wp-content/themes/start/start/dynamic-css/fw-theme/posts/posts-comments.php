/* Posts Comments List Layout */
/* -------------------------------------------------- */
.comments-area {
	position: relative;
}
.comments-area.user-is-logged .comment-respond .right-side-comment {
	width: 100%;
	float: none;
}
.comments-area.user-is-logged .comment-respond .form-submit,
.comments-area.user-is-logged .comment-respond .right-side-comment {
	padding: 0;
}
.comments-title,
.comment-reply-title {
	display: block;
	position: relative;
	margin-bottom: 40px;
	font-size: 26px;
	text-transform: uppercase;
	font-style: normal;
}
.comments-title strong,
.comment-reply-title strong {
	font-style: normal;
}
.link-add-comment {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.comment-list {
	margin: 0 0 45px 0;
	padding: 0;
	border-bottom: 1px solid #dee0e1;
	list-style: none;
}
.comment-list .comment-date {
	font-size: 14px;
	text-transform: uppercase;
}
.comment-list li:first-child .comment-body {
	padding-top: 45px;
}
.comment-list .comment,
.comment-list .pingback {
	list-style: none;
	border-top: 1px solid #dee0e1;
}
.comment-list > .comment:first-child {
	border-top: none;
}
.comment-list p {
	color: #5D696E;
}
.comment-body {
	padding: <?php echo esc_js( floatval($start_less_variables['fw-content-density']) *4.5); ?>px 0;
	position: relative;
}
.comment-body:before,
.comment-body:after {
	content: " ";
	display: table;
}
.comment-body:after {
	clear: both;
}
.comment-body .wrap-rating {
	margin-left: 10px;
}
.pingback .comment-body {
	padding-top: 0;
}
.comment-avatar {
	width: 60px;
	height: 60px;
	float: left;
}
.comment-avatar img {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	border-radius: 50%;
}
.comment-aside {
	padding-left: 90px;
}
.children {
	padding-left: 0;
}
.children .depth-2 {
	margin-left: 90px;
}
.children .depth-3 {
	margin-left: 90px;
}
.children .comment-avatar:before {
	font-family: 'FontAwesome';
	content: '\f148';
	font-size: 20px;
	line-height: 1em;
	color: #dee0e1;
	position: absolute;
	top: 60px;
	left: -60px;
	filter: progid:DXImageTransform.Microsoft.gradient.BasicImage(rotation=0, mirror=1);
	-webkit-transform: scale(-1, 1);
	-moz-transform: scale(-1, 1);
	-ms-transform: scale(-1, 1);
	-o-transform: scale(-1, 1);
	transform: scale(-1, 1);
}
.comment-meta {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	margin-bottom: 10px;
	line-height: 1em;
	font-size: 15px;
	text-align: right;
}
.comment-author {
	font-size: 15px;
	text-transform: uppercase;
	display: inline-block;
	float: left;
	margin-bottom: 5px;
}
.comment-author a {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.comment-author a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.comment-content p:last-child {
	margin-bottom: 0;
}
.comment-reply-link {
	font-size: 14px;
	text-transform: uppercase;
	margin-left: 5px;
	text-transform: capitalize;
}
.bypostauthor > article .comment-author a {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}

/* Comment Respond Form */
/* -------------------------------------------------- */
.comment-respond {
	margin: 100px 0 0;
}
.comment-respond .comment-reply-title {
	margin-top: 0;
}
.comment-respond textarea {
	min-height: 234px;
	max-height: 320px;
}
.comment-respond .left-side-comment,
.comment-respond .right-side-comment {
	width: 50%;
	display: inline-block;
}
.comment-respond .left-side-comment p,
.comment-respond .right-side-comment p {
	position: relative;
}
.comment-respond .left-side-comment p .optional,
.comment-respond .right-side-comment p .optional {
	position: absolute;
	font-size: 15px;
	font-style: italic;
	bottom: -25px;
	left: 0;
}
.comment-respond .left-side-comment {
	float: left;
	padding-right: 2.6%;
}
.comment-respond .right-side-comment {
	float: right;
	padding-left: 2.6%;
}
#cancel-comment-reply-link {
	border-bottom: 1px dashed <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	float: right;
	position: relative;
	top: 14px;
	font-size: 0.6em;
	letter-spacing: 1px;
}
.comment .comment-respond {
	margin-top: 0;
}
.comment-form {
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-3'], 0.1) ); ?>;
	padding: 30px;
	position: relative;
}
.comment-form:before,
.comment-form:after {
	content: " ";
	display: table;
}
.comment-form:after {
	clear: both;
}
.comment-notes {
	font-style: italic;
}
.comment-form label {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	line-height: 19px;
	font-size: <?php echo esc_js($start_less_variables['input-font-size']); ?>;
	color: <?php echo esc_js($start_less_variables['text-color']); ?>;
	text-transform: uppercase;
}
.comment-form input:focus,
.comment-form textarea:focus {
	border-color: #b3b3b3;
}
.required-label {
	color: #e14d47;
}
.form-submit {
	padding-top: 2.3em;
	display: block;
	width: 50%;
	padding-right: 2.6%;
	margin-bottom: 0;
	overflow: hidden;
}
.form-submit .submit,
.form-submit #submit {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	padding: <?php echo esc_js($start_less_variables['padding-base-vertical']); ?> <?php echo esc_js($start_less_variables['padding-base-horizontal']); ?>;
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-base']) -2 ); ?>px;
	line-height: <?php echo esc_js( floatval($start_less_variables['font-size-base']) -1 ); ?>px;
	border: none;
	color: #fff;
	width: 100%;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.form-submit .submit:hover,
.form-submit #submit:hover {
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}

/* Responsive */
/* Screen 768px */
@media (max-width: 991px) {
	.comment-respond {
		margin-top: 80px;
	}
	.comments-area {
		padding: 0 15px;
	}
}

/* Screen 568px */
@media (max-width: 767px) {
	.comment-author {
		display: inline-block;
		float: left;
	}
	.comment-meta {
		text-align: right;
	}
	.comment-respond textarea {
		min-height: 150px;
		max-height: 200px;
	}
	.children .depth-3 {
		margin-left: 0;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.comment-avatar {
	float: none;
		margin-bottom: 20px;
	}
	.comment-aside {
		padding-left: 0;
	}
	.comments-title {
		margin-bottom: 0;
	}
	.comment-meta {
		text-align: left;
	}
	.comment-author {
		float: none;
		display: block;
	}
	.children .depth-2,
	.children .depth-3 {
		margin-left: 0;
	}
	.form-submit {
		width: 100%;
	}
	.comment-form {
		padding: 20px;
	}
}

.start_checkbox {
	margin: 10px 0;
}
.start_checkbox label {
	width: 100%;
}
.start_checkbox input[type="checkbox"] {
	display: inline-block;
	float: left;
	margin-right: 10px;
}
