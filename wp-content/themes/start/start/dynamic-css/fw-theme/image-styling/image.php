/* Image Block */
/* -------------------------------------------------- */
.fw-block-image-parent {
	position: relative;
	display: block;
}
.fw-block-image-parent .fw-block-image-child {
	display: block;
}
.fw-block-image-parent.fw-block-image-overlay .fw-noratio img {
	display: block;
}
.fw-block-image-parent.fw-block-image-center {
	margin: 0 auto;
}

/* Image Block Caption */
.fw-block-image-parent .fw-block-image-caption {
	background-color: <?php echo esc_js( start_hex2rgba($start_less_variables['theme-color-1'], 0.9) ); ?>;
	position: absolute;
	bottom: 10%;
	left: -45px;
	z-index: 2;
	font-size: <?php echo esc_js($start_less_variables['font-size-base']); ?>;
	line-height: 1.2em;
	padding: 3%;
	width: 400px;
	max-width: 100%;
	color: #fff;
	font-style: italic;
}

/* Video Frame */
.fw-video {
	max-width: 100%;
}

/* Responsive */
/* Screen 1024px */
@media (max-width: 1199px) {
	.fw-block-image-parent .fw-block-image-caption {
		left: -39px;
	}
}

/* Screen 768px */
@media (max-width: 991px) {
	.fw-block-image-parent .fw-block-image-caption {
		left: -19px;
	}
}

/* Screen 568px */
@media (max-width: 767px) {
	.fw-block-image-parent .fw-block-image-caption {
		left: -14px;
	}
}

