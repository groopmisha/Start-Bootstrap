/* Top Nav Menu */
/* -------------------------------------------------- */
.fw-nav-wrap .fw-site-navigation {
	font-size: 0;
}
.fw-site-navigation > ul {
	font-family: <?php echo wp_kses($start_less_variables['font-family-5'], array()); ?>;
	font-size: 12px;
	font-weight: 400;
	font-style: normal;
	margin: 0 auto;
	padding: 0;
	list-style: none;
}
.fw-site-navigation > ul li {
	position: relative;
	list-style: none;
}
.fw-site-navigation > ul .menu-item-has-icon i {
	font-size: 12px;
	margin-right: 10px;
	position: relative;
}

/* 1st level */
.fw-site-navigation > ul > li {
	border-bottom: 6px solid <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	float: left;
	position: relative;
}
.fw-site-navigation > ul > li > a {
	color: #636363;
	line-height: 46px;
	letter-spacing: 1px;
	display: inline-block;
	float: left;
	position: relative;
	-webkit-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
}
.fw-site-navigation > ul > li > a:after {
	content: "";
	left: 50%;
	position: absolute;
	width: 0;
	bottom: -6px;
	height: 6px;
	background: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	-webkit-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
}
.fw-site-navigation > ul > li > a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.fw-site-navigation > ul > li:hover > ul {
	display: block;
}
.fw-site-navigation > ul > li:hover a:after {
	width: 100%;
	margin-left: -50%;
}

/* Menu Separators */
.fw-site-navigation > ul > li.menu-separator a:after {
	display: none;
}
.fw-site-navigation > ul > li.menu-separator a:hover {
	color: #636363;
	cursor: default;
}
.fw-site-navigation > ul > li.current-menu-item a:after,
.fw-site-navigation > ul > li.current-menu-ancestor a:after {
	width: 100%;
	margin-left: -50%;
}

/* 2nd level */
.fw-site-navigation > ul > li ul {
	top: 29px;
	width: 280px;
	font-size: 15px;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	padding-top: 17px;
	padding-left: 0;
	padding-right: 0;
	position: absolute;
	left: 0;
	z-index: 1308;
	text-align: left;
	text-transform: none;
	display: none;
}
.fw-site-navigation > ul > li ul.left {
	left: -281px;
}
.fw-site-navigation > ul > li ul.left ul {
	left: -281px;
}
.fw-site-navigation > ul > li ul > li {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	background: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	background: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], 0.94) ); ?>;
	display: block;
	width: 100%;
	margin-left: 0;
	float: left;
	-webkit-transition: all 0.2s ease;
	-o-transition: all 0.2s ease;
	transition: all 0.2s ease;
}
.fw-site-navigation > ul > li ul > li:first-child {
	padding-top: 13px;
}
.fw-site-navigation > ul > li ul > li:last-child {
	padding-bottom: 13px;
}
.fw-site-navigation > ul > li ul > li > a {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	display: block;
	line-height: 1.2em;
	padding: 10px 12% !important;
	margin: 0 !important;
}
.fw-site-navigation > ul > li ul > li > a:before {
	width: 15px;
	font-size: 18px;
}
.fw-site-navigation > ul > li ul > li.menu-item-has-icon > a:before {
	margin-right: 0;
	content: "";
}
.fw-site-navigation > ul > li ul > li:hover > a,
.fw-site-navigation > ul > li ul > li.parent.hover > a,
.fw-site-navigation > ul > li ul > li.current-menu-item > a {
	color: #fff;
	background: #0d0d0d;
}

/* 3nd level */
.fw-site-navigation > ul > li ul > li > ul {
	top: 0;
	left: 281px;
	padding: 0;
	background: none;
}
.fw-site-navigation > ul > li ul > li > ul > li {
	background: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	background: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-2'], 0.94) ); ?>;
}
.fw-site-navigation > ul > li ul > li > ul > li:first-child,
.fw-site-navigation > ul > li ul > li > ul > li:last-child {
	padding: 0;
}
.fw-site-navigation > ul > li ul > li:first-child:hover > ul {
	top: 13px;
}
.fw-site-navigation > ul > li ul > li:hover > ul {
	display: block;
}
.fw-site-navigation > ul > li > ul.left {
	right: 70px;
	left: auto;
}

/* other level */
.fw-site-navigation > ul > li ul > li > ul ul{
	top: 0;
}

/* Primary & Secondary Menu Error Message */
.fw-primary-menu-message {
	color: #ff0000;
	background: #fff;
	border: 1px solid #ff0000;
	padding: 5px;
}
.fw-primary-menu-message a {
	color: #ff0000;
	text-decoration: underline;
}
.fw-primary-menu-message a:hover {
	color: #ff0000;
	text-decoration: none;
}