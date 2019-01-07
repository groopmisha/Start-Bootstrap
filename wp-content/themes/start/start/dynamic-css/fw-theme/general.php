/* General Styles */
/* -------------------------------------------------- */

html {
	overflow-x: hidden;
}

/* background image for body */
body {
	background-color: <?php echo esc_js($start_less_variables['body-bg']); ?>;
	background-image: <?php echo wp_kses($start_less_variables['body-bg-image'], array() ); ?>;
	background-repeat: <?php echo esc_js($start_less_variables['body-bg-repeat']); ?>;
	position: relative;
	overflow-x: hidden;
}

/* wrapper for boxed style */
.site {}
.single .fw-page-builder-content .fw-main-row .fw-container,
.single .fw-page-builder-content .fw-main-row-custom .fw-container,
.single .fw-page-builder-content .fw-main-row .fw-container-fluid,
.single .fw-page-builder-content .fw-main-row-custom .fw-container-fluid {
	padding-right: 0;
	padding-left: 0;
	max-width: 100%;
}

/* Section Default Page Background Option */
.fw-section-default-page{
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

/* wrapper for all sections */
.site-main {
	background-color: <?php echo esc_js($start_less_variables['container-bg']); ?>;
	position: relative;
	z-index: 0;
}
.site-main .fw-main-row > .fw-container {
	background-color: <?php echo esc_js($start_less_variables['container-bg']); ?>;
}
.fw-full .site {
	max-width: 1561px;
	margin-top: <?php echo esc_js($start_less_variables['fw-site-margin-top']); ?>;
	margin-bottom: <?php echo esc_js($start_less_variables['fw-site-margin-bottom']); ?>;
	position: relative;
}
.site{
	max-width: 1561px;
}
section{
	position: relative;
}

/* Web site align */
.fw-website-align-center .site {
	margin-left: auto;
	margin-right: auto;
}

/* No Header Image */
.no-header-image {
	margin: 0 auto;
	max-width: 1540px;
	background: <?php echo esc_js($start_less_variables['container-bg']); ?>;
}

/* text selection */
::-moz-selection {
	color: #fff;
	text-shadow: none;
	background: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}
::selection {
	color: #fff;
	text-shadow: none;
	background: <?php echo esc_js($start_less_variables['theme-color-1']); ?>;
}

/* Image Ratio Container */
.fw-ratio-container {
	position: relative;
	display: block;
}
.fw-ratio-container:after {
	content: '';
	display: block;
	height: 0;
	width: 100%;
}
.fw-ratio-container.fw-ratio-1:after {
	padding-bottom: 100%;
}
.fw-ratio-container.fw-ratio-2-1:after {
	padding-bottom: 50%;
}
.fw-ratio-container.fw-ratio-1-2:after {
	padding-bottom: 200%;
}
.fw-ratio-container.fw-ratio-4-3:after {
	padding-bottom: 75%;
}
.fw-ratio-container.fw-ratio-3-4:after {
	padding-bottom: 133%;
}
.fw-ratio-container.fw-ratio-16-9:after {
	padding-bottom: 56.25%;
}
.fw-ratio-container.fw-ratio-9-16:after {
	padding-bottom: 177.77%;
}
.fw-ratio-container.fw-ratio-3-2:after {
	padding-bottom: 66.66%;
}
.fw-ratio-container.fw-ratio-2-3:after {
	padding-bottom: 150%;
}
.fw-ratio-container.fw-ratio-5-3:after {
	padding-bottom: 60%;
}
.fw-ratio-container.fw-ratio-3-5:after {
	padding-bottom: 166.66%;
}
.fw-ratio-container.fw-ratio-16-10:after {
	padding-bottom: 62.5%;
}
.fw-ratio-container.fw-ratio-10-16:after {
	padding-bottom: 160%;
}
.fw-ratio-container video,
.fw-ratio-container iframe,
.fw-ratio-container a {
	max-width: 100%;
	max-height: 100%;
	width: auto;
	height: auto;
}
.fw-ratio-container > *{
	position: absolute !important;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/* LazyLoading */
.lazyload,
.lazyloading {
	position: absolute;
	background-position: center center;
	background-size: 16px;
	background-repeat: no-repeat;
	background-image: url(data:image/gif;base64,R0lGODlhEAAQAPYAAP///wAAANTU1JSUlGBgYEBAQERERG5ubqKiotzc3KSkpCQkJCgoKDAwMDY2Nj4+Pmpqarq6uhwcHHJycuzs7O7u7sLCwoqKilBQUF5eXr6+vtDQ0Do6OhYWFoyMjKqqqlxcXHx8fOLi4oaGhg4ODmhoaJycnGZmZra2tkZGRgoKCrCwsJaWlhgYGAYGBujo6PT09Hh4eISEhPb29oKCgqioqPr6+vz8/MDAwMrKyvj4+NbW1q6urvDw8NLS0uTk5N7e3s7OzsbGxry8vODg4NjY2PLy8tra2np6erS0tLKyskxMTFJSUlpaWmJiYkJCQjw8PMTExHZ2djIyMurq6ioqKo6OjlhYWCwsLB4eHqCgoE5OThISEoiIiGRkZDQ0NMjIyMzMzObm5ri4uH5+fpKSkp6enlZWVpCQkEpKSkhISCIiIqamphAQEAwMDKysrAQEBJqamiYmJhQUFDg4OHR0dC4uLggICHBwcCAgIFRUVGxsbICAgAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAAHjYAAgoOEhYUbIykthoUIHCQqLoI2OjeFCgsdJSsvgjcwPTaDAgYSHoY2FBSWAAMLE4wAPT89ggQMEbEzQD+CBQ0UsQA7RYIGDhWxN0E+ggcPFrEUQjuCCAYXsT5DRIIJEBgfhjsrFkaDERkgJhswMwk4CDzdhBohJwcxNB4sPAmMIlCwkOGhRo5gwhIGAgAh+QQJCgAAACwAAAAAEAAQAAAHjIAAgoOEhYU7A1dYDFtdG4YAPBhVC1ktXCRfJoVKT1NIERRUSl4qXIRHBFCbhTKFCgYjkII3g0hLUbMAOjaCBEw9ukZGgidNxLMUFYIXTkGzOmLLAEkQCLNUQMEAPxdSGoYvAkS9gjkyNEkJOjovRWAb04NBJlYsWh9KQ2FUkFQ5SWqsEJIAhq6DAAIBACH5BAkKAAAALAAAAAAQABAAAAeJgACCg4SFhQkKE2kGXiwChgBDB0sGDw4NDGpshTheZ2hRFRVDUmsMCIMiZE48hmgtUBuCYxBmkAAQbV2CLBM+t0puaoIySDC3VC4tgh40M7eFNRdH0IRgZUO3NjqDFB9mv4U6Pc+DRzUfQVQ3NzAULxU2hUBDKENCQTtAL9yGRgkbcvggEq9atUAAIfkECQoAAAAsAAAAABAAEAAAB4+AAIKDhIWFPygeEE4hbEeGADkXBycZZ1tqTkqFQSNIbBtGPUJdD088g1QmMjiGZl9MO4I5ViiQAEgMA4JKLAm3EWtXgmxmOrcUElWCb2zHkFQdcoIWPGK3Sm1LgkcoPrdOKiOCRmA4IpBwDUGDL2A5IjCCN/QAcYUURQIJIlQ9MzZu6aAgRgwFGAFvKRwUCAAh+QQJCgAAACwAAAAAEAAQAAAHjIAAgoOEhYUUYW9lHiYRP4YACStxZRc0SBMyFoVEPAoWQDMzAgolEBqDRjg8O4ZKIBNAgkBjG5AAZVtsgj44VLdCanWCYUI3txUPS7xBx5AVDgazAjC3Q3ZeghUJv5B1cgOCNmI/1YUeWSkCgzNUFDODKydzCwqFNkYwOoIubnQIt244MzDC1q2DggIBACH5BAkKAAAALAAAAAAQABAAAAeJgACCg4SFhTBAOSgrEUEUhgBUQThjSh8IcQo+hRUbYEdUNjoiGlZWQYM2QD4vhkI0ZWKCPQmtkG9SEYJURDOQAD4HaLuyv0ZeB4IVj8ZNJ4IwRje/QkxkgjYz05BdamyDN9uFJg9OR4YEK1RUYzFTT0qGdnduXC1Zchg8kEEjaQsMzpTZ8avgoEAAIfkECQoAAAAsAAAAABAAEAAAB4iAAIKDhIWFNz0/Oz47IjCGADpURAkCQUI4USKFNhUvFTMANxU7KElAhDA9OoZHH0oVgjczrJBRZkGyNpCCRCw8vIUzHmXBhDM0HoIGLsCQAjEmgjIqXrxaBxGCGw5cF4Y8TnybglprLXhjFBUWVnpeOIUIT3lydg4PantDz2UZDwYOIEhgzFggACH5BAkKAAAALAAAAAAQABAAAAeLgACCg4SFhjc6RhUVRjaGgzYzRhRiREQ9hSaGOhRFOxSDQQ0uj1RBPjOCIypOjwAJFkSCSyQrrhRDOYILXFSuNkpjggwtvo86H7YAZ1korkRaEYJlC3WuESxBggJLWHGGFhcIxgBvUHQyUT1GQWwhFxuFKyBPakxNXgceYY9HCDEZTlxA8cOVwUGBAAA7AAAAAAAAAAAA);
}

/* Animation Element */
.fw-animated-element {
	visibility: hidden !important;
}
.fw-animated-element.animated {
	visibility: visible !important;
}

