/* Dividers & Space */
/* -------------------------------------------------- */

/* Divider space (empty) */
.fw-divider-space {
	clear: both;
	width: 100%;
}
.fw-divider-space.space-sm {
	height: <?php echo esc_js($start_less_variables['fw-divider-space-sm']); ?>;
}
.fw-divider-space.space-md {
	height: <?php echo esc_js($start_less_variables['fw-divider-space-md']); ?>;
}
.fw-divider-space.space-lg {
	height: <?php echo esc_js($start_less_variables['fw-divider-space-lg']); ?>;
}

/* Divider only Line */
.fw-divider-line {
	clear: both;
	position: relative;
	margin-left: auto;
	margin-right: auto;
	max-width: 100%;
}
.fw-divider-line.space-sm {
	margin-bottom: <?php echo esc_js( floatval($start_less_variables['fw-divider-space-sm']) /2 ); ?>px;
	padding-top: <?php echo esc_js( floatval($start_less_variables['fw-divider-space-sm']) /2 ); ?>px;
}
.fw-divider-line.space-md {
	margin-bottom: <?php echo esc_js( floatval($start_less_variables['fw-divider-space-md']) /2 ); ?>px;
	padding-top: <?php echo esc_js( floatval($start_less_variables['fw-divider-space-md']) /2 ); ?>px;
}
.fw-divider-line.space-lg {
	margin-bottom: <?php echo esc_js( floatval($start_less_variables['fw-divider-space-lg']) /2 ); ?>px;
	padding-top: <?php echo esc_js( floatval($start_less_variables['fw-divider-space-lg']) /2 ); ?>px;
}

/* divider line styles */
.fw-divider-line.fw-line-solid {
	border-bottom: 1px solid #ECECEC;
}

@media(max-width:767px){
	.fw-divider-space.space-lg {
		max-height: 60px;
	}
	.fw-divider-space.fw-custom-space {
		max-height: 40px;
	}
}

