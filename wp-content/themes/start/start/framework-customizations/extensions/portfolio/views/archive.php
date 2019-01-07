<?php
get_header();
global $wp_query;
$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
$ext_portfolio_settings = $ext_portfolio_instance->get_settings(); //get portfolio extensions settings

$taxonomy   = $ext_portfolio_settings['taxonomy_name'];
$term       = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
$term_id    = ( ! empty( $term->term_id ) ) ? $term->term_id : 0;
$categories = fw_ext_portfolio_get_listing_categories( $term_id, $taxonomy );

$settings        = $ext_portfolio_instance->get_settings();
$listing_classes = 'fw-portfolio-item'; //fw_ext_portfolio_get_sort_classes( $wp_query->posts, array($term), $categories );
$loop_data       = array(
	'settings'        => $settings,
	'categories'      => $categories,
	'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
	'listing_classes' => $listing_classes,
);
set_query_var( 'fw_portfolio_loop_data', $loop_data );

$uniqid = uniqid();
//check if filter is enabled
$filter_enabled = fw_get_db_customizer_option( 'enable_portfolio_filter', 'yes' );

//portfolio columns number
$colums_number    = 'fw-portfolio-cols-3';
$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';
if ( $sidebar_position == 'left' || $sidebar_position == 'right' ) {
	$colums_number = 'fw-portfolio-cols-2';
}

start_header_image(); //get header image
?>
	<section class="fw-main-row <?php start_get_content_class( 'main', $sidebar_position ); ?>">
		<div class="fw-container">
			<div class="fw-row">
				<?php start_content_before(); ?>

				<div class="fw-content-area <?php start_get_content_class( 'content', $sidebar_position ); ?>">
					<div class="fw-col-inner">
						<?php start_content_top(); ?>

						<?php if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
							fw_ext_breadcrumbs();
						} ?>
						<div class="fw-portfolio fw-portfolio-1 <?php echo esc_attr( $colums_number ); ?> fw-portfolio-content-position-middle fw-portfolio-content-align-center  fw-portfolio-landscape">

							<?php start_portfolio_filter( $filter_enabled, $uniqid ); //display portfolio filter ?>

							<?php if ( have_posts() ) : ?>
								<?php start_content_while_before(); ?>
								<div class="fw-row fw-portfolio-wrapper">
									<ul id="fw-portfolio-list-<?php echo esc_attr( $uniqid ); ?>"
										class="fw-portfolio-list clearfix">
										<?php
										while ( have_posts() ) : the_post();
											start_entry_before();
											get_template_part( 'framework-customizations/extensions' . $ext_portfolio_instance->get_rel_path() . '/views/loop', 'style1' );
											start_entry_after();
										endwhile;
										?>
									</ul>
								</div><!-- /.fw-portfolio-wrapper-->
								<?php start_content_while_after(); ?>
							<?php else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );
							endif;
							?>
						</div><!-- /.fw-portfolio -->
						<div class="fw-portfolio-navigation">
							<?php the_posts_pagination(
								array(
									'mid_size'  => 2,
									'prev_text' => '<i class="fa fa-angle-left"></i><strong>' . esc_html__( 'Newer', 'start' ) . '</strong>',
									'next_text' => '<strong>' . esc_html__( 'Older', 'start' ) . '</strong><i class="fa fa-angle-right"></i>',
								)
							); ?>
						</div>

						<?php start_content_bottom(); ?>
					</div><!-- /.fw-container -->
				</div><!-- /.fw-col-sm-12 -->

				<?php start_content_after(); ?>

				<?php get_sidebar(); ?>
			</div><!-- /.fw-row -->
		</div><!-- /.fw-container -->
	</section>
<?php
//free memory
unset( $ext_portfolio_instance );
unset( $ext_portfolio_settings );
set_query_var( 'fw_portfolio_loop_data', '' );
get_footer();