/* widget calendar */
.widget_calendar {
	position: relative;
}
.widget_calendar #wp-calendar {
	background: <?php echo esc_js($start_less_variables['theme-color-4']); ?>;
	border: 1px solid <?php echo esc_js( start_adjustColorLightenDarken($start_less_variables['theme-color-4'], 10) ); ?>;
	position: relative;
	width: 100%;
}
.widget_calendar #wp-calendar caption {
	color: #fff;
	font-size: 14px;
	line-height: 46px;
	padding: 0;
	text-transform: uppercase;
	text-align: center;
	background: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget_calendar #wp-calendar th {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	border: 1px solid rgba(0, 0, 0, 0.1);
	padding: 12px 5px;
	background-color: #fff;
	font-size: 14px;
	font-weight: 600;
	text-align: center;
	text-transform: uppercase;
}
.widget_calendar #wp-calendar td {
	font-size: 14px;
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	text-align: center;
	border: none;
}
.widget_calendar #wp-calendar tbody td {
	border: none;
	width: 14.285%;
	border-collapse: collapse;
	padding: 0;
	line-height: 3.2em;
}
.widget_calendar #wp-calendar tbody .pad {
	color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget_calendar #wp-calendar tbody a {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
	display: block;
}
.widget_calendar #wp-calendar tbody a:hover {
	color: #fff;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
}
.widget_calendar #wp-calendar tr td#today {
	color: #fff;
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.widget_calendar #wp-calendar tr td#today a {
	color: #fff;
}
.widget_calendar #wp-calendar tfoot {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
}
.widget_calendar #wp-calendar tfoot a {
	font-size: 46px;
	width: 46px;
	height: 46px;
	display: block;
	overflow: hidden;
	font-weight: normal;
	padding: 0;
}
.widget_calendar #wp-calendar tfoot a:before {
	font-family: 'FontAwesome';
	font-size: 25px;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	width: 46px;
	height: 46px;
	line-height: 46px;
	display: block;
	color: #fff;
	position: relative;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.widget_calendar #wp-calendar tfoot #prev a:hover:before,
.widget_calendar #wp-calendar tfoot #next a:hover:before {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.widget_calendar #wp-calendar tfoot #prev,
.widget_calendar #wp-calendar tfoot #next {
	position: absolute;
	top: 0;
	left: 0;
	border: none;
	padding: 0;
}
.widget_calendar #wp-calendar tfoot #prev a,
.widget_calendar #wp-calendar tfoot #next a {
	display: block;
}
.widget_calendar #wp-calendar tfoot #prev a:focus:before,
.widget_calendar #wp-calendar tfoot #next a:focus:before,
.widget_calendar #wp-calendar tfoot #prev a:active:before,
.widget_calendar #wp-calendar tfoot #next a:active:before {
	top: 2px;
}
.widget_calendar #wp-calendar tfoot #prev a:before {
	content: '\f104';
}
.widget_calendar #wp-calendar tfoot #next {
	left: auto;
	right: 0;
}
.widget_calendar #wp-calendar tfoot #next a:before {
	content: '\f105';
}

