<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */

$permalink    = esc_url( get_permalink() );
$post_options = the_journal_listing_post_options( $post->ID );//get post options
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( "post clearfix post-list-type-1" ); ?> itemscope="itemscope"
		 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php the_journal_entry_top(); ?>

	<?php if ( $post_options['image'] ) : ?>
		<div class="fw-post-image fw-block-image-parent">
			<a href="<?php echo esc_url( $permalink ); ?>"
			   class="post-thumbnail fw-block-image-child <?php echo esc_attr( $post_options['ratio_class'] ); ?>">
				<?php echo do_shortcode( $post_options['image']['img'] ); ?>
				<div class="fw-block-image-overlay">
					<div class="fw-itable">
						<div class="fw-icell">
							<i class="fw-icon-link"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_journal_post_meta( $post->ID, 'post' );//show post meta ?>
		<h2 class="entry-title" itemprop="headline">
			<?php if ( is_sticky() ) : ?>
				<i class="sticky-icon"></i>
			<?php endif; ?>
			<a href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a>
		</h2>
	</header>

	<div class="entry-content clearfix" itemprop="text">
		<?php the_journal_entry_content_before(); ?>
		<?php the_excerpt(); ?>

		<footer class="entry-meta clearfix">
			<a href="<?php echo esc_url( $permalink ); ?>" class="fw-btn-post-read-more-blog fw-btn fw-btn-1 fw-btn-md">
	                <span><?php echo esc_html__( 'Read More', 'the-journal' ); ?>
	                </span>
			</a>
			<?php the_journal_get_blog_comments_number( $permalink );//show post comments number ?>
		</footer>
		<?php the_journal_entry_content_after(); ?>
	</div>

	<?php the_journal_entry_bottom(); ?>
</article>