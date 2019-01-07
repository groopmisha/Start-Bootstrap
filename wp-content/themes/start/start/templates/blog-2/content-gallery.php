<?php
/**
 * The template for displaying posts in the Gallery post format
 */
?>
<?php $permalink = esc_url( get_permalink() ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( "post clearfix post-list-type-2" ); ?> itemscope="itemscope"
		 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php the_journal_entry_top(); ?>

	<header class="entry-header">
		<span class="post-format"><a class="entry-format"
									 href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>"><?php echo esc_html( get_post_format_string( 'gallery' ) ); ?></a></span>
		<h2 class="entry-title" itemprop="headline"><a
					href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a></h2>
	</header>

	<div class="entry-content clearfix" itemprop="text">
		<?php the_journal_entry_content_before(); ?>
		<?php the_content( '' ); ?>
		<?php the_journal_entry_content_after(); ?>
	</div>

	<footer class="entry-meta clearfix">
		<?php the_journal_post_meta_blog_2( $post->ID, 'post' ); ?>
	</footer>

	<?php the_journal_entry_bottom(); ?>
</article>