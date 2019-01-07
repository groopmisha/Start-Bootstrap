<?php
/**
 * The template for displaying posts in the Link post format
 */
?>
<?php $permalink = esc_url( get_permalink() ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( "post clearfix" ); ?> itemscope="itemscope"
		 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php the_journal_entry_top(); ?>

	<header class="entry-header">
		<span class="post-format"><a class="entry-format"
									 href="<?php echo esc_url( get_post_format_link( 'link' ) ); ?>"><?php echo esc_html( get_post_format_string( 'link' ) ); ?></a></span>
		<?php the_journal_post_meta( $post->ID, 'post' );//show post meta ?>
		<h2 class="entry-title" itemprop="headline"><a
					href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a></h2>
	</header>

	<div class="entry-content clearfix" itemprop="text">
		<?php the_journal_entry_content_before(); ?>
		<?php the_content( '' ); ?>
		<footer class="entry-meta clearfix">
			<a href="<?php echo esc_url( $permalink ); ?>" class="fw-btn-post-read-more-blog fw-btn fw-btn-1 fw-btn-md">
	                <span>
	                    <?php echo esc_html__( 'Read More', 'the-journal' ); ?>
	                </span>
			</a>
		</footer>
		<?php the_journal_entry_content_after(); ?>
	</div>

	<?php the_journal_entry_bottom(); ?>
</article>