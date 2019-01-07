/* Mobile Menu */
.mm-menu {
	z-index: 998;
	font-size: 14px;
	font-weight: normal;
	font-style: normal;
	letter-spacing: 0;
	text-transform: uppercase;
}
.mm-menu .mm-panels,
.mm-menu .mm-panel,
.mm-menu .mm-panel.mm-current{
	-webkit-box-shadow: inset 1px 0 8px 0 rgba(0, 0, 0, 0.3);
	-moz-box-shadow: inset 1px 0 8px 0 rgba(0, 0, 0, 0.3);
	box-shadow: inset 1px 0 8px 0 rgba(0, 0, 0, 0.3);
}
.mm-slideout{
	z-index: 999;
}
.mm-menu * {
	box-sizing: content-box;
}
.mmenu-link {
	display: none;
	line-height: 26px;
	white-space: nowrap;
}
.mmenu-link i {
	font-weight: normal;
	font-size: 28px;
	color: #0f1f25;
}
.show-mobile-only {
	display: none;
}
.mm-listview{
	font-size: 14px;
	line-height: 22px;
	font-weight: normal;
	font-style: normal;
	letter-spacing: 0;
}
.mm-listview > li > p {
	padding: 10px 10px 10px 20px;
	color: rgba(255, 255, 255, 0.4);
}
.mm-listview > li > a i{
	margin-right: 10px;
}
.mm-menu .menu-separator{
	display: none;
}
.fw-header.fw-sticky-menu nav#mobile-menu {
	display: none;
}
/* Screen 1024px */
@media (max-width: 1199px) {
	.mm-menu {
		font-family: 'Helvetica', sans-serif;
	}
	.fw-header .mmenu-link {
		display: inline-block;
	}

	/* Reponsive Header 3 */
	.header-3.search-in-menu .fw-search,
	.header-3 .mmenu-link {
		display: table-cell;
		width: 50%;
	}
	.header-3 .fw-nav-wrap {
		margin-top: 1em;
	}
	.header-3.search-in-menu .fw-mini-search .fw-search-icon {
		margin: 0 auto;
	}
	.fw-site-navigation {
		display: none !important;
	}
	em.mm-counter + a.mm-subopen {
		padding-left: 30px !important;
	}
	.mm-menu .mm-search input {
		border-radius: 4px;
	}
}
@media (min-width: 1200px) {
	#mm-my-menu,
	#mobile-menu {
		display: none !important;
	}
	.show-mobile-only {
		display: none !important;
	}
}
