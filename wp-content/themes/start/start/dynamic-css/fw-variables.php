<?php
global $start_less_variables;
// initial default values
$start_less_variables['theme-color-1'] = '#d2a74d'; // main color, subtitles
$start_less_variables['theme-color-2'] = '#0f1f25'; // secondary color
$start_less_variables['theme-color-3'] = '#868686';
$start_less_variables['theme-color-4'] = '#edf1f2';
$start_less_variables['theme-color-5'] = '#4c4c4c';

// Placeholder
$start_less_variables['placeholder-color'] = '#c2c2c2';

//** Background color for `<body>`.
$start_less_variables['body-bg']        = '#161616';
$start_less_variables['container-bg']   = '#fff'; // bg color when site style is Boxed
$start_less_variables['body-bg-image']  = 'url(data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==)';
$start_less_variables['body-bg-repeat'] = 'no-repeat';

//** Global text color on `<body>`.
$start_less_variables['text-color'] = $start_less_variables['theme-color-3'];

// Letter Spacing Base
$start_less_variables['font-letter-spacing-base'] = '0';
//Letter Spacing Titles
$start_less_variables['letter-titles-spacing'] = $start_less_variables['font-letter-spacing-base'];

//== Typography
//## Font, line-height, and color for body text, headings, and more.
$start_less_variables['font-family-1'] = '"Montserrat", sans-serif';
$start_less_variables['font-family-2'] = '"Crimson Text", serif';
$start_less_variables['font-family-3'] = '"Comic Sans MS", cursive';
$start_less_variables['font-family-4'] = '"Crimson Text"';
$start_less_variables['font-family-5'] = '"Montserrat"';

//** Font Family Text
$start_less_variables['font-family-base'] = $start_less_variables['font-family-2'];
$start_less_variables['font-weight-base'] = 'normal';
$start_less_variables['font-style-base']  = 'normal';

//** Font Family Title
$start_less_variables['font-titles-family'] = $start_less_variables['font-family-2'];
$start_less_variables['font-titles-weight'] = 'normal';
$start_less_variables['font-titles-style']  = 'normal';

// Font size base
$start_less_variables['font-size-base'] = '19px';

// font size base
$start_less_variables['font-size-large'] = ceil( (int) $start_less_variables['font-size-base'] * 1.15 ) . 'px';
$start_less_variables['font-size-small'] = ceil( (int) $start_less_variables['font-size-base'] * 0.85 ) . 'px';

//** Unit-less `line-height` for use in components like buttons.
$start_less_variables['line-height-small'] = '1.4em';
$start_less_variables['line-height-base']  = '1.5em';
$start_less_variables['line-height-large'] = '1.7em';

// Title line height
$start_less_variables['line-titles-height'] = $start_less_variables['line-height-base'];

//** Size theme (site full, site boxed, boxed)
$start_less_variables['fw-page-full'] = '100%';

//** Margin top & bottom for page
$start_less_variables['fw-site-margin-top']    = '0';
$start_less_variables['fw-site-margin-bottom'] = '0';

//== Components
//
//## Define common padding sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).
$start_less_variables['padding-base-vertical']   = '12px';
$start_less_variables['padding-base-horizontal'] = '25px';

$start_less_variables['padding-large-vertical']   = '17px';
$start_less_variables['padding-large-horizontal'] = '45px';

$start_less_variables['padding-small-vertical']   = '6px';
$start_less_variables['padding-small-horizontal'] = '15px';

//== Forms
//
// ** horizontal and vertical padding
$start_less_variables['input-padding-x'] = '15px';
$start_less_variables['input-padding-y'] = '12px';
$start_less_variables['input-font-size'] = '15px';

//== Grid system
//
//## Define your custom responsive grid.

//** Number of columns in the grid.
$start_less_variables['grid-columns'] = '12';

//** Padding between columns. Gets divided in half for the left and right.
$start_less_variables['grid-gutter-width'] = '30px';

//== Header Layout
$start_less_variables['fw-logo-wrap-height'] = '160px';

// Top menu
$start_less_variables['fw-menu-logo-width']  = '400';
$start_less_variables['fw-menu-logo-height'] = ( floatval( $start_less_variables['fw-menu-logo-width'] ) / 2 ) . 'px';

// Section Height
$start_less_variables['fw-section-height-md'] = '300px';

// Latest posts
$start_less_variables['latests-posts-separator-opacity'] = '20';

//== Footer Layout
// Widget area styles
$start_less_variables['fw-footer-widgets-bg']         = '#2a2e31'; // section's bg color
$start_less_variables['fw-footer-widget-bg-image']    = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='; // section's bg image
$start_less_variables['fw-footer-widget-bg-repeat']   = 'no-repeat'; // section's bg repeat
$start_less_variables['fw-footer-widget-bg-position'] = 'top right'; // section's bg position
$start_less_variables['fw-footer-widget-bg-size']     = 'auto'; // section's bg size

$start_less_variables['fw-footer-widgets-padding-top'] = '100px';
$start_less_variables['fw-footer-widgets-padding-bot'] = '100px';

// copyright with socials
$start_less_variables['fw-footer-bar-padding-top'] = '20px';
$start_less_variables['fw-footer-bar-padding-bot'] = $start_less_variables['fw-footer-bar-padding-top'];

$start_less_variables['fw-footer-social-size']       = '16px'; // footer social icons size
$start_less_variables['fw-top-bar-font-size-social'] = '16px';

//== Sections padding
// padding top & bottom in all sections
$start_less_variables['fw-section-padding'] = '100px';

$start_less_variables['fw-section-padding-sm'] = (int) $start_less_variables['fw-section-padding'] * 0.6 . 'px';
$start_less_variables['fw-section-padding-md'] = $start_less_variables['fw-section-padding']; // from default value
$start_less_variables['fw-section-padding-lg'] = (int) $start_less_variables['fw-section-padding'] * 1.4 . 'px';

// spacing between elements: sections, shortcodes and others.
$start_less_variables['fw-content-density'] = '10';

//== Core Shortcodes
//
// Dividers
$start_less_variables['fw-divider-space-sm'] = '30px'; // height of small divider
$start_less_variables['fw-divider-space-md'] = '60px'; // height of medium divider
$start_less_variables['fw-divider-space-lg'] = '100px'; // height of large divider


// rewrite the global variable : $start_less_variables (for rewrite the value that are changed from dashboard)
start_render_view( get_template_directory() . '/dynamic-css/fw-admin-styling.php', array(), false );
// after fw-admin-styling will be all variables that are dependent of dashboard options

// titles color
$start_less_variables['fw-titles-color'] = $start_less_variables['theme-color-5'];

// here come variables that are inherit for example $start_less_variables['font-family-2'] = $start_less_variables['font-family-base'];


