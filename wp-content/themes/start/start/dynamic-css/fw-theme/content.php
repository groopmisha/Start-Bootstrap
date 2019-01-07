/* Content Layout */
/* -------------------------------------------------- */

/* z-index for .fw-inner */
.fw-inner,
.fw-col-inner {
	position: relative;
	z-index: 10;
}

/* Content Row Overlay */
.fw-main-row-overlay {
	position: absolute !important;
	z-index: 2;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
}
.fw-container,
.fw-container-fluid {
	z-index: 10;
}

/* Parallax Styling */
.fw-main-row-custom.parallax-section {
	background-attachment: fixed;
}
.parallax {
	position: relative;
	background-attachment: fixed;
	background-position: 0 center;
}

/* Main top section under the Header */
/* vertical align middle for all that inside Row */
.fw-middle-align.fw-content-vertical-align-middle .fw-container *,
.fw-middle-align.fw-content-vertical-align-middle .fw-container-fluid * {
	visibility: visible;
}
.fw-content-vertical-align-middle .fw-container *,
.fw-content-vertical-align-middle .fw-container-fluid * {
	visibility: hidden;
}

/* Remove Section & Coll Padding */
.fw-section-no-padding .fw-container,
.fw-section-no-padding .fw-container-fluid {
	padding-top: 0 !important;
	padding-bottom: 0 !important;
}
.fw-col-no-padding {
	padding-left: 0 !important;
	padding-right: 0 !important;
}
.fw-wp-embed-shortcode iframe {
	border: 1px solid transparent;
}

/* Section Height */
.fw-section-height-md {
	height: <?php echo esc_js($start_less_variables['fw-section-height-md']); ?>;
}

/* Content Row Overlay */
.overlay_color_1 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?> !important;
}
.overlay_color_2 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?> !important;
}
.overlay_color_3 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-3']); ?> !important;
}
.overlay_color_4 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-4']); ?> !important;
}
.overlay_color_5 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-5']); ?> !important;
}

/* Typography density */
.fw-section-space-md .fw-main-row-custom .fw-container,
.fw-section-space-md .fw-main-row .fw-container,
.fw-section-space-md .fw-main-row-custom .fw-container-fluid,
.fw-section-space-md .fw-main-row .fw-container-fluid {
	padding-top: <?php echo esc_js($start_less_variables['fw-section-padding']); ?>;
	padding-bottom: <?php echo esc_js($start_less_variables['fw-section-padding']); ?>;
}

/*----> Responsive <---- */
@media (min-width: 1200px) {
	.fw-desktop-hide-element {
		display: none !important;
	}
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.fw-tablet-landscape-hide-element {
		display: none !important;
	}
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
	.fw-tablet-hide-element {
		display: none !important;
	}
}
/* Screen 568px */
@media (max-width: 767px) {
	.fw-section-space-md .fw-main-row .fw-container,
	.fw-section-space-md .fw-main-row .fw-container-fluid,
	.fw-section-space-md .fw-main-row-custom .fw-container,
	.fw-section-space-md .fw-main-row-custom .fw-container-fluid {
		padding-top: <?php echo esc_js( ceil(floatval($start_less_variables['fw-section-padding'])*0.5) ); ?>px;
		padding-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-section-padding'])*0.5) ); ?>px;
	}
	.fw-mobile-hide-element {
		display: none !important;
	}
}

/* Screen 320px */
@media (max-width: 479px) {
	.fw-section-space-md .fw-main-row .fw-container,
	.fw-section-space-md .fw-main-row .fw-container-fluid,
	.fw-section-space-md .fw-main-row-custom .fw-container,
	.fw-section-space-md .fw-main-row-custom .fw-container-fluid {
		padding-top: <?php echo esc_js( ceil(floatval($start_less_variables['fw-section-padding'])*0.3) ); ?>px;
		padding-bottom: <?php echo esc_js( ceil(floatval($start_less_variables['fw-section-padding'])*0.3) ); ?>px;
	}
}

/* Variables for changes the color (background, text, border) */
.start_bg_color_1 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-1']); ?> !important;
}
.start_bg_color_2 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?> !important;
}
.start_bg_color_3 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-3']); ?> !important;
}
.start_bg_color_4 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-4']); ?> !important;
}
.start_bg_color_5 {
	background-color: <?php echo esc_js($start_less_variables['theme-color-5']); ?> !important;
}

