<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$loop_data = get_query_var( 'fw_portfolio_loop_data' );
$permalink = esc_url( get_permalink() );

$args  = array(
	'img_attr' => array( 'class' => 'attachment-post-thumbnail' ),
	'size'     => 'the-start-portfolio-landscape-x2',
	'return'   => true,
	'ratio'    => 'fw-ratio-16-9'
);
$image = start_image( get_post_thumbnail_id(), $args ); //get post image
?>
<li data-category="<?php start_portfolio_post_taxonomies( $post->ID ); ?>">
	<?php start_entry_top(); ?>

	<div class="fw-block-image-parent fw-portfolio-image">
		<a class="fw-block-image-child fw-ratio-container fw-ratio-16-9" href="<?php echo esc_url( $permalink ); ?>">
			<?php if ( isset( $image['img'] ) ) {
				echo do_shortcode( $image['img'] );
			} ?>
			<div class="fw-block-image-overlay">
				<div class="fw-itable">
					<div class="fw-icell">
						<div class="fw-overlay-title">
							<?php the_title(); ?>
						</div>
						<div class="fw-overlay-description">
							<?php start_entry_content_before(); ?>
							<?php the_excerpt(); ?>
							<?php start_entry_content_after(); ?>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>

	<?php start_entry_bottom(); ?>
</li>