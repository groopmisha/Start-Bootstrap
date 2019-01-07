/* Custom Styled CheckBox  & Radio */
/*-----------------------------------*/
.custom-checkbox,
.custom-radio {
	position: relative;
}
.custom-checkbox::selection,
.custom-radio::selection {
	background: transparent;
	color: inherit;
}
.custom-checkbox input,
.custom-radio input {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	position: absolute;
	top: 0;
	left: 10px;
	margin: 0;
	border: none;
	width: 1px;
	height: 1px;
	display: none;
}
.custom-checkbox label,
.custom-radio label {
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array() ); ?>;
	font-weight: 400;
	font-style: normal;
	display: block;
	position: relative;
	padding-left: 24px;
	margin-bottom: 1.2em;
	font-size: 14px;
	line-height: 1.2em;
	min-height: 14px;
	cursor: pointer;
	color: #666;
}
.custom-checkbox label::selection,
.custom-radio label::selection {
	background: transparent;
	color: inherit;
}
.custom-checkbox label.focus,
.custom-radio label.focus {
	outline: none;
}
.custom-checkbox label:before,
.custom-radio label:before,
.custom-checkbox label:after,
.custom-radio label:after {
	content: '';
	position: absolute;
	top: 50%;
	left: 0;
}
.custom-checkbox label:before,
.custom-radio label:before {
	width: 14px;
	height: 14px;
	border-radius: 1px;
	border: 1px solid #bfbfbf;
	background: #fff;
	margin-top: -7px;
	-webkit-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
.custom-checkbox label:after,
.custom-radio label:after {
	width: 6px;
	height: 6px;
}
.custom-checkbox label.checked:before,
.custom-radio label.checked:before {
	background: #fff;
}
.custom-checkbox label:after,
.custom-radio label:after {
	margin-top: -3px;
	left: 4px;
}
.custom-radio label.checked:after {
	border-radius: 50%;
	background: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.custom-checkbox label.checked:after {
	background: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
.custom-radio label:before,
.custom-radio label.checked:after {
	border-radius: 50%;
}
.ie8 .custom-checkbox input,
.ie8 .custom-radio input {
	display: block;
}

/* Responsive */
@media (max-width: 1199px) {
	.custom-checkbox label,
	.custom-radio label {
		font-size: 11px;
	}
}

