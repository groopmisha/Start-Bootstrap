/*
* selectize.theme.css  (for Bootstrap 3)
*/
.selectize-dropdown,
.selectize-dropdown.form-control {
	height: auto;
	padding: 0;
	margin: 2px 0 0 0;
	z-index: 1000;
	background: #fff;
	border: 1px solid #ccc;
	border-radius: 0;
	box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}
.selectize-dropdown .optgroup:first-child:before {
	display: none;
}
.selectize-dropdown,
.selectize-input,
.selectize-input input {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	font-weight: 400;
	font-style: normal;
}
.selectize-dropdown .optgroup-header {
	font-size: <?php echo esc_js( ceil(floatval($start_less_variables['font-size-base'])*0.85) ); ?>px;
	line-height: <?php echo esc_js($start_less_variables['line-height-base']); ?>;
}
.selectize-dropdown .optgroup:before {
	content: ' ';
	display: block;
	margin-left: -<?php echo esc_js( $start_less_variables['padding-base-horizontal']); ?>;
	margin-right: -<?php echo esc_js( $start_less_variables['padding-base-horizontal']); ?>;
}
.selectize-dropdown-header {
	padding: 6px <?php echo esc_js($start_less_variables['padding-base-horizontal']); ?>;
}
.selectize-dropdown-content {
	padding: 5px 0;
}
.selectize-input {
	border-radius: 0;
	min-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	padding: <?php echo esc_js($start_less_variables['input-padding-y']); ?> <?php echo esc_js($start_less_variables['input-padding-x']); ?>;
	box-shadow: none;
}
.selectize-input > * {
	line-height: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
}
.selectize-input.dropdown-active {
	border-radius: 0;
}
.selectize-input.dropdown-active::before {
	display: none;
}
.selectize-input.focus {
	border-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	box-shadow: none;
	outline: 0;
}
.has-error .selectize-input {
	border-color: #fff;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .selectize-input:focus {
	border-color: #e6e6e6;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;
}
.form-control.selectize-control {
	padding: 0;
	height: auto;
	border: none;
	background: none;
	box-shadow: none;
	border-radius: 0;
}
.selectize-input {
	font-weight: normal;
	border: none;
}
.selectize-input input {
	height: auto !important;
	position: static !important;
}
.selectize-input.focus,
.selectize-input.input-active,
.selectize-input.dropdown-active {
	border: none;
	box-shadow: none;
}
.selectize-control.multi .selectize-input.has-items {
	padding-left: <?php echo esc_js( floatval($start_less_variables['input-padding-x'] ) - 3 ); ?>px;
	padding-right: <?php echo esc_js( floatval($start_less_variables['input-padding-x'] ) - 3 ); ?>px;
}
.selectize-control.multi .selectize-input > div {
	border-radius: 0;
}
.widget_archive .selectize-input.full,
.widget_categories .selectize-input.full,
.widget_archive .selectize-control.single .selectize-input.input-active,
.widget_categories .selectize-control.single .selectize-input.input-active {
	background-color: rgba(0, 0, 0, 0.07);
}
.widget_archive .selectize-input,
.widget_categories .selectize-input {
	border: none;
}

