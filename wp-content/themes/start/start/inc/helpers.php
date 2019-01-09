<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Helper functions and classes with static methods for usage in theme
 */


if ( ! function_exists( 'start_is_static_front_page' ) ) :
	/**
	 * Return whether we're previewing the front page and it's a static page.
	 */
	function start_is_static_front_page() {
		return ( is_front_page() && ! is_home() );
	}
endif;


if ( ! function_exists( 'start_get_posts_categories' ) ) :
	/**
	 * Get posts categories
	 */
	function start_get_posts_categories() {
		$categories_list    = array();
		$categories_list[0] = __( 'None', 'start' );

		$categories = get_categories();
		foreach ( $categories as $item ) {
			$categories_list[ $item->term_id ] = $item->name;
		}

		return $categories_list;
	}
endif;


if ( ! function_exists( 'start_panel_count' ) ) :
	/**
	 * Count our number of active panels.
	 *
	 * Primarily used to see if we have any panels active, duh.
	 */
	function start_panel_count() {

		$panel_count  = 0;
		$num_sections = apply_filters( 'start_front_page_sections', 5 );

		// Create a setting and control for each of the sections available in the theme.
		for ( $i = 1; $i < ( 1 + $num_sections ); $i ++ ) {
			if ( get_theme_mod( 'panel_' . $i ) ) {
				$panel_count ++;
			}
		}

		return $panel_count;
	}
endif;


if ( ! function_exists( 'start_get_front_section_types' ) ) :
	/**
	 * Get front section types
	 */
	function start_get_front_section_types() {
		return array(
			'type-1'  => __( 'Type 1', 'start' ),
			'type-2'  => __( 'Type 2', 'start' ),
			'type-3'  => __( 'Type 3', 'start' ),
			'type-4'  => __( 'Type 4', 'start' ),
			'type-5'  => __( 'Type 5', 'start' ),
			'type-6'  => __( 'Type 6', 'start' ),
			'type-7'  => __( 'Type 7', 'start' ),
			'type-8'  => __( 'Type 8', 'start' ),
			'type-9'  => __( 'Type 9', 'start' ),
			'type-10' => __( 'Type 10', 'start' ),
		);
	}
endif;


if ( ! function_exists( 'start_front_page_section' ) ) :
	/**
	 * Display a front page section.
	 *
	 * @param $partial WP_Customize_Partial Partial associated with a selective refresh request.
	 * @param $id integer Front page section to display.
	 */
	function start_front_page_section( $partial = null, $id = 0 ) {
		if ( is_a( $partial, 'WP_Customize_Partial' ) ) {
			// Find out the id and set it up during a selective refresh.
			global $startcounter;
			$id             = str_replace( 'panel_', '', $partial->id );
			$startcounter = $id;
		}

		if ( $panel_selected = get_theme_mod( 'panel_' . $id ) ) {
			$section_front_type = get_theme_mod( 'section_type_' . $id, 'type-1' );

			set_query_var( 'posts_section_atts', array(
				'category'       => $panel_selected,
				'posts_per_page' => start_post_types_posts_per_page( $section_front_type )
			) );

			get_template_part( 'templates/posts-sections/' . $section_front_type );
		} elseif ( is_customize_preview() ) {
			// The output placeholder anchor.
			/* translators: %s: front page section */
			echo '<article class="panel-placeholder panel start-panel start-panel' . esc_attr($id) . '" id="panel' . esc_attr($id) . '"><span class="start-panel-title">' . sprintf( esc_html__( 'Front Page Section %1$s Placeholder', 'start' ), esc_attr($id) ) . '</span></article>';
		}
	}
endif;


if ( ! function_exists( 'start_display_posts_sections' ) ) :
	/**
	 * Post section types query
	 */
	function start_display_posts_sections( $args = array() ) {
		if ( ! is_front_page() ) {
			return;
		}

		if ( 0 !== start_panel_count() || is_customize_preview() ) : // If we have pages to show.
			$num_sections = apply_filters( 'start_front_page_sections', 5 );
			global $start_counter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i ++ ) {
				$start_counter = $i;
				start_front_page_section( null, $i );
			}

		endif; // The if ( 0 !== start_panel_count() ) ends here.
	}
endif;


if ( ! function_exists( 'start_post_types_posts_per_page' ) ) :
	/**
	 * Post section types query
	 *
	 */
	function start_post_types_posts_per_page( $type = 'type-1', $force_value = 0 ) {
		if ( $force_value ) {
			return $force_value;
		}

		if ( $type == 'type-1' ) {
			return apply_filters( 'start_section_type_1_posts_per_page', 5 );
		} elseif ( $type == 'type-2' ) {
			return apply_filters( 'start_section_type_2_posts_per_page', 5 );
		} elseif ( $type == 'type-3' ) {
			return apply_filters( 'start_section_type_3_posts_per_page', 6 );
		} elseif ( $type == 'type-4' ) {
			return apply_filters( 'start_section_type_4_posts_per_page', 6 );
		} elseif ( $type == 'type-5' ) {
			return apply_filters( 'start_section_type_5_posts_per_page', 5 );
		} elseif ( $type == 'type-6' ) {
			return apply_filters( 'start_section_type_6_posts_per_page', 4 );
		} elseif ( $type == 'type-7' ) {
			return apply_filters( 'start_section_type_7_posts_per_page', 4 );
		} elseif ( $type == 'type-8' ) {
			return apply_filters( 'start_section_type_8_posts_per_page', 6 );
		} elseif ( $type == 'type-9' ) {
			return apply_filters( 'start_section_type_9_posts_per_page', 6 );
		} elseif ( $type == 'type-10' ) {
			return apply_filters( 'start_section_type_10_posts_per_page', 10 );
		}

		return 5;
	}
endif;


if ( ! function_exists( 'start_render_view' ) ) :
	/**
	 * Safe render a view and return html
	 * In view will be accessible only passed variables
	 * Use this function to not include files directly and to not give access to current context variables (like $this)
	 *
	 * @param string $file_path
	 * @param array $view_variables
	 * @param bool $return In some cases, for memory saving reasons, you can disable the use of output buffering
	 *
	 * @return string HTML
	 */
	function start_render_view( $file_path, $view_variables = array(), $return = true ) {
		extract( $view_variables, EXTR_REFS );

		unset( $view_variables );

		if ( $return ) {
			ob_start();

			require $file_path;

			return ob_get_clean();
		} else {
			require $file_path;
		}
	}
endif;


if ( ! function_exists( 'start_get_featured_posts' ) ) :
	/**
	 * Getter function for Featured Content Plugin.
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	function start_get_featured_posts() {
		return apply_filters( 'start_get_featured_posts', array() );
	}
endif;


if ( ! function_exists( 'fw_match_aspect_ratio_class' ) ) {
	/**
	 * Match aspect ratio af an image.
	 *
	 * fw_match_aspect_ratio_class(1.332) => fw-ratio-4-3
	 * fw_match_aspect_ratio_class(1.777) => fw-ratio-16-9
	 * fw_match_aspect_ratio_class(295, 166) => fw-ratio-16-9
	 */
	function fw_match_aspect_ratio_class( $ratio, $h = 0 ) {
		$precision = 0.02;
		if ( $h ) {
			$ratio = round( $ratio / $h, 3 );
		}
		$ratios = array(
			'1'      => 'fw-ratio-1',     //1:1
			'2'      => 'fw-ratio-2-1',   //2:1
			'0.5'    => 'fw-ratio-1-2',   //1:2
			'1.333'  => 'fw-ratio-4-3',   //4:3
			'0.75'   => 'fw-ratio-3-4',   //3:4
			'1.777'  => 'fw-ratio-16-9',  //16:9
			'0.5625' => 'fw-ratio-9-16',  //9:16
			'1.5'    => 'fw-ratio-3-2',   //3:2
			'0.666'  => 'fw-ratio-2-3',   //2:3
			'1.666'  => 'fw-ratio-5-3',   //5:3
			'0.6'    => 'fw-ratio-3-5',   //3:5
			'1.6'    => 'fw-ratio-16-10', //16:10
			'0.625'  => 'fw-ratio-10-16'  //10:16
		);

		$_ratio = 'set';
		$min    = 10000;
		foreach ( $ratios as $key => $value ) {
			$key = (float) $key;
			if ( $ratio === $key ) {
				// we have an equal-ratio; no need to check anything else!
				return $value;
			} elseif ( abs( $ratio - $key ) < $min ) {
				$min = abs( $ratio - $key );
				if ( $min != 10000 && $min > $precision ) {
					continue;
				}
				$_ratio = $value;
			}
		}

		return $_ratio;
	}
}


if ( ! function_exists( 'start_image' ) ) {
	/**
	 * Get responsive image
	 *
	 * @param int|array $attachment = array('attachment_id','url') or $attachment_id
	 * @param array $args
	 *
	 * @return array|string
	 */
	function start_image( $attachment = null, $args = null ) {
		$defaults = array(
			'ratio'    => 'fw-ratio-16-9',
			'size'     => 'thumbnail',
			'img_attr' => array(),
			'isbg'     => false,
			'return'   => false
		);
		extract( wp_parse_args( $args, $defaults ) );

		/** get attachment id */
		if ( is_array( $attachment ) && isset( $attachment['attachment_id'] ) && ( isset( $attachment['url'] ) || isset( $attachment['src'] ) ) ) {
			$attachment_id = (int) $attachment['attachment_id'];
			$file_url      = ! empty( $attachment['url'] ) ? $attachment['url'] : $attachment['src'];
		} else {
			$attachment_id = (int) $attachment;
		}

		if ( ! $attachment_id ) {
			if ( ! $attachment_id = get_post_thumbnail_id() ) {
				return false;
			}
		}

		$imagedata = wp_get_attachment_metadata( $attachment_id );

		/** user can disable responsive for images from config file */
		$enable_responsive_images = ( function_exists( 'start' ) ) ? fw()->theme->get_config( 'lazy_responsive_images', true ) : true;

		/** if disabled responsive images, get the image size specified in argument 'size', like wordpress do */
		if ( ! $enable_responsive_images ) {
			$_image    = image_downsize( $attachment_id, $size );
			$file_url  = $_image[0];
			$img_ratio = fw_match_aspect_ratio_class( $_image[1], $_image[2] );

		}

		if ( empty( $file_url ) ) {
			$file_url = wp_get_attachment_url( $attachment_id );
		}


		//fw_cdn_link(); //TODO CDN links

		/** for img tag only */
		if ( ! $isbg ) {
			$attachment = get_post( $attachment_id );

			$default_attr = array(
				'src'         => $file_url,
				'alt'         => trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
				// Use Alt field first
				'data-maxdpr' => '1.7'
			);
			if ( empty( $default_attr['alt'] ) ) {
				$default_attr['alt'] = isset( $attachment->post_excerpt ) ? trim( strip_tags( $attachment->post_excerpt ) ) : '';
			} // If not, Use the Caption
			if ( empty( $default_attr['alt'] ) ) {
				$default_attr['alt'] = isset( $attachment->post_title ) ? trim( strip_tags( $attachment->post_title ) ) : '';
			} // Finally, use the title

			$attr = wp_parse_args( $img_attr, $default_attr );
			$attr = apply_filters( 'wp_get_attachment_image_attributes', $attr, $attachment );
			$attr = array_map( 'esc_attr', $attr );

			if ( $enable_responsive_images ) {
				$attr['class'] = isset( $attr['class'] ) ? $attr['class'] . ' lazyload' : 'lazyload';
			}

			$html_attr = '';
			foreach ( $attr as $name => $value ) {
				if ( $name == 'src' ) {
					continue;
				}
				$html_attr .= " $name=" . '"' . $value . '"';
			}
		}

		if ( $enable_responsive_images ) {
			/** group images by ratio in urls array */
			if ( ! empty( $attr['src'] ) ) {
				$file_url = $attr['src'];
			}
			$urls = array();
			if ( ! empty( $imagedata['sizes'] ) ) {
				foreach ( $imagedata['sizes'] as $_size => $data ) {
					$img_ratio = fw_match_aspect_ratio_class( $data['width'], $data['height'] );
					if ( $img_ratio != 'set' ) {
						$urls[ $img_ratio ][] = path_join( dirname( $file_url ), $data['file'] ) . ' ' . $data['width'] . 'w';
					}

				}
			}

			/** add original size */
			$img_ratio            = fw_match_aspect_ratio_class( $imagedata['width'], $imagedata['height'] );
			$urls[ $img_ratio ][] = $file_url . ' ' . $imagedata['width'] . 'w';

			/** by default take original aspect ratio, if argument $ratio is set, use this instead */
			if ( ! empty( $ratio ) && ! empty( $urls[ $ratio ] ) ) {
				$img_ratio = $ratio;
			}
			$srcset = '';
			$bgset  = ( $isbg ) ? 'bg' : 'src';
			$srcset .= 'data-' . $bgset . 'set="' . implode( ", ", $urls[ $img_ratio ] ) . '" ';
		}
		$ratio_class = ( $img_ratio != 'set' ) ? $img_ratio : 'fw-noratio';

		//src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
		if ( $isbg ) {

			if ( $enable_responsive_images ) {
				$bg = ' style="background-image: url(data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==);" ' . $srcset;
			} else {
				$bg = ' style="background-image: url(' . $file_url . ');" ';
			}

			return ( $return ) ? array(
				'img'                => $bg,
				'ratio'              => $ratio_class,
				'original_image_url' => $file_url
			) : $bg;

		} else {

			if ( $enable_responsive_images ) {
				$img = '<noscript><img itemprop="image" src="' . $file_url . '" ' . $html_attr . ' /></noscript>';
				$img .= '<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-sizes="auto" ' . $srcset . ' ' . $html_attr . ' />';
			} else {
				$img = '<img itemprop="image" src="' . $file_url . '" ' . $html_attr . ' />';
			}
			$img = apply_filters( 'post_thumbnail_html', $img, null, $attachment_id, $size, $attr );

			$caption = isset( $attachment->post_excerpt ) ? $attachment->post_excerpt : '';

			return ( $return ) ? array(
				'img'                => $img,
				'ratio'              => $ratio_class,
				'original_image_url' => $file_url,
				'caption'            => trim( strip_tags( $caption ) )
			) : $img;
		}
	}
}


if ( ! function_exists( 'start_logo' ) ):
	/**
	 * Display theme logo
	 *
	 * @param bool $wrap - flag to check if logo must be wrapped
	 */
	function start_logo( $wrap = false ) {
		$logo_settings['logo']['selected_value']   = 'image';
		$logo_settings['logo']['text']['title']    = get_bloginfo( 'name' );
		$logo_settings['logo']['text']['subtitle'] = '';
		//get logo settings from customizer
		if ( defined( 'FW' ) ) {
			$logo_settings = fw_get_db_customizer_option( 'logo_settings' );
		}
		?>
		<div class="fw-wrap-logo">
			<?php if ( $wrap ): ?>
			<div class="fw-container">
				<?php endif; ?>

				<!--If logo is a image-->
				<?php if ( $logo_settings['logo']['selected_value'] == 'image' ) :
					$image_logo = isset( $logo_settings['logo']['image']['image_logo'] ) ? $logo_settings['logo']['image']['image_logo'] : array();
					if ( empty( $image_logo ) ) {
						$image_logo['url'] = get_template_directory_uri() . '/assets/img/unyson/logo.png';
					}
					if ( ! empty( $image_logo ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fw-site-logo">
							<img src="<?php echo esc_url( $image_logo['url'] ); ?>" alt="site logo"/>
						</a>
					<?php endif;
				//If logo is a title
				else :
					if ( $logo_settings['logo']['text']['title'] != '' ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fw-site-logo">
							<strong class="site-title"
								itemprop="headline"><?php echo esc_html( $logo_settings['logo']['text']['title'] ); ?>
							</strong>
							<?php if ( $logo_settings['logo']['text']['subtitle'] != '' ) : ?>
								<span class="site-description"
									itemprop="description"><?php echo esc_html( $logo_settings['logo']['text']['subtitle'] ); ?>
								</span>
							<?php endif; ?>
						</a>
					<?php endif;
				endif; ?>

				<?php if ( $wrap ): ?>
			</div>
		<?php endif; ?>
		</div>
	<?php }
endif;

if ( ! function_exists( 'start_post_meta' ) ) :
	/**
	 * Display post meta (date, category, author)
	 *
	 * @param string $post_id - poat id
	 * @param string $post_type - post type
	 */
	function start_post_meta( $post_id, $post_type = 'post' ) {
		$permalink = esc_url( get_permalink( $post_id ) );
		//get general settings for article
		$posts_general_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'posts_settings', '' ) : array();
		//check if post date is enabled
		$post_date = isset( $posts_general_settings['post_date'] ) ? $posts_general_settings['post_date'] : '';
		//check if post author is enabled
		$post_author = isset( $posts_general_settings['post_author'] ) ? $posts_general_settings['post_author'] : '';
		//check if post categories is enabled
		$post_categories = isset( $posts_general_settings['post_categories'] ) ? $posts_general_settings['post_categories'] : '';
		?>
		<div class="wrap-entry-meta">
			<?php if ( $post_date != 'no' ) : ?>
				<span class="entry-date">
					<a rel="bookmark" href="<?php echo esc_url( $permalink ); ?>">
						<time itemprop="datePublished" datetime="<?php start_get_datetime_attribute(); ?>"><?php echo get_the_date(); ?></time>
					</a>
				</span>
			<?php endif; ?>
			<?php if ( $post_author != 'no' ) : ?>
				<?php if ( $post_date != 'no' ) : ?>
					<span class="separator">&nbsp;|&nbsp;</span>
				<?php endif; ?>
				<span itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author" class="author"><?php esc_html_e( 'By', 'start' ); ?> <?php the_author_posts_link(); ?></span>
			<?php endif; ?>
			<?php if ( $post_categories != 'no' && $post_type != 'fw-learning-articles' ) : ?>
				<span class="cat-links"> <?php esc_html_e( 'In', 'start' ); ?> <?php echo wp_kses( start_cat_links( $post_id ), start_allowed_html() ); ?></span>
			<?php endif; ?>
		</div>
	<?php }
endif;


if ( ! function_exists( 'start_post_meta_blog_2' ) ) :
	/**
	 * Display post meta for blog type 2 (date, category, author)
	 *
	 * @param string $post_id - post id
	 * @param string $post_type - post type
	 */
	function start_post_meta_blog_2( $post_id, $post_type = 'post' ) {
		$permalink = esc_url( get_permalink( $post_id ) );
		//get general settings for article
		$posts_general_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'posts_settings', '' ) : array();
		//check if post date is enabled
		$post_date = isset( $posts_general_settings['post_date'] ) ? $posts_general_settings['post_date'] : '';
		//check if post author is enabled
		$post_author = isset( $posts_general_settings['post_author'] ) ? $posts_general_settings['post_author'] : '';
		//check if post categories is enabled
		$post_categories = isset( $posts_general_settings['post_categories'] ) ? $posts_general_settings['post_categories'] : '';
		?>
		<div class="wrap-entry-meta">
			<?php if ( $post_author != 'no' || $post_date != 'no' ) : ?>
				<div class="footer-meta">
					<?php if ( $post_author != 'no' ) : ?>
						<span itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author" class="author"><?php esc_html_e( 'By', 'start' ); ?> <?php the_author_posts_link(); ?></span>
					<?php endif; ?>
					<?php if ( $post_date != 'no' ) : ?>
						<span class="entry-date">
						<a rel="bookmark" href="<?php echo esc_url( $permalink ); ?>">
                            <time itemprop="datePublished"
								  datetime="<?php start_get_datetime_attribute(); ?>"><?php echo get_the_date(); ?></time>
                        </a>
					</span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if ( $post_categories != 'no' && $post_type != 'fw-learning-articles' ) : ?>
				<span class="cat-links"> <?php esc_html_e( 'In', 'start' ); ?> <?php echo wp_kses( start_cat_links( $post_id ), start_allowed_html() ); ?></span>
			<?php endif; ?>
		</div>
	<?php }
endif;


if ( ! function_exists( 'start_get_socials' ) ) :
	/**
	 * Display socials buttons
	 *
	 * @param string $class - custom class to add
	 */
	function start_get_socials( $class ) {
		//get socials settings
		$socials = fw_get_db_customizer_option( 'socials' );

		if ( ! empty( $socials ) ) {
			$socials_html = '';
			// parse all socials
			foreach ( $socials as $social ) {
				$icon = '';
				//icon class
				if ( $social['social_type']['social-type'] == 'icon-social' ) {
					// get icon class
					if ( ! empty( $social['social_type']['icon-social']['icon_class'] ) ) {
						$icon .= '<i class="' . esc_attr( $social['social_type']['icon-social']['icon_class'] ) . '"></i>';
					}
					//image icon
				} else {
					// get uploaded icon
					if ( ! empty( $social['social_type']['upload-icon']['upload-social-icon'] ) ) {
						$icon .= '<img src="' . esc_url( $social['social_type']['upload-icon']['upload-social-icon']['url'] ) . '" alt="" />';
					}
				}

				// get social link
				$link = $social['social-link'];

				$socials_html .= '<a target="_blank" href="' . esc_url( $link ) . '">' . $icon . '</a>';
			}

			// return socials html
			return '<div class="' . $class . '">' . $socials_html . '</div>';
		}
	}
endif;


if ( ! function_exists( 'start_get_content_class' ) ) :
	/**
	 * Get content class when is full width or width sidebar
	 *
	 * @param string $parameter
	 * @param string $sidebar_position
	 */
	function start_get_content_class( $parameter, $sidebar_position ) {
		$class = '';
		if ( $parameter == 'content' ) {
			if ( $sidebar_position == 'left' || $sidebar_position == 'right' ) {
				$class = 'col-md-8 col-sm-12';
			} else {
				$class = 'col-md-12';
			}
		} elseif ( $parameter == 'main' ) {
			if ( $sidebar_position == 'left' ) {
				$class = 'sidebar-left';
			} elseif ( $sidebar_position == 'right' ) {
				$class = 'sidebar-right';
			}
		}
		echo esc_attr( $class );
	}
endif;


if ( ! function_exists( 'start_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function start_posted_on( $return = false ) {
		global $post;
		$author_id = $post->post_author;

		// Get the author name; wrap it in a link.
		$byline = sprintf(
		/* translators: %s: post author */
			__( 'by %s', 'start' ),
			'<a class="url fn n" href="' . esc_url( get_author_posts_url( $author_id ) ) . '">' . get_the_author_meta( 'display_name', $author_id ) . '</a>'
		);

		if ( $return ) {
			return '<span class="author"> ' . $byline . '</span><span class="posted-on">' . start_time_link() . '</span>';
		}

		// Finally, let's write all of this to the page.
		echo '<span class="author"> ' . wp_kses( $byline, start_allowed_html() ) . '</span><span class="posted-on">' . wp_kses( start_time_link(), start_allowed_html() ) . '</span>';
	}
endif;


if ( ! function_exists( 'start_time_link' ) ) :
	/**
	 * Gets a nicely formatted string for the published date.
	 */
	function start_time_link() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			get_the_date( DATE_W3C ),
			get_the_date(),
			get_the_modified_date( DATE_W3C ),
			get_the_modified_date()
		);

		// Wrap the time string in a link, and preface it with 'Posted on'.
		return sprintf(
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
	}
endif;


if ( ! function_exists( 'start_header_image' ) ) :
	/**
	 * Display header image for taxonomies and posts
	 */
	function start_header_image() {
		if ( ! defined( 'FW' ) ) {
			return;
		}

		global $post;
		$post_type = get_post_type( $post );
		// get general header options
		if ( $post_type == 'page' ) {
			$general_header_options = fw_get_db_customizer_option( 'general_page_header' );
		} elseif ( $post_type == 'fw-portfolio' ) {
			$general_header_options = fw_get_db_customizer_option( 'general_portfolio_header' );
		} else {
			$general_header_options = fw_get_db_customizer_option( 'general_posts_header' );
		}

		$description = $overlay_style = $title_style = $title_class = $subtitle_style = $subtitle_class = $title = $taxonomy = $term_id = $header_image_overlap_style = $header_image_overlap_class = '';

		if ( is_page() ) {
			// for page (default template)
			$post_id = $post->ID;
			$image   = fw_get_db_post_option( $post_id, 'header_image', '' );
			$title   = get_the_title( $post_id );
		} elseif ( ! is_single() ) {
			if ( is_category() ) {
				$term = get_category( get_query_var( 'cat' ), false );
			} else {
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			}

			if ( is_post_type_archive( 'product' ) ) {
				$title = esc_html__( 'Products', 'start' );
			} elseif ( is_search() ) {
				$title = esc_html__( 'Search results', 'start' );
			} else {
				$title = get_the_archive_title();
			}

			if ( isset( $term->taxonomy ) ) {
				$title       = $term->name;
				$description = $term->description;
			}

			// header_image from category
			$image = '';
		} else {
			// for single post
			$post_id       = $post->ID;
			$image         = fw_get_db_post_option( $post_id, 'header_image', '' );
			$taxonomy_list = get_object_taxonomies( $post_type );

			if ( isset( $taxonomy_list['0'] ) ) {
				$taxonomy = $taxonomy_list['0'];
				if ( $taxonomy == 'product_type' ) {
					$taxonomy = 'product_cat';
				}
			}
			$terms = wp_get_post_terms( $post_id, $taxonomy );
			if ( $image == '' ) {
				// get image from post category
				if ( isset( $terms[0]->term_id ) ) {
					$image = fw_get_db_term_option( $terms[0]->term_id, $taxonomy, 'header_image', '' );
				}
			}

			// general post header title
			$posts_header_title = isset( $general_header_options['posts_header_title'] ) ? $general_header_options['posts_header_title'] : array();

			if ( isset( $posts_header_title['posts_title'] ) && $posts_header_title['posts_title'] == 'custom_title' ) {
				$title       = $posts_header_title['custom_title']['custom_title_text'];
				$description = $posts_header_title['custom_title']['custom_subtitle_text'];
			} elseif ( isset( $posts_header_title['posts_title'] ) && $posts_header_title['posts_title'] == 'category_title' ) {
				if ( isset( $terms[0]->name ) ) {
					$title       = $terms[0]->name;
					$description = $terms[0]->description;
				}

				if ( $post_type == 'fw-learning-articles' || $post_type == 'fw-learning-quiz' ) {
					// for learning article (don't have category)
					$title = get_the_title( $post_id );
				}
			} else {
				$title = get_the_title( $post_id );
			}
		}

		if ( $image == '' ) {
			// if image from post or category is empty - get image from general theme settings
			$image = isset( $general_header_options['posts_header_image'] ) ? $general_header_options['posts_header_image'] : array();
		}

		//header image html
		if ( ! empty( $image ) ) { ?>
			<section
					class="fw-main-row-custom fw-main-row-top fw-content-vertical-align-middle fw-section-image fw-section-default-page fw-section-height-md"
					style="background-image: url('<?php if ( ! empty( $image ) ) {
						echo esc_url( $image['url'] );
					} ?>');">
				<div class="fw-container-fluid">
					<div class="fw-row">
						<div class="fw-col-sm-12">
							<div class="fw-heading fw-heading-h1 fw-heading-center">
								<h1 class="fw-special-title"><?php echo wp_kses( start_translate( $title ), start_allowed_html() ); ?></h1>
								<?php if ( $description != '' ) : ?>
									<div class="fw-special-subtitle"><?php echo wp_kses( start_translate( $description ), start_allowed_html() ); ?></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		} //if no header image available
		else { ?>
			<div class="no-header-image"></div>
		<?php }
	}
endif;


if ( ! function_exists( 'start_single_post_options' ) ) :
	/**
	 * return single post options
	 *
	 * @param integer $post_id - post id
	 *
	 * @return array - return an array of needed option for specific single post
	 */
	function start_single_post_options( $post_id ) {
		$args        = array(
			'img_attr' => array( 'class' => 'attachment-post-thumbnail' ),
			'size'     => 'the-start-blog-full',
			'return'   => true,
			'ratio'    => 'fw-ratio-16-9'
		);
		$image       = start_image( get_post_thumbnail_id(), $args );
		$ratio_class = ( $image['ratio'] != 'fw-noratio' ) ? 'fw-ratio-container ' . $image['ratio'] : $image['ratio'];

		return array(
			'image'       => $image,
			'ratio_class' => $ratio_class,
		);
	}
endif;


if ( ! function_exists( 'start_listing_post_options' ) ) :
	/**
	 * return single post options
	 *
	 * @param integer $post_id - post id
	 *
	 * @return array - return an array of needed option for specific listing post
	 */
	function start_listing_post_options( $post_id ) {
		$args        = array(
			'img_attr' => array( 'class' => 'attachment-post-thumbnail' ),
			'size'     => 'the-start-blog-full',
			'return'   => true,
			'ratio'    => 'fw-ratio-16-9'
		);
		$image       = start_image( get_post_thumbnail_id(), $args );
		$ratio_class = $image['ratio'];

		$ratio_class = ( $ratio_class != 'fw-noratio' ) ? 'fw-ratio-container ' . $ratio_class : $ratio_class;

		return array(
			'image'       => $image,
			'ratio_class' => $ratio_class,
		);
	}
endif;

if ( ! function_exists( 'start_get_datetime_attribute' ) ) :
	/**
	 * Display specific date format for datetime attribute
	 *
	 * @param boolean $return - return or not the value
	 */
	function start_get_datetime_attribute( $return = false ) {
		//get post date
		$date      = get_the_date( 'Y-m-d---G:i:sP' );
		$date_time = str_replace( '---', 'T', $date );
		if ( $return ) {
			return $date_time;
		} else {
			echo wp_kses( $date_time, start_allowed_html() );
		}
	}
endif;


if ( ! function_exists( 'start_cat_links' ) ):
	/**
	 * Function return current post terms
	 * @return array - return post categories
	 */
	function start_cat_links( $id ) {
		return get_the_term_list( $id, 'category', '', ', ', '' );
	}
endif;


if ( ! function_exists( 'fw_get_category_term_list' ) ) :
	/**
	 * Function that return an array of categories for latest post shortcode
	 *
	 * @return array - array of available categories
	 */
	function fw_get_category_term_list() {
		$taxonomy = 'category';
		$args     = array(
			'hide_empty' => true,
		);

		$terms     = get_terms( $taxonomy, $args );
		$result    = array();
		$result[0] = esc_html__( 'All Categories', 'start' );

		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				$result[ $term->term_id ] = $term->name;
			}
		}

		return $result;
	}
endif;


if ( ! function_exists( 'start_footer' ) ) :
	/**
	 * Display theme footer
	 */
	function start_footer() {
		//get footer settings
		$footer_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'footer_settings' ) : array();
		//check if is enabled footer widgets
		$show_footer_widgets = isset( $footer_settings['show_footer_widgets']['selected_value'] ) ? $footer_settings['show_footer_widgets']['selected_value'] : 'yes';
		//get footer copyright position
		$copyright_position = isset( $footer_settings['copyright_position'] ) ? $footer_settings['copyright_position'] : 'fw-copyright-center';
		//check if footer socials are enabled
		$footer_socials = isset( $footer_settings['footer_socials']['selected_value'] ) ? $footer_settings['footer_socials']['selected_value'] : 'no';
		//get footer copyright
		$website_url = 'https://themefuse.com/';
		$copyright   = isset( $footer_settings['copyright'] ) ? $footer_settings['copyright'] : 'Copyright &copy;2017 <a href="' . $website_url . '" rel="follow">ThemeFuse</a>. All Rights Reserved';
		?>
		<!--show footer widgets template-->
		<?php if ( $show_footer_widgets == 'yes' ) :
			get_template_part( 'templates/footers/footer-widgets' );
		endif; ?>

		<!--show footer copyright and socials-->
		<div class="fw-footer-bar <?php echo esc_attr( $copyright_position ); ?>">
			<div class="fw-container">
				<?php if ( $footer_socials == 'yes' ) {
					echo wp_kses( start_get_socials( 'fw-footer-social' ), start_allowed_html() );
				} ?>
				<div class="fw-copyright"><?php echo do_shortcode( $copyright ); ?></div>
			</div>
		</div>
	<?php }
endif;


if ( ! function_exists( 'start_get_blog_view' ) ) :
	/**
	 * Get blog view classes and id
	 *
	 * @param string $blog_view - blog view type (grid)
	 * @param string $selector - class or id
	 * @param string $sidebar_position - sidebar position
	 *
	 * @return string - return specific classes and ids
	 */
	function start_get_blog_view( $blog_view, $selector = 'class', $sidebar_position = null ) {
		if ( $blog_view == 'grid' ) {
			if ( $selector == 'id' ) {
				return ( $sidebar_position == null || $sidebar_position == 'full' ) ? 'id="postlist-grid3"' : 'id="postlist-grid2"';
			} else {
				return ( $sidebar_position == null || $sidebar_position == 'full' ) ? 'clearfix fw-row postlist-grid postlist-grid-cols3' : 'clearfix fw-row postlist-grid postlist-grid-cols2';
			}
		}
	}
endif;

if ( ! function_exists( 'start_translate' ) ) :
	/**
	 * Return the content for translations plugins
	 *
	 * @param string $content - translated content
	 */
	function start_translate( $content ) {
		$content = html_entity_decode( $content, ENT_QUOTES, 'UTF-8' );

		if ( function_exists( 'icl_object_id' ) && strpos( $content, 'wpml_translate' ) == true ) {
			$content = do_shortcode( $content );
		} elseif ( function_exists( 'qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage' ) ) {
			$content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage( $content );
		} elseif ( function_exists( 'ppqtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage' ) ) {
			$content = ppqtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage( $content );
		}

		return $content;
	}
endif;

if ( ! function_exists( 'start_related_articles' ) ) :
	/**
	 * Show post related articles
	 * @return object - all related posts for the specific post
	 */
	function start_related_articles() {
		global $post;
		$taxonomy   = 'post_tag';
		$post_terms = array();
		//get terms by post tag
		$terms = wp_get_post_terms( $post->ID, $taxonomy );

		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				$post_terms[] = $term->term_id;
			}
		} else {
			// if post have 0 tags
			$taxonomy = 'category';
			$terms    = wp_get_post_terms( $post->ID, $taxonomy );
			if ( ! empty( $terms ) ) {
				foreach ( $terms as $term ) {
					$post_terms[] = $term->term_id;
				}
			}
		}

		$args = array(
			'posts_per_page' => 2,
			'orderby'        => 'date',
			'post_status'    => 'publish',
			'post_type'      => 'post',
			'post__not_in'   => array( $post->ID ),
			'tax_query'      => array(
				array(
					'taxonomy' => $taxonomy,
					'field'    => 'id',
					'terms'    => $post_terms
				),
			)
		);

		$all_posts = new WP_Query( $args );

		return $all_posts->posts;
	}
endif;


if ( ! function_exists( 'start_include_file_from_child' ) ) :
	/**
	 * Include a file first from child if exist else from parent
	 */
	function start_include_file_from_child( $file ) {
		if ( file_exists( get_stylesheet_directory() . $file ) ) {
			return get_stylesheet_directory_uri() . $file;
		} else {
			return get_template_directory_uri() . $file;
		}
	}
endif;

if ( ! function_exists( 'start_get_font_array' ) ) :
	/**
	 * get an array of fonts
	 *
	 * @param array $font_array
	 * @param array $start_color_settings
	 *
	 * @return array
	 */
	function start_get_font_array( $font_array, $start_color_settings ) {
		global $start_google_fonts_list;
		$return['font-family']    = "'" . $font_array['family'] . "'";
		$return['font-size']      = $font_array['size'] . 'px';
		$return['line-height']    = $font_array['line-height'] . 'px';
		$return['letter-spacing'] = $font_array['letter-spacing'] . 'px';
		$return['color']          = '';
		if ( isset( $font_array['color-palette']['id'] ) && $font_array['color-palette']['id'] == 'fw-custom' ) {
			if ( ! empty( $font_array['color-palette']['color'] ) ) {
				$return['color'] = $font_array['color-palette']['color'];
			}
		} elseif ( isset( $font_array['color-palette']['id'] ) ) {
			$return['color'] = $start_color_settings[ $font_array['color-palette']['id'] ];
		}

		// if is google font
		$return['font-weight'] = $return['font-style'] = '';
		if ( isset( $font_array['google_font'] ) && $font_array['google_font'] ) {
			if ( strpos( $font_array['variation'], 'italic' ) !== false ) {
				$return['font-style'] = 'italic';
			} elseif ( strpos( $font_array['variation'], 'oblique' ) !== false ) {
				$return['font-style'] = 'oblique';
			} else {
				$return['font-style'] = 'normal';
			}
			$return['font-weight']                                                                           = ( intval( $font_array['variation'] ) == 0 ) ? 400 : intval( $font_array['variation'] );
			$start_google_fonts_list[ $font_array['family'] ]['variation'][ $font_array['variation'] ] = $font_array['variation'];
			$start_google_fonts_list[ $font_array['family'] ]['subset'][ $font_array['subset'] ]       = $font_array['subset'];
			update_option( 'start_theme_google_fonts_list', $start_google_fonts_list );
		} elseif ( isset( $font_array['style'] ) ) {
			$return['font-style']  = $font_array['style'];
			$return['font-weight'] = $font_array['weight'];
		}

		return $return;
	}
endif;

if ( ! function_exists( 'start_get_remote_fonts' ) ) :
	/**
	 * Get remote fonts
	 *
	 * @param array $include_from_google
	 */
	function start_get_remote_fonts( $include_from_google ) {
		if ( ! sizeof( $include_from_google ) ) {
			return '';
		}

		$html = "https://fonts.googleapis.com/css?family=";
		foreach ( $include_from_google as $font => $styles ) {
			$html .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles['variation'] ) . '|';

			// todo : optimize for include subset
			//$html .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles['variation'] ) .'|';
			//$subset_key = implode( '', $styles['subset'] );
			//$subset[$subset_key] = $subset_key;
		}
		//$html .= '&subset='.implode( ',', $subset );
		$html = substr( $html, 0, - 1 );

		return $html;
	}
endif;

if ( ! function_exists( 'start_get_blog_comments_number' ) ):
	/**
	 * get post comments number
	 *
	 * @param string $permalink - post permalink
	 */
	function start_get_blog_comments_number( $permalink ) {
		?>
		<a href="<?php echo esc_url( $permalink ); ?>#comments" class="comments-link fw-comment-link-type-1">
	            <span>
		            <?php comments_number( '0', esc_html__( '1', 'start' ), '%' ); ?>
	            </span>
		</a>
		<?php
	}
endif;

if ( ! function_exists( 'start_top_bar' ) ):
	/**
	 * get theme top bar
	 *
	 * @param array $atts - array of top bar settings
	 */
	function start_top_bar(
		$atts = array(
			'top_bar_text'          => '',
			'enable_header_socials' => '',
			'enable_search'         => '',
			'search_type'           => '',
			'placeholder_text'      => '',
			'search_position'       => ''
		)
	) { ?>
		<div class="fw-top-bar">
			<div class="fw-container">
				<!--show topbar text-->
				<?php if ( $atts['top_bar_text'] != '' ) : ?>
					<span class="fw-text-top-bar"><?php echo do_shortcode( $atts['top_bar_text'] ); ?></span>
				<?php endif; ?>
				<!--if top bar socials are enabled-->
				<?php if ( $atts['enable_header_socials'] == 'yes' ) {
					echo wp_kses( start_get_socials( 'fw-top-bar-social' ), start_allowed_html() );
				} ?>
				<!--if top bar search is enabled-->
				<?php if ( $atts['enable_search'] == 'yes' && $atts['search_position'] == 'top_bar' ) : ?>
					<div class="fw-search <?php echo esc_attr( $atts['search_type'] ); ?>">
						<?php if ( $atts['search_type'] == 'fw-input-search' ) : ?>
							<div class="fw-wrap-search-form">
								<?php get_template_part( 'searchform' ); ?>
							</div>
						<?php endif; ?>
						<a href="#" class="fw-search-icon"><i class="fa fa-search"></i></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php }
endif;


if ( ! function_exists( 'start_sanitize_section_types' ) ) :
	/**
	 * Sanitize the section types.
	 *
	 * @param string $input Section Types.
	 */
	function start_sanitize_section_types( $input ) {
		$valid = array(
			'type-1',
			'type-2',
			'type-3',
			'type-4',
			'type-5',
			'type-6',
			'type-7',
			'type-8',
			'type-9',
			'type-10'
		);

		if ( in_array( $input, $valid, true ) ) {
			return $input;
		}

		return 'type-1';
	}
endif;


if ( ! function_exists( 'start_get_blog_wrap' ) ) :
	/**
	 * Get blog wrap
	 *
	 * @param string $start_blog_view
	 * @param string $start_sidebar_position
	 */
	function start_get_blog_wrap( $start_blog_view, $start_sidebar_position = null ) {
		$start_wrap_div = array();

		if ( $start_blog_view == 'blog-2' ) {
			$start_wrap_div['start'] = ( $start_sidebar_position == null || $start_sidebar_position == 'full' ) ? '<div class="fw-col-md-4 postlist-col">' : '<div class="fw-col-md-6 postlist-col">';
			$start_wrap_div['end']   = '</div>';
		} else {
			$start_wrap_div['start'] = '';
			$start_wrap_div['end']   = '';
		}

		return $start_wrap_div;
	}
endif;


if ( ! function_exists( 'start_adjustColorLightenDarken' ) ) :
	/**
	 * @param $color_code
	 * @param int $percentage_adjuster
	 *
	 * @return array|string
	 */
	function start_adjustColorLightenDarken( $color_code, $percentage_adjuster = 0 ) {
		$percentage_adjuster = round( $percentage_adjuster / 100, 2 );
		if ( is_array( $color_code ) ) {
			$r = $color_code["r"] - ( round( $color_code["r"] ) * $percentage_adjuster );
			$g = $color_code["g"] - ( round( $color_code["g"] ) * $percentage_adjuster );
			$b = $color_code["b"] - ( round( $color_code["b"] ) * $percentage_adjuster );

			return array(
				"r" => round( max( 0, min( 255, $r ) ) ),
				"g" => round( max( 0, min( 255, $g ) ) ),
				"b" => round( max( 0, min( 255, $b ) ) )
			);
		} else if ( preg_match( "/#/", $color_code ) ) {
			$hex = str_replace( "#", "", $color_code );
			$r   = ( strlen( $hex ) == 3 ) ? hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) ) : hexdec( substr( $hex, 0, 2 ) );
			$g   = ( strlen( $hex ) == 3 ) ? hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) ) : hexdec( substr( $hex, 2, 2 ) );
			$b   = ( strlen( $hex ) == 3 ) ? hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) ) : hexdec( substr( $hex, 4, 2 ) );
			$r   = round( $r - ( $r * $percentage_adjuster ) );
			$g   = round( $g - ( $g * $percentage_adjuster ) );
			$b   = round( $b - ( $b * $percentage_adjuster ) );

			return "#" . str_pad( dechex( max( 0, min( 255, $r ) ) ), 2, "0", STR_PAD_LEFT )
			       . str_pad( dechex( max( 0, min( 255, $g ) ) ), 2, "0", STR_PAD_LEFT )
			       . str_pad( dechex( max( 0, min( 255, $b ) ) ), 2, "0", STR_PAD_LEFT );
		} else {
			return $color_code;
		}
	}
endif;


if ( ! function_exists( 'start_hex2rgba' ) ) :
	/**
	 * Convert hexdec color string to rgb(angel) string
	 *
	 * @param string $color
	 * @param boolean $start_opacity
	 */
	function start_hex2rgba( $color, $start_opacity = false ) {

		$default = 'rgba(0,0,0,0)';

		// Return default if no color provided
		if ( empty( $color ) ) {
			return $default;
		}

		// Sanitize $color if "#" is provided
		if ( $color[0] == '#' ) {
			$color = substr( $color, 1 );
		}

		// Check if color has 6 or 3 characters and get values
		if ( strlen( $color ) == 6 ) {
			$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			return $default;
		}

		// Convert hexadec to rgb
		$rgb = array_map( 'hexdec', $hex );

		// Check if opacity is set(rgba or rgb) --- if is zero, we need to put RGBA, for some cases in theme options
		if ( $start_opacity || (int) $start_opacity == 0 ) {
			if ( abs( $start_opacity ) > 1 ) {
				$start_opacity = 1.0;
			}
			$output = 'rgba(' . implode( ",", $rgb ) . ',' . $start_opacity . ')';
		} else {
			$output = 'rgb(' . implode( ",", $rgb ) . ')';
		}

		// Return rgb(angel) color string
		return $output;
	}
endif;


if ( ! function_exists( 'start_style_file_name' ) ) :
	/**
	 * Return the file name for file that is generated with all theme styles
	 *
	 * @return string
	 */
	function start_style_file_name() {
		return apply_filters( '_filter_start_style_file_name', 'fw-style' );
	}
endif;


if ( ! function_exists( 'start_allowed_html' ) ) :
	/**
	 * Return array of allowed html
	 *
	 * @return array
	 */
	function start_allowed_html() {
		return apply_filters( '_filter_start_allowed_html',
			array(
				'div'    => array( 'class' => array() ),
				'a'      => array( 'href' => array(), 'title' => array(), 'target'=> array(), 'href' => array(), 'class' => array() ),
				'span'   => array( 'class' => array() ),
				'br'     => array(),
				'em'     => array(),
				'strong' => array( 'class' => array() ),
				'i'      => array( 'class' => array() ),
				'img'    => array( 'class' => array(), 'title' => array(), 'src'=> array(), 'href' => array() ),
			) );
	}
endif;


function start_attr_to_html( array $attr_array ) {
	$html_attr = '';

	foreach ( $attr_array as $attr_name => $attr_val ) {
		if ( $attr_val === false ) {
			continue;
		}

		//$html_attr .= $attr_name . '="' . fw_htmlspecialchars( $attr_val ) . '" ';
		$html_attr .= $attr_name . "='" . fw_htmlspecialchars( $attr_val ) . "' ";
	}

	return $html_attr;
}


if ( ! function_exists( 'start_get_all_portfolio_taxonomy_list' ) ) :
	/**
	 * Get list of portfolio taxonomies
	 *
	 * @param string $param
	 */
	function start_get_all_portfolio_taxonomy_list( $param = 'All Categories' ) {
		$taxonomy = 'fw-portfolio-category';
		$args     = array(
			'hide_empty' => true,
		);

		$terms     = get_terms( $taxonomy, $args );
		$result    = array();
		$result[0] = $param;

		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				if( isset($term->term_id) ) {
					$result[ $term->term_id ] = $term->name;
				}
			}
		}

		return $result;
	}
endif;


if ( ! function_exists( 'fw_theme_portfolio_post_taxonomies' ) ) :
	function fw_theme_portfolio_post_taxonomies( $post_id, $return = false ) {
			/**
			 * Return portfolio post taxonomies
			 * @param integer $post_id
			 * @param boolean $return
			 */
			$taxonomy = 'fw-portfolio-category';
			$terms    = wp_get_post_terms( $post_id, $taxonomy );
			$list     = '';
			$checked  = false;
			foreach ( $terms as $term ) {
					if ( $term->parent == 0 ) {
							// if is checked parent category
							$list .= 'category_' . $term->term_id . ' ';
							$checked = true;
					} else {
							$list .= 'category_' . $term->term_id . ', ';
							$parent_id = $term->parent;
					}
			}

			if ( ! $checked ) {
					// if is not checked parent category extract this parent
					if(isset($parent_id)){
							$term = get_term_by( 'id', $parent_id, $taxonomy );
							$list .= 'category_' . $term->term_id . ' ';
					}
			}

			if ( $return ) {
					return $list;
			} else {
					echo $list;
			}
	}
endif;
