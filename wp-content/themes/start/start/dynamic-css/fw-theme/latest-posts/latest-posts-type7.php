/*-------------------------------*/
/*   Latest Posts Type 6 Style   */
/*-------------------------------*/

.latest-posts.lp-type7 {
	position: relative;
}
.latest-posts.lp-type7 .lp-content {
	min-width: 25%;
	min-height: 25%;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
}
@media (max-width: 990px) and (min-width: 768px) {
	.latest-posts.lp-type7 .lp-content {
		display: block;
	}
}
@media (max-width: 767px) {
	.latest-posts.lp-type7 .lp-content {
		display: block;
	}
}
.latest-posts.lp-type7 .lp-content .lp-item {
	padding: 3px 3px 0;
	position: relative;
	overflow: hidden;
}
@media (min-width: 991px) {
	.latest-posts.lp-type7 .lp-content .lp-item {
		width: 25%;
		top: auto !important;
		-webkit-align-self: flex-start;
		-ms-flex-item-align: start;
		align-self: flex-start;
	}
}
@media (max-width: 990px) and (min-width: 768px) {
	.latest-posts.lp-type7 .lp-content .lp-item {
		width: 50%;
		display: inline-block;
	}
}
@media (min-width: 991px) {
	.latest-posts.lp-type7 .lp-content .lp-item:first-child {
		width: 50%;
	}
}
@media (max-width: 990px) and (min-width: 768px) {
	.latest-posts.lp-type7 .lp-content .lp-item:first-child {
		width: 100%;
		display: block;
	}
}
.latest-posts.lp-type7 .lp-content .lp-item:first-child .lp-item-content .lp-title,
.latest-posts.lp-type7 .lp-content .lp-item:first-child .lp-item-content .lp-title a {
	font-size: 35px;
	line-height: 40px;
}
@media (max-width: 990px) and (min-width: 768px) {
	.latest-posts.lp-type7 .lp-content .lp-item:nth-child(3) {
		width: 50%;
		float: right;
		margin-bottom: -100%;
	}
}
@media (min-width: 991px) {
	.latest-posts.lp-type7 .lp-content .lp-item:last-child {
		margin-left: -25%;
		-webkit-align-self: flex-end;
		-ms-flex-item-align: end;
		align-self: flex-end;
	}
}
@media (max-width: 990px) and (min-width: 768px) {
	.latest-posts.lp-type7 .lp-content .lp-item:last-child {
		width: 50%;
		float: right;
		margin-bottom: 0;
	}
}
.latest-posts.lp-type7 .lp-content .lp-item:last-child,
.latest-posts.lp-type7 .lp-content .lp-item:nth-child(3),
.latest-posts.lp-type7 .lp-content .lp-item:last-child a.lp-thumb,
.latest-posts.lp-type7 .lp-content .lp-item:nth-child(3) a.lp-thumb {
	height: 225.5px;
}
.latest-posts.lp-type7 .lp-content .lp-item:hover .lp-thumb:before {
	opacity: 0.3;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-category-name-wrap {
	position: absolute;
	top: 20px;
	left: 20px;
	margin: 0;
	border: none;
	z-index: 10;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-category-name-wrap .lp-category-name {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-size: 12px;
	border: none;
	color: #fff;
	font-style: normal;
	text-transform: none;
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	padding: 8px 10px;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-category-name-wrap .lp-category-name:hover {
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-thumb {
	position: relative;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	transition-duration: .1s;
	transition-property: width,height,background;
	transition-delay: .1s;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-thumb > img {
	display: block;
	width: 100%;
	opacity: 0;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-thumb:before {
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	opacity: 0.5;
}
@media (min-width: 991px) {
	.latest-posts.lp-type7 .lp-content .lp-item .lp-thumb {
		height: 451px;
	}
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content {
	position: absolute;
	bottom: 22px;
	padding: 0 45px 0 20px;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title {
	margin-top: 0;
	line-height: 30px;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a {
	color: #fff;
	font-size: 25px;
	line-height: 30px;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a span {
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a:hover,
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a:hover span {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-meta {
	font-size: 18px;
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	margin-top: 20px;
	margin-bottom: 0;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-meta a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-meta .author:after {
	background-color: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-comments-link {
	font-size: 14px;
	line-height: 30px;
	min-width: 30px;
	height: 30px;
	position: absolute;
	top: 20px;
	right: 20px;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-comments-link:before {
	min-width: 30px;
	height: 30px;
	line-height: 29px;
	font-size: 14px;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-comments-link:hover:before {
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.latest-posts.lp-type7 .lp-content .lp-item .lp-comments-link:hover:after {
	border-top-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}

/* If exist sidebar */
.fw-content-area.col-md-8 .latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title,
.fw-content-area.col-md-8 .latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a {
	font-size: 20px;
	line-height: 22px;
}
.fw-content-area.col-md-8 .latest-posts.lp-type7 .lp-content .lp-item:first-child .lp-item-content .lp-title,
.fw-content-area.col-md-8 .latest-posts.lp-type7 .lp-content .lp-item:first-child .lp-item-content .lp-title a {
	font-size: 35px;
	line-height: 38px;
}
.fw-content-area.col-md-8 .latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-meta .author {
	display: none;
}

/* Responsive */
/*Screen 1024px*/
@media(max-width:1199px){
	.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a {
		font-size: 21px;
	}
	.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-meta {
		margin-top: 10px;
	}
}

/* Screen 736px */
@media(max-width:767px){
	.latest-posts.lp-type7 .lp-content .lp-item {
		top: 0 !important;
	}
	.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a,
	.latest-posts.lp-type7 .lp-content .lp-item:first-child .lp-item-content .lp-title a {
		font-size: 30px;
	}
}

/* Screen 320px */
@media(max-width:479px){
	.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-title a,
	.latest-posts.lp-type7 .lp-content .lp-item:first-child .lp-item-content .lp-title a {
		font-size: 25px;
	}
	.latest-posts.lp-type7 .lp-content .lp-item .lp-item-content .lp-meta {
		font-size: 18px;
	}
}

