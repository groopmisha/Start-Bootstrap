<?php
$posts_section_atts = get_query_var( 'posts_section_atts' );
$query              = new WP_Query( array(
	'post_type'      => 'post',
	'cat'            => $posts_section_atts['category'],
	'posts_per_page' => $posts_section_atts['posts_per_page'],
) );

if ( $query->have_posts() ) :
	$category = get_category( $posts_section_atts['category'] );
	$count          = 0;
	?>
	<div class="latest-posts lp-type5 clearfix">
		<?php if ( isset( $category->name ) ) : ?>
			<div class="col-md-12">
				<div class="lp-category-name-wrap">
					<h2 class="lp-category-name"><?php echo wp_kses( $category->name, the_journal_allowed_html() ); ?></h2>
				</div>
			</div>
		<?php endif; ?>
		<div class="lp-content clearfix">
			<?php while ( $query->have_posts() ) : $query->the_post();
				++ $count; ?>
				<div class="col-md-12 clearfix">
					<div class="lp-item">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="lp-thumb">
								<?php the_post_thumbnail(); ?>
							</a>
						<?php endif; ?>
						<div class="lp-item-content">
							<h4 class="lp-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h4>
							<div class="lp-meta">
								<?php the_journal_posted_on(); ?>
								<a href="<?php the_permalink(); ?>#comments"
								   class="lp-comments-link"><span><?php echo wp_kses( get_comments_number(), the_journal_allowed_html() ); ?></span></a>
							</div>
							<div class="lp-text">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php else :
	get_template_part( 'content', 'none' );
endif;