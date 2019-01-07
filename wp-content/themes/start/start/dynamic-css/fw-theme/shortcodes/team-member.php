/* Team Member */
/* -------------------------------------------------- */
.fw-team {
	text-align: center;
}
.fw-team .fw-team-name {
	margin-bottom: 15px;
}
.fw-team .fw-team-name h3 {
	margin: 0 0 5px 0;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	font-style: italic;
}
.fw-team .fw-team-name h3 strong {
	font-style: normal;
}
.fw-team .fw-team-name > span {
	font-size: 13px;
	line-height: 13px;
	color: <?php echo esc_js($start_less_variables['theme-color-5']); ?>;
	display: block;
	font-family: <?php echo wp_kses($start_less_variables['font-family-1'], array()); ?>;
	text-transform: uppercase;
}
.fw-team .fw-team-image {
	margin-bottom: 1em;
	margin-left:auto;
	margin-right:auto;
}
.fw-team .fw-team-image .fw-image-link {
	display: inline-block;
	max-width: 100%;
}
.fw-team .fw-team-socials a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}

/* Responsive */
/* Screen 568px */
@media(max-width:767px){
	.fw-team .fw-team-name h3{
		font-size: 30px !important;
		line-height: normal !important;
	}
	.fw-team .fw-team-name span{
		font-size: 17px !important;
		line-height: normal !important;
	}
	.fw-team .fw-team-text{
		font-size: 16px !important;
		line-height: normal !important;
	}
}

