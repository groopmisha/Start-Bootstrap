<?php
$posts_section_atts = get_query_var( 'posts_section_atts' );
$query              = new WP_Query( array(
	'post_type'      => 'post',
	'cat'            => $posts_section_atts['category'],
	'posts_per_page' => $posts_section_atts['posts_per_page'],
) );

if ( $query->have_posts() ) :
	$category = get_category( $posts_section_atts['category'] );
	?>
	<div class="latest-posts lp-type8 clearfix">
		<?php if ( isset( $category->name ) ) : ?>
			<div class="col-md-12">
				<div class="lp-category-name-wrap">
					<h2 class="lp-category-name"><?php echo wp_kses( $category->name, the_journal_allowed_html() ); ?></h2>
				</div>
			</div>
		<?php endif; ?>
		<div class="lp-content clearfix">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="lp-item">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="lp-all-content-wrap">
								<?php the_post_thumbnail(); ?>

								<div class="lp-item-content">
									<div class="fw-itable">
										<div class="fw-icell">
											<h4 class="lp-title"><?php the_title(); ?></h4>
											<div class="lp-text">
												<?php the_excerpt(); ?>
											</div>
										</div>
									</div>
								</div>
							</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php else :
	get_template_part( 'content', 'none' );
endif;