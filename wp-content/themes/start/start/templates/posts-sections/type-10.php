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
	<div class="latest-posts lp-type10  clearfix">
		<div class="lp-content clearfix owl-loaded owl-carousel owl-theme">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="lp-item">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail(); ?>

						<div class="lp-all-content-wrap">
							<div class="fw-itable">
								<div class="fw-icell">
									<div class="lp-item-content">
										<?php if ( isset( $category->name ) ) : ?>
											<div class="lp-category-name-wrap">
												<h2 class="lp-category-name"><?php echo wp_kses( $category->name, the_journal_allowed_html() ); ?></h2>
											</div>
										<?php endif; ?>
										<h4 class="lp-title"><a
													href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<div class="lp-meta"><?php the_journal_posted_on(); ?></div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php
	wp_enqueue_script(
		'owl.carousel',
		get_template_directory_uri() . '/js/owl.carousel.js',
		array(),
		'1.0',
		true
	);
	?>
<?php else :
	get_template_part( 'content', 'none' );
endif;