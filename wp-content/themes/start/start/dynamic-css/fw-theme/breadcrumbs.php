/* Breadcrumbs */
/* -------------------------------------------------- */
.breadcrumbs {
	margin-top: 0;
	margin-bottom: 30px;
	line-height: 40px;
	position: relative;
}
.breadcrumbs span {
	background: <?php echo esc_js($start_less_variables['container-bg']); ?>;
}
.breadcrumbs span.separator {
	margin: 0 -2px;
	padding: 0 5px;
}
.breadcrumbs span:last-child {
	background-color: <?php echo esc_js($start_less_variables['container-bg']); ?>;
	display: inline-block;
	padding-right: 10px;
	font-family: "Montserrat";
	font-size: 13px;
	font-weight: 500;
	text-transform: uppercase;
}
.breadcrumbs span:last-child:after {
	content: "";
	border-bottom: 1px solid #dee0e1;
	left: 0;
	position: absolute;
	right: 0;
	top: 50%;
	z-index: -1;
}

