<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( ! fw_ext( 'portfolio' ) ) {
	// if portfolio extensions is disabled return
	return;
}

$term_id                = $atts['category'];
$uniqid                 = uniqid();
$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );

$loop_data = array(
	'settings'        => $ext_portfolio_instance->get_settings(),
	'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
	'listing_classes' => '',
	'term_id'         => $term_id,
);

$posts_per_page = (int) $atts['posts_per_page'];
if ( $posts_per_page == 0 ) {
	$posts_per_page = - 1;
}

$tax_query = array();
if ( $term_id != '0' ) {
	$tax_query = array(
		array(
			'taxonomy' => $loop_data['settings']['taxonomy_name'],
			'field'    => 'id',
			'terms'    => $term_id
		)
	);
}
$args  = array(
	'posts_per_page' => $posts_per_page,
	'post_type'      => $loop_data['settings']['post_type'],
	'tax_query'      => $tax_query
);
$query = new WP_Query( $args );

$term = get_term( $term_id, $loop_data['settings']['taxonomy_name'] );
$slug = isset( $term->slug ) ? $term->slug : '';
// set special query for loop data
set_query_var( 'fw_portfolio_loop_data', $loop_data );
set_query_var( 'term', $slug );
set_query_var( 'taxonomy', $loop_data['settings']['taxonomy_name'] );

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
	<div class="fw-col-inner">
		<div class="tf-sh-<?php echo esc_attr( $atts['unique_id'] ); ?> fw-portfolio fw-portfolio-1 fw-portfolio-cols-3 <?php echo esc_attr( $atts['class'] ); ?>">
			<?php start_portfolio_filter( 'yes', $uniqid, true ); ?>
			<?php if ( $query->have_posts() ) : ?>
				<div class="row fw-portfolio-wrapper">
					<ul id="fw-portfolio-list-<?php echo esc_attr( $uniqid ); ?>" class="fw-portfolio-list clearfix">
						<?php
						while ( $query->have_posts() ) : $query->the_post();
							get_template_part( 'framework-customizations/extensions/portfolio/views/loop-style1' );
						endwhile;
						?>
					</ul>
				</div>
			<?php else :
				get_template_part( 'content', 'none' );
			endif;
			?>
		</div><!-- /.fw-portfolio -->
	</div>
<?php wp_reset_postdata();