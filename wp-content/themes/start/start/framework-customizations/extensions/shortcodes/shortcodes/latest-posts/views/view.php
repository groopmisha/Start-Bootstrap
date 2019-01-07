<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

$term_id = (int) $atts['category'];

$posts_per_page = (int) $atts['posts_number'];
if ( $posts_per_page == 0 ) {
	$posts_per_page = get_option( 'posts_per_page' );
}

if ( $term_id == 0 ) {
	$args = array(
		'posts_per_page' => $posts_per_page,
		'post_type'      => 'post',
		'orderby'        => 'date'
	);
} else {
	$args = array(
		'posts_per_page' => $posts_per_page,
		'post_type'      => 'post',
		'orderby'        => 'date',
		'tax_query'      => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'id',
				'terms'    => $term_id
			)
		)
	);
}

$query = new WP_Query( $args );

$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : null;

$blog_view = '';
if ( $atts['blog_type']['selected'] == 'blog-2' ) {
	$blog_view = 'grid';
	wp_enqueue_script( 'masonry' );
}

$start_blog_wrap = start_get_blog_wrap( $atts['blog_type']['selected'], $sidebar_position );

// for desktop
if ( isset( $atts['responsive']['desktop_display']['selected'] ) && $atts['responsive']['desktop_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-desktop-hide-element';
}

// for tablet landscape
if ( isset( $atts['responsive']['tablet_landscape_display']['selected'] ) && $atts['responsive']['tablet_landscape_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-landscape-hide-element';
}

// for tablet portrait
if ( isset( $atts['responsive']['tablet_display']['selected'] ) && $atts['responsive']['tablet_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-hide-element';
}

// for display on smartphone
if ( isset( $atts['responsive']['smartphone_display']['selected'] ) && $atts['responsive']['smartphone_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-mobile-hide-element';
}
?>
<div class="fw-shortcode-latest-posts postlist <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( start_get_blog_view( $blog_view, 'class', $sidebar_position ) ); ?>" <?php echo wp_kses( start_get_blog_view( $blog_view, 'id', $sidebar_position ), start_allowed_html() ); ?>>
	<?php if ( $query->have_posts() ) :
		// Start the Loop.
		while ( $query->have_posts() ) : $query->the_post();
			echo wp_kses( $start_blog_wrap['start'], array( 'div' => array( 'class' => array() ) ) );
			get_template_part( 'templates/' . $atts['blog_type']['selected'] . '/content', get_post_format() );
			echo wp_kses( $start_blog_wrap['end'], array( 'div' => array( 'class' => array() ) ) );
		endwhile;
	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );
	endif; ?>
</div>
<?php wp_reset_postdata();