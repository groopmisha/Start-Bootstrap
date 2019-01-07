/* Forms & Form Elements */
/* -------------------------------------------------- */

/* Form Placeholder */
::-moz-placeholder {
	color: #cccccc;
	opacity: 1;
}
:-ms-input-placeholder {
	color: #cccccc;
}
::-webkit-input-placeholder {
	color: #cccccc;
}

input[type="text"],
input[type="password"],
input[type="search"],
input[type="url"],
input[type="email"],
input[type="date"],
textarea,
.wpcf7-form > p > label .wpcf7-form-control input,
.wpcf7-form > p > label .wpcf7-form-control-wrap input {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	font-weight: normal;
	font-style: normal;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	font-size: <?php echo esc_js($start_less_variables['input-font-size']); ?>;
	padding: <?php echo esc_js($start_less_variables['input-padding-y']); ?> <?php echo esc_js($start_less_variables['input-padding-x']); ?>;
	background: #fff;
	-webkit-appearance: none;
	-moz-appearance: none;
	border: none;
	margin: 0;
	outline: none;
	width: 100%;
}
textarea {
	height: auto;
	resize: vertical;
}
.wrap-forms,
.wpcf7-form {
	background-color: #e8eced;
	padding: <?php echo esc_js( floatval($start_less_variables['fw-content-density']) *3 ); ?>px;
}
.wrap-forms .selectize-input.full,
.wpcf7-form .selectize-input.full {
	background-color: #fff;
}
.wrap-forms .fw-contact-form-title,
.wpcf7-form .fw-contact-form-title {
	font-size: 38px;
	margin: 0;
}
.wrap-forms .header.title,
.wpcf7-form .header.title {
	margin-bottom: <?php echo esc_js( floatval($start_less_variables['fw-content-density']) *3 ); ?>px;
}
.wrap-forms,
.wrap-forms .header.title {
	padding-left: 15px;
	padding-right: 15px;
}
.wrap-forms .header.title .fw-contact-form-description,
.wpcf7-form .header.title .fw-contact-form-description {
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	letter-spacing: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
}
.wrap-forms .fw-row,
.wpcf7-form .fw-row {
	padding-top: <?php echo esc_js( floatval($start_less_variables['fw-content-density']) *1 ); ?>px;
	padding-bottom: <?php echo esc_js( floatval($start_less_variables['fw-content-density']) *1 ); ?>px;
}
.wrap-forms .row-submit,
.wpcf7-form .row-submit {
	padding-top: <?php echo esc_js( floatval($start_less_variables['fw-content-density']) *2 ); ?>px;
}
.wrap-forms .form-builder-item > div > label,
.wpcf7-form .form-builder-item > div > label,
.wpcf7-form > p > label {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-size: <?php echo esc_js( floatval($start_less_variables['input-font-size']) -2 ); ?>px;
	text-transform: uppercase;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	font-weight: bold;
	font-style: normal;
}
.wpcf7-form > p > label {
	width: 100%;
}
.wpcf7-form .wpcf7-form-control,
.wpcf7-form .wpcf7-form-control-wrap {
	width: 100%;
	display: block;
}
.wpcf7-form input.wpcf7-submit.wpcf7-form-control.wpcf7-submit {
	width: auto;
}
.wrap-forms .form-builder-item > div > label sup {
	color: #d3604d;
}
.wrap-forms .form-builder-item p,
.wpcf7-form .form-builder-item p {
	font-size: <?php echo esc_js( floatval($start_less_variables['font-size-small']) - 1 ); ?>px;
}
.wrap-forms .form-builder-item p {
	margin-top: 6px;
	margin-bottom: 0;
}
.wrap-forms .form-builder-item textarea {
	height: 150px;
}
.wrap-forms .input-styled > label {
	margin-bottom: 10px;
}
.wrap-forms .input-styled.fw-item-one-column .options .custom-radio {
	display: inline-block;
}
.wrap-forms .input-styled.fw-item-two-columns .options {
	width: 50%;
	float: left;
}
.wrap-forms .input-styled.fw-item-three-columns .options {
	width: 33.33%;
	float: left;
}
.wrap-forms .input-styled.fw-item-side-by-side .options {
	float: left;
	margin-right: 5%;
}
.wrap-forms .input-styled .custom-checkbox:before,
.wpcf7-form .input-styled .custom-checkbox:before,
.wrap-forms .input-styled .custom-radio:before,
.wpcf7-form .input-styled .custom-radio:before,
.wrap-forms .input-styled .custom-checkbox:after,
.wpcf7-form .input-styled .custom-checkbox:after,
.wrap-forms .input-styled .custom-radio:after,
.wpcf7-form .input-styled .custom-radio:after {
	content: " ";
	display: table;
}
.wrap-forms .input-styled .custom-checkbox:after,
.wpcf7-form .input-styled .custom-checkbox:after,
.wrap-forms .input-styled .custom-radio:after,
.wpcf7-form .input-styled .custom-radio:after {
	clear: both;
}
.wrap-forms .input-styled .custom-checkbox:before,
.wpcf7-form .input-styled .custom-checkbox:before,
.wrap-forms .input-styled .custom-radio:before,
.wpcf7-form .input-styled .custom-radio:before,
.wrap-forms .input-styled .custom-checkbox:after,
.wpcf7-form .input-styled .custom-checkbox:after,
.wrap-forms .input-styled .custom-radio:after,
.wpcf7-form .input-styled .custom-radio:after {
	content: " ";
	display: table;
}
.wrap-forms .input-styled .custom-checkbox:after,
.wpcf7-form .input-styled .custom-checkbox:after,
.wrap-forms .input-styled .custom-radio:after,
.wpcf7-form .input-styled .custom-radio:after {
	clear: both;
}
.wrap-forms .input-styled label,
.wpcf7-form .input-styled label {
	margin-bottom: 1em;
	line-height: 1em;
}

/* Post Password & Search Form */
.search-form .search-form {
	position: relative;
}
.search-form .screen-reader-text {
	display: none;
}
.search-form label {
	display: block;
}
.search-form .search-field::-moz-placeholder,
.post-password-form label input[type="password"]::-moz-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
	opacity: 1;
}
.search-form .search-field:-ms-input-placeholder,
.post-password-form label input[type="password"]:-ms-input-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
}
.search-form .search-field::-webkit-input-placeholder,
.post-password-form label input[type="password"]::-webkit-input-placeholder {
	color: <?php echo esc_js($start_less_variables['placeholder-color']); ?>;
}
.search-form .search-field,
.post-password-form label input[type="password"] {
	width: 100%;
	line-height: <?php echo esc_js( floatval($start_less_variables['input-padding-y']) *2 ); ?>px;
	border: none;
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	background-color: rgba(0,0,0, 0.7);
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: <?php echo esc_js($start_less_variables['input-font-size']); ?>;
	padding: <?php echo esc_js($start_less_variables['input-padding-y']); ?> <?php echo esc_js($start_less_variables['input-padding-x']); ?>;
}
.search-form .search-submit {
	width: 28px;
	height: 28px;
	background-color: transparent;
	border: none;
	text-indent: 100px;
	position: absolute;
	top: 10px;
	right: 10px;
	z-index: 2;
	overflow: hidden;
}
.search-form label:after {
	display: inline-block;
	width: 28px;
	height: 28px;
	text-align: center;
	line-height: 28px;
	font-family: FontAwesome;
	content: "\f002";
	font-size: 16px;
	font-weight: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	position: absolute;
	top: 50%;
	margin-top: -14px;
	right: 10px;
	z-index: 1;
}

.post-password-form label {
	margin-right: 10px;
	margin-bottom: 0;
	vertical-align: bottom;
}
.post-password-form input[type="submit"],
.wpcf7-form input.wpcf7-submit {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
	font-size: 13px;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	letter-spacing: normal;
	display: inline-block;
	margin-bottom: 0;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	text-decoration: none;
	white-space: nowrap;
	outline: none;
	position: relative;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	max-width: 100%;
	/* fw-btn-md */
	padding: <?php echo esc_js($start_less_variables['padding-base-vertical']); ?> <?php echo esc_js($start_less_variables['padding-base-horizontal']); ?>;
	/* fw-btn-1 */
	background-color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	border-color: transparent;
	border-width: 0;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	border-radius: 0;
}
.post-password-form input[type="submit"]:hover,
.post-password-form input[type="submit"]:focus,
.wpcf7-form input.wpcf7-submit:hover,
.wpcf7-form input.wpcf7-submit:focus {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	color: #fff;
	text-decoration: none;
	outline: none;
}
.post-password-form input[type="submit"]:active
.wpcf7-form input.wpcf7-submit:active {
	box-shadow: none;
}
.post-password-form input[type="submit"] span,
.post-password-form input[type="submit"] i,
.wpcf7-form input.wpcf7-submit span,
.wpcf7-form input.wpcf7-submit i {
	position: relative;
	top: 1px;
}

.field-radio .custom-radio .options {
	line-height: 11px;
}
.flash-messages-info,
.flash-messages-success,
.flash-messages-error{
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}

