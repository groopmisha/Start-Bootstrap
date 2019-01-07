<?php
global $start_less_variables;
$upload_dir                        = wp_upload_dir();
$style_dir                         = $upload_dir['basedir'];
$start_dynamic_css_directory = get_template_directory() . '/dynamic-css/fw-theme';

$css = '';
// Utilities
$css .= start_render_view( $start_dynamic_css_directory . '/utilities.php', array( 'start_less_variables' => $start_less_variables ) );

// Grid
$css .= start_render_view( $start_dynamic_css_directory . '/grid.php', array( 'start_less_variables' => $start_less_variables ) );

// Forms Styles
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/forms.php', array( 'start_less_variables' => $start_less_variables ) );

// Header
$css .= start_render_view( $start_dynamic_css_directory . '/headers/header.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/headers/header-3.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/headers/header-logo.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/headers/header-search.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/headers/header-top-bar.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/headers/mobile-menu.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/headers/top-nav-menu.php', array( 'start_less_variables' => $start_less_variables ) );

// Layout
$css .= start_render_view( $start_dynamic_css_directory . '/general.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/content.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/typography.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/sidebar.php', array( 'start_less_variables' => $start_less_variables ) );

// Widgets
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widgets.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widgets-archive.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widgets-calendar.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widgets-categories.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-recent-comments.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-recent-entries.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-rss.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-search.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-tagcloud.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-text.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-posts-list.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/widgets/widget-select.php', array( 'start_less_variables' => $start_less_variables ) );

// Libraries
//-> Selectize
$css .= start_render_view( $start_dynamic_css_directory . '/lib/selectize/selectize.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/lib/selectize/selectize.theme.php', array( 'start_less_variables' => $start_less_variables ) );

//-> Check & Radio box
$css .= start_render_view( $start_dynamic_css_directory . '/lib/custom-checkbox-radio/custom-checkbox-radio.php', array( 'start_less_variables' => $start_less_variables ) );

//-> Pretty Photto
$css .= start_render_view( $start_dynamic_css_directory . '/lib/pretty-photo/pretty-photo.php', array( 'start_less_variables' => $start_less_variables ) );

// Posts
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-type-1.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-type-2.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-format.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-details.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-comments.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-comments-link.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/posts/posts-related-article.php', array( 'start_less_variables' => $start_less_variables ) );

// Pagination
$css .= start_render_view( $start_dynamic_css_directory . '/pagination.php', array( 'start_less_variables' => $start_less_variables ) );

// Image styling
$css .= start_render_view( $start_dynamic_css_directory . '/image-styling/image.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/image-styling/image-overlay.php', array( 'start_less_variables' => $start_less_variables ) );

// Portfolio
$css .= start_render_view( $start_dynamic_css_directory . '/portfolio/portfolio.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/portfolio/portfolio-details.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/portfolio/portfolio-type-1.php', array( 'start_less_variables' => $start_less_variables ) );

// Buttons
$css .= start_render_view( $start_dynamic_css_directory . '/buttons/buttons.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/buttons/buttons-size.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/buttons/buttons-style-1.php', array( 'start_less_variables' => $start_less_variables ) );

// Sliders
$css .= start_render_view( $start_dynamic_css_directory . '/sliders/sliders.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/sliders/easy-slider.php', array( 'start_less_variables' => $start_less_variables ) );

// Shortcodes
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/accordion.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/dividers.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/forms.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/icon-box.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/icon-title.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/image.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/map.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/pricing.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/quote.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/special-heading.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/table.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/tabs.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/team-member.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/shortcodes/testimonials.php', array( 'start_less_variables' => $start_less_variables ) );

// Latest Posts
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type1.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type2.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type3.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type4.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type5.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type6.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type7.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type8.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type9.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/latest-posts/latest-posts-type10.php', array( 'start_less_variables' => $start_less_variables ) );

// Breadcrumbs
$css .= start_render_view( $start_dynamic_css_directory . '/breadcrumbs.php', array( 'start_less_variables' => $start_less_variables ) );

// Footer
$css .= start_render_view( $start_dynamic_css_directory . '/footer/footer.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/footer/footer-widget.php', array( 'start_less_variables' => $start_less_variables ) );
$css .= start_render_view( $start_dynamic_css_directory . '/footer/footer-copyright.php', array( 'start_less_variables' => $start_less_variables ) );

if ( method_exists( 'FW_WP_Filesystem', 'put' ) ) {
	FW_WP_Filesystem::put( $style_dir . '/' . start_style_file_name() . '.css', $css );
}

