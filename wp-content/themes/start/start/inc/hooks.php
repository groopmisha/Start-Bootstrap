<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

if ( ! function_exists( 'start_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function start_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on start, use a find and replace
		 * to change 'start' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'start', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

	

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'start_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'start_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function start_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'start_content_width', 640 );
}
add_action( 'after_setup_theme', 'start_content_width', 0 );



/**
 * Filters and Actions
 */

if ( ! function_exists( 'start_customize_register' ) ) :
	function start_customize_register( $wp_customize ) {
		/**
		 * Theme options.
		 */
		$wp_customize->add_section( 'theme_options', array(
			'title'    => __( 'Front Page Options', 'start' ),
			'priority' => 130, // Before Additional CSS.
		) );

		/**
		 * Filter number of front page sections in start.
		 *
		 * @since start 1.0.8
		 *
		 * @param $num_sections integer
		 */
		$num_sections = apply_filters( 'start_front_page_sections', 5 );

		// Create a setting and control for each of the sections available in the theme.
		for ( $i = 1; $i < ( 1 + $num_sections ); $i ++ ) {
			$wp_customize->add_setting( 'panel_' . $i, array(
				'default'           => 0,
				'sanitize_callback' => 'absint',
				'transport'         => 'postMessage',
			) );

			$wp_customize->add_control( 'panel_' . $i, array(
				/* translators: %d is the front page section number */
				'label'           => sprintf( __( 'Front Page Section %d Content', 'start' ), $i ),
				'description'     => ( 1 !== $i ? '' : __( 'Select categories to feature in each area from the dropdowns. Empty sections will not be displayed.', 'start' ) ),
				'section'         => 'theme_options',
				'type'            => 'select',
				'choices'         => start_get_posts_categories(),
				'active_callback' => 'start_is_static_front_page',
			) );

			// panel for section type
			$wp_customize->add_setting( 'section_type_' . $i, array(
				'default'           => 'type-1',
				'sanitize_callback' => 'start_sanitize_section_types',
			) );

			$wp_customize->add_control( 'section_type_' . $i, array(
				/* translators: %s: section type */
				'label'           => sprintf( esc_html__( 'Section %d Type', 'start' ), $i ),
				'section'         => 'theme_options',
				'type'            => 'select',
				'choices'         => start_get_front_section_types(),
				'active_callback' => 'start_is_static_front_page',
			) );

			$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
				'selector'            => '#panel' . $i,
				'render_callback'     => 'start_front_page_section',
				'container_inclusive' => true,
			) );
		}
	}
endif;
add_action( 'customize_register', 'start_customize_register' );


if ( ! function_exists( 'start_action_theme_setup' ) ) :
	/**
	 * Theme setup.
	 *
	 * Set up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support post thumbnails.
	 * @internal
	 */
	function start_action_theme_setup() {

		// Make Theme available for translation.
		load_theme_textdomain( 'start', get_template_directory() . '/languages' );

		// title tag
		add_theme_support( 'title-tag' );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails', array( 'post', 'fw-portfolio', 'product' ) );

		add_image_size( 'the-start-blog-full', 1228, 691, true ); // 16:9
		add_image_size( 'the-start-blog-sidebar', 614, 346, true ); // 16:9
		add_image_size( 'the-start-portfolio-landscape', 295, 166, true ); // 16:9
		add_image_size( 'the-start-portfolio-landscape-x2', 590, 332, true ); // 16:9

		add_image_size( 'the-start-three-quarters', 393, 295, true ); // 3:4
		add_image_size( 'the-start-three-quarters-x2', 786, 590, true ); // 3:4

		add_image_size( 'the-start-category-square-800', 800, 800, true ); // 1:1
		add_image_size( 'the-start-category-square-300', 300, 300, true ); // 1:1

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'audio',
			'quote',
			'link',
			'gallery',
		) );

		// Add support for featured content.
		add_theme_support( 'featured-content', array(
			'featured_content_filter' => 'start_get_featured_posts',
			'max_posts'               => 6,
		) );


		/**
		 * Themes and Plugins can check for 'start_hooks' using current_theme_supports( 'start_hooks', $hook )
		 * to determine whether a theme declares itself to support this specific hook type.
		 *
		 * Example:
		 * <code>
		 *        // Declare support for all hook types
		 *        add_theme_support( 'start_hooks', array( 'all' ) );
		 *
		 *        // Declare support for certain hook types only
		 *        add_theme_support( 'start_hooks', array( 'header', 'content', 'footer' ) );
		 * </code>
		 */
		add_theme_support( 'start_hooks', array(
			/**
			 * As a Theme developer, use the 'all' parameter, to declare support for all
			 * hook types.
			 * Please make sure you then actually reference all the hooks in this file,
			 * Plugin developers depend on it!
			 */
			'all',
			/**
			 * Themes can also choose to only support certain hook types.
			 * Please make sure you then actually reference all the hooks in this type
			 * family.
			 *
			 * When the 'all' parameter was set, specific hook types do not need to be
			 * added explicitly.
			 */
			'html',
			'body',
			'head',
			'header',
			'content',
			'entry',
			'comments',
			'sidebars',
			'sidebar',
			'footer',
			/**
			 * If/when WordPress Core implements similar methodology, Themes and Plugins
			 * will be able to check whether the version of start_hooks supplied by the theme
			 * supports Core hooks.
			 */
			//'core',
		) );


		// This theme uses its own gallery styles.
		add_filter( 'use_default_gallery_style', '__return_false' );
	}
endif;
add_action( 'after_setup_theme', 'start_action_theme_setup' );


if ( ! function_exists( 'start_action_theme_content_width' ) ) :
	/**
	 * Adjust content_width value for image attachment template.
	 * @internal
	 */
	function start_action_theme_content_width() {
		if ( is_attachment() && wp_attachment_is_image() ) {
			$GLOBALS['content_width'] = 810;
		}
	}
endif;
add_action( 'template_redirect', 'start_action_theme_content_width' );


if ( ! function_exists( 'start_filter_theme_wp_title' ) ) :
	/**
	 * Create a nicely formatted and more specific title element text for output
	 * in head of document, based on current view.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 *
	 * @return string The filtered title.
	 * @internal
	 */
	function start_filter_theme_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() ) {
			return $title;
		}

		// Add the site name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 ) {
			/* translators: %s: page number */
			$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'start' ), max( $paged, $page ) );
		}

		return $title;
	}
endif;
add_filter( 'wp_title', 'start_filter_theme_wp_title', 10, 2 );

/**
 * Generate dynamic styles
 */
function start_action_theme_generate_dynamic_styles() {
	start_render_view( get_template_directory() . '/dynamic-css/fw-variables.php', array(), false );
	start_render_view( get_template_directory() . '/dynamic-css/fw-theme.php', array(), false );
}
add_action( 'wp_enqueue_scripts', 'start_action_theme_generate_dynamic_styles', 999 );


if ( ! function_exists( 'start_action_theme_set_global_colors' ) ) :
	/**
	 * Set global colors
	 */
	function start_action_theme_set_global_colors() {
		global $start_color_settings;
		$colors                     = array(
			'color_1' => '#d2a74d',
			'color_2' => '#0f1f25',
			'color_3' => '#898d8e',
			'color_4' => '#edf1f2',
			'color_5' => '#141e24'
		);
		$start_color_settings = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'color_settings', $colors ) : $colors;

		// Set translatepress id
		if ( class_exists('TRP_Translate_Press') ) {
			update_option( 'translatepress_affiliate_id', 1 );
		}
	}
endif;
add_action( 'init', 'start_action_theme_set_global_colors' );


/**
 * Add excerpt support to portfolio
 */
add_post_type_support( 'fw-portfolio', 'excerpt' );
/**
 * Add comments support to portfolio
 */
add_post_type_support( 'fw-portfolio', 'comments' );


if ( ! function_exists( 'start_user_has_gravatar' ) ) :
	/**
	 * Return true if user has gravatar
	 *
	 * @param string $email_address - your email address
	 */
	function start_user_has_gravatar( $email_address ) {
		// Build the Gravatar URL by hasing the email address
		$url = 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $email_address ) ) ) . '?d=404';
		// Now check the headers
		$headers = get_headers( $url );

		// If 200 is found, the user has a Gravatar; otherwise, they don't.
		return preg_match( '|200|', $headers[0] ) ? true : false;
	}
endif;


if ( ! function_exists( 'start_is_real_post_save' ) ) :
	/**
	 * Return true if is real save
	 *
	 * @param integer $post_id - current saved post
	 *
	 * @return boolean
	 */
	function start_is_real_post_save( $post_id ) {
		return ! (
			wp_is_post_revision( $post_id )
			|| wp_is_post_autosave( $post_id )
			|| ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			|| ( defined( 'DOING_AJAX' ) && DOING_AJAX )
		);
	}
endif;


if ( ! function_exists( 'start_action_save_fw_portfolio_post' ) ) :
	/**
	 * Set post terms to portfolio on save
	 */
	function start_action_save_fw_portfolio_post() {
		$post_id = sanitize_text_field( wp_unslash( $_POST['post_ID'] ) );
		if ( ! start_is_real_post_save( $post_id ) ) {
			return;
			die();
		}
		$taxonomy = 'fw-portfolio-category';
		$terms    = wp_get_post_terms( $post_id, $taxonomy );

		$parrents_ids = array();
		foreach ( $terms as $term ) {
			if ( $term->parent != 0 ) {
				if ( ! in_array( $term->parent, $parrents_ids ) ) {
					$parrents_ids[] = $term->parent;
				}
			}
		}

		foreach ( $parrents_ids as $term_id ) {
			wp_set_post_terms( $post_id, $term_id, $taxonomy, true );
		}
	}
endif;
add_action( 'save_post_fw-portfolio', 'start_action_save_fw_portfolio_post' );


if ( ! function_exists( 'start_easy_slider_population_method_custom_options' ) ) :
	/**
	 * Filter for disable standard slider fields for easy slider
	 *
	 * @param array $arr - array of slider options
	 */
	function start_easy_slider_population_method_custom_options( $arr ) {
		unset(
			$arr['wrapper-population-method-custom']['options']['custom-slides']['slides_options']['desc']
		);

		return $arr;
	}

	add_filter( 'fw_ext_easy_slider_population_method_custom_options', 'start_easy_slider_population_method_custom_options' );
endif;


if ( ! function_exists( 'start_filter_theme_body_class' ) ) :
	/**
	 * Filter for add space/top-bar class
	 *
	 * @param array $classes - array of theme classes to add
	 * @param array $classes - array of theme classes to add after customizer settings
	 */
	function start_filter_theme_body_class( $classes ) {
		if ( function_exists( 'fw_get_db_customizer_option' ) ) {
			//get customizer general settings
			$general_settings = defined( 'FW' ) ? fw_get_db_customizer_option() : array();

			//array of available classes
			$classes[] = 'header-3';

			//check if is enabled topbar
			if ( isset( $general_settings['header_settings']['enable_header_top_bar']['selected_value'] ) ) {
				if ( $general_settings['header_settings']['enable_header_top_bar']['selected_value'] == 'yes' ) {
					$classes[] = 'fw-top-bar-on';
				} else {
					$classes[] = 'fw-top-bar-off';
				}
			}

			//add specific class for selected social position
			if ( isset( $general_settings['header_settings']['enable_header_top_bar']['yes']['enable_header_socials']['yes']['header_social_position'] ) ) {
				$classes[] = $general_settings['header_settings']['enable_header_top_bar']['yes']['enable_header_socials']['yes']['header_social_position'];
			}

			//check if sticky header is enabled
			if ( isset( $general_settings['header_settings']['enable_sticky_header'] ) ) {
				$classes[] = $general_settings['header_settings']['enable_sticky_header'];
			}

			//add search position
			$enable_search   = isset( $general_settings['header_settings']['enable_search']['selected_value'] ) ? $general_settings['header_settings']['enable_search']['selected_value'] : '';
			$search_position = isset( $general_settings['header_settings']['enable_search']['yes']['search_position'] ) ? $general_settings['header_settings']['enable_search']['yes']['search_position'] : '';
			$search_type     = isset( $general_settings['header_settings']['enable_search']['yes']['search_type']['selected'] ) ? $general_settings['header_settings']['enable_search']['yes']['search_type']['selected'] : '';

			if ( $enable_search == 'yes' && $search_position == 'top_bar' ) {
				$classes[] = 'search-in-top-bar';
			} elseif ( $enable_search == 'yes' && $search_position == 'menu_bar' ) {
				$classes[] = 'search-in-menu';
			}

			if ( $enable_search == 'yes' && $search_type == 'fw-input-search' ) {
				$classes[] = 'fw-search-full';
			}

			// retina logo
			if ( isset( $general_settings['logo_settings']['logo']['selected_value'] ) && $general_settings['logo_settings']['logo']['selected_value'] == 'image' ) {
				$classes[] = 'fw-logo-image';
				if ( isset( $general_settings['logo_settings']['logo']['image']['retina_logo'] ) ) {
					$classes[] = $general_settings['logo_settings']['logo']['image']['retina_logo'];
				} else {
					$classes[] = 'fw-logo-no-retina';
				}
			} elseif ( isset( $general_settings['logo_settings']['logo']['selected_value'] ) && $general_settings['logo_settings']['logo']['selected_value'] == 'text' ) {
				$classes[] = 'fw-logo-text';
				if ( empty( $general_settings['logo_settings']['logo']['text']['subtitle'] ) ) {
					$classes[] = 'fw-no-subtitle';
				}
			}

			//default section spaces
			$classes[] = 'fw-section-space-md';
			$classes[] = 'fw-top-logo-left';
			$classes[] = 'fw-website-align-center';

		} //default theme classes to add
		else {
			$classes[] = '';
			$classes[] = 'header-3';
			$classes[] = 'fw-logo-retina';
			$classes[] = 'fw-section-space-md';
			$classes[] = 'fw-website-align-center';
		}

		return $classes;
	}

	add_filter( 'body_class', 'start_filter_theme_body_class' );
endif;


if ( ! function_exists( 'start_filter_active_slider' ) ) :
	/**
	 * Filter for disable default framework sliders
	 *
	 * @param array $sliders - array of available sliders
	 */
	function start_filter_active_slider( $sliders ) {
		$sliders = array_diff( $sliders, array( 'bx-slider', 'nivo-slider', 'owl-carousel' ) );

		return $sliders;
	}

	add_filter( 'fw_ext_slider_activated', 'start_filter_active_slider' );
endif;


if ( ! function_exists( 'start_filter_theme_special_heading_separator' ) ) :
	/**
	 * Filter for add special html code for special heading separator
	 *
	 * @param array $atts
	 */
	function start_filter_theme_special_heading_separator( $atts ) {
		echo '';
	}

	add_filter( 'filter_theme_special_heading_separator', 'start_filter_theme_special_heading_separator' );
endif;


// custom option-types
if ( ! function_exists( 'start_action_theme_includes_additional_option_types' ) ) :
	/**
	 * Include the color-palette and tf-typography options
	 */
	function start_action_theme_includes_additional_option_types() {
		require_once get_template_directory().'/inc/includes/option-types/color-palette/class-fw-color-palette-new.php';
		require_once get_template_directory().'/inc/includes/option-types/tf-typography/class-fw-option-type-tf-typography.php';
	}

	add_action( 'fw_option_types_init', 'start_action_theme_includes_additional_option_types' );
endif;


if ( ! function_exists( 'start_wp_audio_shortcode' ) ) :
	/**
	 * Wordpress audio shortcode wrap
	 */
	function start_wp_audio_shortcode( $html ) {
		return sprintf( '<div class="fw-wrap-boxed-media fw-wp-audio-shortcode">%s</div>', $html );
	}
endif;
add_action( 'wp_audio_shortcode', 'start_wp_audio_shortcode' );


if ( ! function_exists( 'start_wp_video_shortcode' ) ) :
	function start_wp_video_shortcode( $output ) {
		/**
		 * Wordpress embed shortcode wrap
		 */
		return sprintf( '<div class="fw-wrap-boxed-media fw-wp-video-shortcode">%s</div>', $output );
	}
endif;
add_action( 'wp_video_shortcode', 'start_wp_video_shortcode' );


if ( ! function_exists( 'start_wp_embed_shortcode' ) ) :
	function start_wp_embed_shortcode( $output ) {
		/**
		 * Wordpress embed shortcode wrap
		 */
		return sprintf( '<div class="fw-wrap-boxed-media fw-wp-embed-shortcode">%s</div>', $output );
	}
endif;
add_action( 'embed_oembed_html', 'start_wp_embed_shortcode' );

if ( ! function_exists( 'start_action_theme_print_google_fonts_link' ) ) :
	/**
	 * Print google fonts link
	 */
	function start_action_theme_print_google_fonts_link() {
		global $start_google_fonts_list;
		$start_google_fonts_list = array();

		$start_google_fonts_list = get_option( 'start_theme_google_fonts_list', array() );

		if ( ! empty( $start_google_fonts_list ) ) {
			wp_register_style( 'fw-googleFonts', start_get_remote_fonts( $start_google_fonts_list ) );
			wp_enqueue_style( 'fw-googleFonts' );
		}
	}
endif;
add_action( 'wp_print_styles', 'start_action_theme_print_google_fonts_link' );


/**
 * Determines, whether the specific hook type is actually supported.
 *
 * Plugin developers should always check for the support of a <strong>specific</strong>
 * hook type before hooking a callback function to a hook of this type.
 *
 * Example:
 * <code>
 *        if ( current_theme_supports( 'start_hooks', 'header' ) )
 *            add_action( 'start_header_top', WP_THEME_PREFIX . '_header_top' );
 * </code>
 *
 * @param bool $bool true
 * @param array $args The hook type being checked
 * @param array $registered All registered hook types
 *
 * @return bool
 */
function start_current_theme_supports( $bool, $args, $registered ) {
	return in_array( $args[0], $registered[0] ) || in_array( 'all', $registered[0] );
}

add_filter( 'current_theme_supports-start_hooks', 'start_current_theme_supports', 10, 3 );


/**
 * HTML <html> hook
 * Special case, useful for <DOCTYPE>, etc.
 * $start_supports[] = 'html;
 */
function start_html_before() {
	do_action( WP_THEME_PREFIX . '_html_before' );
}

/**
 * HTML <body> hooks
 * $start_supports[] = 'body';
 */
function start_body_top() {
	do_action( WP_THEME_PREFIX . '_body_top' );
}

function start_body_bottom() {
	do_action( WP_THEME_PREFIX . '_body_bottom' );
}

/**
 * HTML <head> hooks
 *
 * $start_supports[] = 'head';
 */
function start_head_top() {
	do_action( WP_THEME_PREFIX . '_head_top' );
}

function start_head_bottom() {
	do_action( WP_THEME_PREFIX . '_head_bottom' );
}

/**
 * Semantic <header> hooks
 *
 * $start_supports[] = 'header';
 */
function start_header_before() {
	do_action( WP_THEME_PREFIX . '_header_before' );
}

function start_header_after() {
	do_action( WP_THEME_PREFIX . '_header_after' );
}

function start_header_top() {
	do_action( WP_THEME_PREFIX . '_header_top' );
}

function start_header_bottom() {
	do_action( WP_THEME_PREFIX . '_header_bottom' );
}

/**
 * Semantic <content> hooks
 *
 * $start_supports[] = 'content';
 */
function start_content_before() {
	do_action( WP_THEME_PREFIX . '_content_before' );
}

function start_content_after() {
	do_action( WP_THEME_PREFIX . '_content_after' );
}

function start_content_top() {
	do_action( WP_THEME_PREFIX . '_content_top' );
}

function start_content_bottom() {
	do_action( WP_THEME_PREFIX . '_content_bottom' );
}

function start_content_while_before() {
	do_action( WP_THEME_PREFIX . '_content_while_before' );
}

function start_content_while_after() {
	do_action( WP_THEME_PREFIX . '_content_while_after' );
}

/**
 * Semantic <entry> hooks
 *
 * $start_supports[] = 'entry';
 */
function start_entry_before() {
	do_action( WP_THEME_PREFIX . '_entry_before' );
}

function start_entry_after() {
	do_action( WP_THEME_PREFIX . '_entry_after' );
}

function start_entry_content_before() {
	do_action( WP_THEME_PREFIX . '_entry_content_before' );
}

function start_entry_content_after() {
	do_action( WP_THEME_PREFIX . '_entry_content_after' );
}

function start_entry_top() {
	do_action( WP_THEME_PREFIX . '_entry_top' );
}

function start_entry_bottom() {
	do_action( WP_THEME_PREFIX . '_entry_bottom' );
}

/**
 * Comments block hooks
 *
 * $start_supports[] = 'comments';
 */
function start_comments_before() {
	do_action( WP_THEME_PREFIX . '_comments_before' );
}

function start_comments_after() {
	do_action( WP_THEME_PREFIX . '_comments_after' );
}

/**
 * Semantic <sidebar> hooks
 *
 * $start_supports[] = 'sidebar';
 */
function start_sidebars_before() {
	do_action( WP_THEME_PREFIX . '_sidebars_before' );
}

function start_sidebars_after() {
	do_action( WP_THEME_PREFIX . '_sidebars_after' );
}

function start_sidebar_top() {
	do_action( WP_THEME_PREFIX . '_sidebar_top' );
}

function start_sidebar_bottom() {
	do_action( WP_THEME_PREFIX . '_sidebar_bottom' );
}

/**
 * Semantic <footer> hooks
 *
 * $start_supports[] = 'footer';
 */
function start_footer_before() {
	do_action( WP_THEME_PREFIX . '_footer_before' );
}

function start_footer_after() {
	do_action( WP_THEME_PREFIX . '_footer_after' );
}

function start_footer_top() {
	do_action( WP_THEME_PREFIX . '_footer_top' );
}

function start_footer_bottom() {
	do_action( WP_THEME_PREFIX . '_footer_bottom' );
}

/**
 * @param FW_Ext_Backups_Demo[] $demos
 *
 * @return FW_Ext_Backups_Demo[]
 */
function start_filter_fw_ext_backups_demos( $demos ) {
	$demos_array = array(
		'start' => array(
			'title'        => __( 'The Start', 'start' ),
			'screenshot'   => 'http://updates.themefuse.com/start/screenshots/start.jpg',
			'preview_link' => 'https://demo.themefuse.com/start/',
		)
	);

	foreach ( $demos_array as $id => $data ) {
		$demo = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'     => 'http://updates.themefuse.com/start/',
			'file_id' => $id,
		) );
		$demo->set_title( $data['title'] );
		$demo->set_screenshot( $data['screenshot'] );
		$demo->set_preview_link( $data['preview_link'] );

		$demos[ $demo->get_id() ] = $demo;

		unset( $demo );
	}

	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', 'start_filter_fw_ext_backups_demos' );


if ( ! function_exists( 'start_action_tf_notice' ) ) :
	/**
	 * Display banner for theme recommendation after 14 days
	 */
	function start_action_tf_notice() {
		if ( get_option( 'the-start-dismissed-start_upgrade_notice', false ) ) {
			return;
		}

		$saved_data = get_option( 'start_tf_recommendation', false );
		$days_in_s  = 14 * DAY_IN_SECONDS;

		if ( false === $saved_data ) {
			/* if option is not set */
			update_option( 'start_tf_recommendation',
				array(
					'last_update' => time(),
				),
				false
			);

			return;
		} elseif ( isset( $saved_data['last_update'] ) && $saved_data['last_update'] + $days_in_s < time() ) {
			/* if option is set and the last_update + days_in_s < current_time */
			$screen = get_current_screen();
			if ( ! empty( $screen ) && $screen->base == 'dashboard' ) :
				$premium_themes = array(
					0 => array(
						0 => array(
							'url' => 'https://demo.themefuse.com/?theme=the-core&utm_source=dashboard&utm_medium=referral&utm_campaign=start',
							'img' => get_template_directory_uri().'/assets/img/unyson/banners/demo_1.jpg',
						),
						1 => array(
							'url' => 'https://demo.themefuse.com/?theme=gourmet&utm_source=dashboard&utm_medium=referral&utm_campaign=start',
							'img' => get_template_directory_uri().'/assets/img/unyson/banners/demo_2.jpg',
						),
						2 => array(
							'url' => 'https://demo.themefuse.com/?theme=keynote&utm_source=dashboard&utm_medium=referral&utm_campaign=start',
							'img' => get_template_directory_uri().'/assets/img/unyson/banners/demo_3.jpg',
						),
						3 => array(
							'url' => 'https://demo.themefuse.com/?theme=wellness&utm_source=dashboard&utm_medium=referral&utm_campaign=start',
							'img' => get_template_directory_uri().'/assets/img/unyson/banners/demo_4.jpg',
						),
						4 => array(
							'url' => 'https://demo.themefuse.com/?theme=cribs&utm_source=dashboard&utm_medium=referral&utm_campaign=start',
							'img' => get_template_directory_uri().'/assets/img/unyson/banners/demo_5.jpg',
						),
					),
				);
				?>
				<div class="welcome-panel notice fw-premium-products notice notice-error is-dismissible tf-custom-notice" data-notice="start_upgrade_notice">
					<div class="welcome-panel-content">
						<h2><?php esc_html_e( 'Looking for something more powerful?', 'start' ); ?></h2>

						<p class="about-description"><?php esc_html_e( 'Here are only a couple of pre made demos that come bundled with our massive multi-purpose WordPress theme The Core', 'start' ); ?></p>

						<div class="fw-list-premium-themes">
							<?php $random = 0; // $random = rand( 0, 3 );
							foreach ( $premium_themes[ $random ] as $key => $item ) : ?>
								<a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank"><img
											src="<?php echo esc_url( $item['img'] ); ?>"></a>
							<?php endforeach; ?>
						</div>
						<div class="welcome-panel-column-container">
							<div class="welcome-panel-column">
								<h3><?php esc_html_e( 'Get Started', 'start' ); ?></h3>
								<a target="_blank" class="button button-primary button-hero fw-button-cta-dashboard"
								   href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"><?php esc_html_e( 'View All Demos & Features', 'start' ); ?></a>

								<p class=""><?php esc_html_e( 'or', 'start' ); ?>, <a target="_blank"
																							href="http://account.themefuse.com/product/thecore"><?php esc_html_e( 'get them all for just $59', 'start' ); ?></a>
								</p>
							</div>
							<div class="welcome-panel-column">
								<h3><?php esc_html_e( 'Feature Highlights', 'start' ); ?></h3>
								<ul>
									<li><a target="_blank"
										   href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"
										   class="dashicons dashicons-admin-appearance"><?php esc_html_e( 'More than 20 themes in one', 'start' ); ?></a>
									</li>
									<li><a target="_blank"
										   href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"
										   class="dashicons dashicons-welcome-view-site"><?php esc_html_e( 'Visual Page Builder', 'start' ); ?></a>
									</li>
									<li><a target="_blank"
										   href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"
										   class="dashicons dashicons-cart"><?php esc_html_e( 'WooCommerce ready', 'start' ); ?></a>
									</li>
								</ul>
							</div>
							<div class="welcome-panel-column welcome-panel-last">
								<h3><?php esc_html_e( 'Support & Docs', 'start' ); ?></h3>
								<ul>
									<li>
										<div class="dashicons dashicons-sos"><a target="_blank"
																				href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"><?php esc_html_e( 'Premium support 24/7', 'start' ); ?></a>
										</div>
									</li>
									<li><a target="_blank"
										   href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"
										   class="dashicons dashicons-admin-page"><?php esc_html_e( 'More than 100 docs & tutorials', 'start' ); ?></a>
									</li>
									<li><a target="_blank"
										   href="https://themefuse.com/the-core-multi-purpose-wordpress-theme/"
										   class="dashicons dashicons-update"><?php esc_html_e( 'Free theme updates', 'start' ); ?></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endif;
		} else {
			// in another cases
		}
	}
endif;
add_action( 'admin_notices', 'start_action_tf_notice' );


if ( ! function_exists( 'start_filter_move_comment_field_to_bottom' ) ):
	function start_filter_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;

		return $fields;
	}
endif;
add_filter( 'comment_form_fields', 'start_filter_move_comment_field_to_bottom' );


function start_admin_demo_notice() {
	if ( ! get_option( 'the-start-dismissed-start_demo_notice', false ) ) : ?>
		<div class="notice notice-error is-dismissible tf-custom-notice" data-notice="start_demo_notice">
			<?php /* translators: %s: demo notice text */ ?>
			<p><?php echo sprintf( esc_html__( 'Making the theme look exactly like our %1$sLive Demo%2$s, please follow %3$sthe instructions%4$s', 'start' ), '<a href="https://demo.themefuse.com/start/" target="_blank">', '</a>', '<a href="http://docs.themefuse.com/the-core/your-theme/getting-started/how-to-install-the-demo-content" target="_blank">', '</a>' ); ?></p>
		</div>
	<?php endif;
}

add_action( 'admin_notices', 'start_admin_demo_notice' );


function start_ajax_dismissed_demo_notice() {
	// Store it in the options table
	if ( isset( $_POST['type'] ) && ! empty( $_POST['type'] ) ) {
		$type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
		update_option( 'the-start-dismissed-' . $type, true );
	}
}

add_action( 'wp_ajax_dismissed_demo_notice', 'start_ajax_dismissed_demo_notice' );


function start_admin_brizy_notice() {
	if ( ! get_option( 'the-start-dismissed-start_brizy_notice', false ) ) : ?>
		<?php if ( is_plugin_active( 'brizy/brizy.php' ) ) {
			return;
		} ?>
		<div class="notice notice-error is-dismissible tf-custom-notice tf-brizy-notice" data-notice="start_brizy_notice">
			<div class="tf-brizy-logo">
				<img src="https://brizy.io/wp-content/uploads/2018/02/logo.png" width="150"/>
			</div>
			<div class="tf-brizy-message">
				<?php /* translators: %s: brizy notice text */ ?>
				<?php echo sprintf( esc_html__( 'Try a  better way to build your WordPress pages %1$sfast & easy.%2$s', 'start' ), '<span class="tf-brizy-brand-color">', '</span>'); ?>
			</div>
			<div class="tf-brizy-cta">
				<?php /* translators: %s: brizy notice text */ ?>
				<?php echo sprintf( esc_html__( '%1$sWhy is Better%2$s %3$s|%4$s %5$sInstall Plugin (FREE)%6$s', 'start' ), '<a href="https://www.youtube.com/watch?v=KUv-NqDR-8s" target="_blank">', '</a>', '<span class="tf-brizy-separator">', '</span>',  '<a class="tf-brizy-brand-button" href="'.admin_url('plugin-install.php?s=brizy&tab=search&type=term').'">', '</a>' ); ?>
			</div>
		</div>
	<?php endif;
}

add_action( 'admin_notices', 'start_admin_brizy_notice', 999 );


add_filter( 'comment_form_submit_field', 'start_filter_comment_form_submit_field', 999 );
if ( ! function_exists( 'start_filter_comment_form_submit_field' ) ) :
	function start_filter_comment_form_submit_field( $submit ) {
		$enable_comments_gdpr = function_exists('fw_get_db_customizer_option') ? fw_get_db_customizer_option('comments_gdpr/selected', 'no') : 'no';

		if ( 'yes' == $enable_comments_gdpr ) {
			$start_comments_checkbox = apply_filters(
				'start_wordpress_comments_checkbox',
				'<div class="start_checkbox"><label><input type="checkbox" name="start_gdpr" id="start_gdpr" value="" />' .fw_get_db_customizer_option('comments_gdpr/yes/comments_gdpr_text', ''). '</label></div>'
			);

			return $start_comments_checkbox . $submit;
		} else {
			return $submit;
		}
	}
endif;


add_action( 'pre_comment_on_post', 'start_action_pre_comment_on_post' );
if ( ! function_exists( 'start_action_pre_comment_on_post' ) ) :
	function start_action_pre_comment_on_post() {
		$enable_comments_gdpr = function_exists('fw_get_db_customizer_option') ? fw_get_db_customizer_option('comments_gdpr/selected', 'no') : 'no';
		if ( 'no' == $enable_comments_gdpr ) {
			return;
		}

		if ( ! isset( $_POST['start_gdpr'] ) ) {
			wp_die(
				'<p>' . sprintf(
					__( '<strong>ERROR</strong>: %s', 'start' ),
					__( 'Please check the privacy checkbox before submit', 'start' )
				) . '</p>',
				__( 'Comment Submission Failure' ),
				array( 'back_link' => true )
			);
		}
	}
endif;


