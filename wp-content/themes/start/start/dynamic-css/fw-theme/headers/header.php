/* Header Layout */
/* -------------------------------------------------- */

.fw-header {
	position: relative;
	z-index: 100;
}
.fw-header .fw-header-main {
	width: 100%;
	text-align: right;
	position: relative;
	z-index: 100;
	background: #fff;
}
.fw-top-social-right .fw-text-top-bar {
	float: left;
}
.fw-top-social-right .fw-top-bar-social {
	float: none;
}
.fw-top-social-left .fw-text-top-bar {
	float: right;
}
.fw-top-social-left .fw-top-bar-social {
	float: left;
}
.fw-absolute-header .fw-header {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
}
.fw-header-sticky .fw-sticky-menu {
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	visibility: visible;
	z-index: 100;
	opacity: 0;
	-webkit-box-shadow: 0 1px 5px 0 rgba(0,0,0,0.09);
	-moz-box-shadow: 0 1px 5px 0 rgba(0,0,0,0.09);
	box-shadow: 0 1px 5px 0 rgba(0,0,0,0.09);
	transform: translate(0, -100%);
	transition: transform 600ms ease, opacity 600ms ease;
}
.fw-header-sticky .fw-sticky-menu.fw-sticky-menu-open {
	transition: transform 600ms ease, opacity 600ms ease;
	transform: translate(0, 0);
	opacity: 1;
	z-index: 999;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.fw-header-sticky .fw-sticky-menu .fw-top-bar {
	display: none;
}

/* Responsive */
/*Screen 768px*/
@media (max-width: 991px) {
	.search-in-top-bar .fw-search,
	.fw-text-top-bar,
	.fw-top-bar-social {
		display: inline-block;
		width: 100%;
		text-align: center !important;
		float: none !important;
		padding: 0;
		margin: 0;
		position: initial;
	}
	.search-in-top-bar .fw-search {
		padding: 0 !important;
		margin: 0 !important;
	}
	.search-in-top-bar .fw-search.fw-mini-search {
		display: block;
		position: relative;
		top: 0 !important;
		left: 50%;
		margin: 0 !important;
		padding-left: 10px !important;
	}
	.search-in-top-bar .fw-search.fw-mini-search .fw-wrap-search-form {
		right: 0;
	}
	.search-in-top-bar .fw-search .fw-wrap-search-form {
		margin: 0 auto;
	}
}