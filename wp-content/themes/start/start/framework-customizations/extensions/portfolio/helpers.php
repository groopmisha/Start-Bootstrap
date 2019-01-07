<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! function_exists( 'fw_ext_portfolio_get_gallery_images' ) ):
	/**
	 * Get portfolio gallery images from specific post
	 *
	 * @param integer $post_id
	 *
	 * @return array $options array of portfolio gallery images
	 */
	function fw_ext_portfolio_get_gallery_images( $post_id = 0 ) {
		if ( 0 === $post_id && null === ( $post_id = get_the_ID() ) ) {
			return array();
		}

		$options = get_post_meta( $post_id, 'fw_options', true );

		return isset( $options['project-gallery'] ) ? $options['project-gallery'] : array();
	}
endif;


if ( ! function_exists( 'start_portfolio_post_taxonomies' ) ) :
	/**
	 * Return portfolio post taxonomies
	 *
	 * @param integer $post_id post id
	 * @param boolean $return return or show function content
	 * @param array $list return portfolio post taxonomies
	 */
	function start_portfolio_post_taxonomies( $post_id, $return = false ) {

		$taxonomy = 'fw-portfolio-category';
		$terms    = wp_get_post_terms( $post_id, $taxonomy );
		$list     = '';
		$checked  = false;
		foreach ( $terms as $term ) {
			if ( $term->parent == 0 ) {
				// if is checked parent category
				$list    .= $term->slug . ', ';
				$checked = true;
			} else {
				$list      .= $term->slug . ', ';
				$parent_id = $term->parent;
			}
		}

		if ( ! $checked ) {
			// if is not checked parent category extract this parent
			if ( isset( $parent_id ) ) {
				$term = get_term_by( 'id', $parent_id, $taxonomy );
				$list .= $term->slug . ', ';
			}
		}

		if ( $return ) {
			return $list;
		} else {
			echo do_shortcode( $list );
		}
	}
endif;


if ( ! function_exists( 'start_portfolio_name_taxonomies' ) ) :
	/**
	 * Get portfolio post taxonomies names
	 *
	 * @param integer $post_id post id
	 * @param boolean $return return or show function content
	 *
	 * @return string $list return portfolio post taxonomies names
	 */
	function start_portfolio_name_taxonomies( $post_id, $return = false ) {
		$taxonomy  = 'fw-portfolio-category';
		$terms     = wp_get_post_terms( $post_id, $taxonomy );
		$separator = '<span class="portfolio-categories-sep">/</span>';
		foreach ( $terms as $term ) {
			$term_link = get_term_link( $term );
			$array[]   = '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';
		}
		$list = implode( $separator, $array );

		if ( $return ) {
			return $list;
		} else {
			echo do_shortcode( $list );
		}
	}
endif;

if ( ! function_exists( 'start_portfolio_filter' ) ) :
	/**
	 * Display portfolio filter
	 *
	 * @param boolean $filter_enabled flag to check if filter is enabled or not
	 * @param string $uniqid uniq id for filter
	 */
	function start_portfolio_filter( $filter_enabled, $uniqid, $isotope = false ) {
		if ( $filter_enabled == 'yes' ) {
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

			if ( ! $term ) {
				return; // if term is false
			}

			$taxonomy        = $term->taxonomy;
			$term_id         = $term->term_id;
			$children = get_term_children( $term_id, $taxonomy );
			if ( empty( $children ) && $isotope ) {
				return; // if current term hasn't children - don't show filter
			}

			$template_slug   = $term->slug;
			$template_parent = $term->parent;
			$args            = array( 'taxonomy' => $taxonomy );
			$terms           = get_terms( $taxonomy, $args );
			$count           = count( $terms );
			$i               = 0;
			if ( $template_parent == 0 ) {
				$template_parent = $term_id;
			}

			echo '<div class="fw-portfolio-filter">
                <ul id="fw-portfolio-filter-' . esc_attr($uniqid) . '" class="portfolio_filter" data-isotope="'.(int)$isotope.'" data-list-id="fw-portfolio-list-'.$uniqid.'">';
			if ( $count > 0 ) {
				$term_list = $term_view_all = '';
				foreach ( $terms as $term ) {
					$i ++;
					if ( $template_parent != $term->parent ) {
						if ( $term->slug == $template_slug ) {
							if ( $isotope ) {
								$permalink = '#';
							} else {
								$permalink = get_term_link( $term->slug, $taxonomy );
							}

							$term_view_all .= '<li class="categories-item active" data-category="' . $template_slug . '"><a href="' . $permalink . '">' . esc_html__( 'All', 'start' ) . '</a></li>';
						} elseif ( $template_parent == $term->term_id ) {
							if ( $isotope ) {
								$permalink = '#';
							} else {
								$permalink = get_term_link( $term->slug, $taxonomy );
							}
							$term_view_all .= '<li class="categories-item" data-category="' . $term->slug . '"><a href="' . $permalink . '">' . esc_html__( 'All', 'start' ) . '</a></li>';
						}
					} elseif ( $template_parent == $term->parent ) {
						if ( $term->slug == $template_slug ) {
							if ( $isotope ) {
								$permalink = '#';
							} else {
								$permalink = get_term_link( $term->slug, $taxonomy );
							}
							$term_list .= '<li class="categories-item active" data-category="' . esc_attr( $template_slug ) . '"><a href="' . esc_url( $permalink ) . '">' . esc_html( $term->name ) . '</a></li>';
						} else {
							if ( $isotope ) {
								$permalink = '#';
							} else {
								$permalink = get_term_link( $term->slug, $taxonomy );
							}
							$term_list .= '<li class="categories-item" data-category="' . esc_attr( $term->slug ) . '"><a href="' . esc_url( $permalink ) . '">' . esc_html( $term->name ) . '</a></li>';
						}
					}
				}
				echo( $term_view_all . $term_list );
			}
			echo '</ul>
                <a class="prev" id="fw-portfolio-filter-' . esc_attr( $uniqid ) . '-prev" href="#"><i class="fa"></i></a>
                <a class="next" id="fw-portfolio-filter-' . esc_attr( $uniqid ) . '-next" href="#"><i class="fa"></i></a>
            </div>';
		}
	}
endif;