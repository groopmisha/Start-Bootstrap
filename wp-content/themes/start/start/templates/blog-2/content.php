<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */

$permalink    = esc_url( get_permalink() );
$post_options = the_journal_listing_post_options( $post->ID );//get post options
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( "post clearfix post-list-type-2" ); ?> itemscope="itemscope"
		 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php the_journal_entry_top(); ?>

	<header class="entry-header">
		<h2 class="entry-title" itemprop="headline">
			<?php if ( is_sticky() ) : ?>
				<i class="sticky-icon"></i>
			<?php endif; ?>
			<a href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a>
		</h2>
	</header>

	<div class="fw-post-image fw-block-image-parent">
		<?php the_journal_get_blog_comments_number( $permalink );//show post comments number ?>
		<?php if ( $post_options['image'] ) : ?>
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
		<?php endif; ?>
	</div>

	<div class="entry-content clearfix" itemprop="text">
		<?php the_journal_entry_content_before(); ?>
		<?php the_excerpt(); ?>
		<?php the_journal_entry_content_after(); ?>
	</div>

	<footer class="entry-meta clearfix">
		<?php the_journal_post_meta_blog_2( $post->ID, 'post' );//show post meta ?>
	</footer>

	<?php the_journal_entry_bottom(); ?>
</article>