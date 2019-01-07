/* copyright and social area */
.fw-footer-bar {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	position: relative;
	padding-top: <?php echo esc_js($start_less_variables['fw-footer-bar-padding-top']); ?>;
	padding-bottom: <?php echo esc_js($start_less_variables['fw-footer-bar-padding-bot']); ?>;
	background-color: transparent;
	background-size: cover;
	background-repeat: no-repeat;
}

<?php if( floatval($start_less_variables['fw-footer-social-size']) >= 38 ) : ?>
	.fw-copyright {
		top: <?php echo floatval($start_less_variables['fw-footer-social-size'])/2 - 38/2; ?>px;
	}
<?php endif; ?>

<?php if( floatval($start_less_variables['fw-footer-social-size']) < 38 ) : ?>
	.fw-footer-social {
		top: <?php echo (38/2 - floatval($start_less_variables['fw-footer-social-size'])/2); ?>px;
	}
<?php endif; ?>

/* Footer copyright */
.fw-copyright {
	font-size: 15px;
	font-style: normal;
	font-weight: normal;
	font-family: <?php echo wp_kses($start_less_variables['font-family-2'], array()); ?>;
	line-height: 38px;
	letter-spacing: normal;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	position: relative;
}
.fw-copyright a {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	text-decoration: underline;
}
.fw-copyright a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	text-decoration: none;
}
.fw-copyright-left .fw-copyright {
	float: left;
}
.fw-copyright-left .fw-footer-social {
	float: right;
}
.fw-copyright-right .fw-copyright {
	float: right;
}
.fw-copyright-right .fw-footer-social {
	float: left;
}
.fw-copyright-center {
    text-align: center;
}
.fw-copyright-center .fw-copyright,
.fw-copyright-center .fw-footer-social{
	top: inherit;
}
.fw-footer-social {
	line-height: <?php echo floatval($start_less_variables['fw-footer-social-size']) *0.8 ?>px;
	position: relative;
}
.fw-footer-social a {
	font-size: <?php echo esc_js($start_less_variables['fw-footer-social-size']); ?>;
	width: <?php echo esc_js($start_less_variables['fw-footer-social-size']); ?>;
	height: <?php echo floatval($start_less_variables['fw-footer-social-size']) -1 ?>px;
	color: <?php echo esc_js($start_less_variables['theme-color-3']); ?>;
	display: inline-block;
	margin: 0 2px;
}
.fw-footer-social a:hover {
	color: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}

