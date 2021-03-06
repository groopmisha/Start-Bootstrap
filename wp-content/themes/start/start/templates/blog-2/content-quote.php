<?php
/**
 * The template for displaying posts in the Quote post format
 */
?>
<?php $permalink = esc_url( get_permalink() ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( "post clearfix post-list-type-2" ); ?> itemscope="itemscope"
		 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php start_entry_top(); ?>

	<header class="entry-header">
		<span class="post-format"><a class="entry-format"
									 href="<?php echo esc_url( get_post_format_link( 'quote' ) ); ?>"><?php echo esc_html( get_post_format_string( 'quote' ) ); ?></a></span>
		<h2 class="entry-title" itemprop="headline"><a
					href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a></h2>
	</header>

	<div class="entry-content clearfix" itemprop="text">
		<?php start_entry_content_before(); ?>
		<?php the_content( '' ); ?>
		<?php start_entry_content_after(); ?>
	</div>

	<footer class="entry-meta clearfix">
		<?php start_post_meta_blog_2( $post->ID, 'post' ); ?>
	</footer>

	<?php start_entry_bottom(); ?>
</article>