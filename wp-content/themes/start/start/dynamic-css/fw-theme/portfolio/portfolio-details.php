/* Project Details */
.single-fw-portfolio .fw-divider-line.fw-line-solid {
	border-bottom: 1px solid rgba(102, 102, 102, 0.3);
}
.fw-project-details .fw-project-list {
	text-align: justify;
	padding: 0;
	margin: 0;
}
.fw-project-details .fw-project-list:after {
	content: '';
	width: 100%;
	height: 0;
	display: inline-block;
}
.fw-project-details .fw-project-list .fw-project-list-item {
	width: 32%;
	display: inline-block;
	overflow: hidden;
	position: relative;
	margin-bottom: 13px;
}
.fw-project-details .fw-project-list .fw-project-list-item .fw-block-image-parent .fw-block-image-child {
	position: relative;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
}
.fw-project-details .fw-project-list .fw-project-list-item .fw-block-image-parent .fw-block-image-child .fw-block-image-overlay {
	opacity: 0;
	position: absolute;
	background-color: rgba(0, 0, 0, 0.7);
	text-align: center;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	padding: 10px;
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.fw-project-details .fw-project-list .fw-project-list-item .fw-block-image-parent .fw-block-image-child .fw-block-image-overlay i[class*='fw-icon-'] {
	font-family: FontAwesome;
	width: 43px;
	height: 43px;
	font-size: 18px;
	line-height: 44px;
	text-align: center;
	color: #fff;
	display: inline-block;
	border-radius: 50%;
	background-color: <?php echo esc_js($start_less_variables['theme-color-2']); ?>;
	z-index: 11;
	transform: scale(0.5);
	-webkit-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.fw-project-details .fw-project-list .fw-project-list-item .fw-block-image-parent .fw-block-image-child:hover {
	cursor: pointer;
}
.fw-project-details .fw-project-list .fw-project-list-item .fw-block-image-parent .fw-block-image-child:hover .fw-block-image-overlay {
	opacity: 1;
}
.fw-project-details .fw-project-list .fw-project-list-item .fw-block-image-parent .fw-block-image-child:hover .fw-block-image-overlay i {
	transform: scale(1);
}

