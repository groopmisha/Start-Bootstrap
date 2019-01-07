<?php
get_header();
start_header_image();//get header image
$thumbnails = fw_ext_portfolio_get_gallery_images();//get portfolio gallery
?>
	<section class="fw-main-row">
		<div class="fw-container">
			<?php start_content_before(); ?>

			<div class="fw-row">
				<!--Content Area-->
				<div class="fw-col-sm-12">
					<div class="fw-col-inner">
						<?php start_content_top(); ?>

						<?php if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
							fw_ext_breadcrumbs();
						} ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="fw-portfolio-title">
								<h4 class="entry-title"><?php echo get_the_title(); ?></h4>
							</div>
							<?php start_entry_content_before(); ?>
							<?php the_content(); ?>
							<?php start_entry_content_after(); ?>
						<?php endwhile; ?>

						<?php start_content_bottom(); ?>
					</div>
				</div><!-- /content area -->
			</div><!-- /.fw-row -->
			<?php if ( ! empty( $thumbnails ) ) : //show portfolio gallery images ?>
				<div class="fw-divider-line fw-line-solid space-lg"></div>
				<div class="fw-row">
					<div class="fw-col-sm-12">
						<div class="fw-col-inner">
							<div class="fw-project-details" id="fw-project-details">
								<ul class="fw-project-list">
									<?php foreach ( $thumbnails as $thumbnail ): ?>
										<?php
										$args  = array(
											'img_attr' => array( 'class' => 'attachment-post-thumbnail' ),
											'size'     => 'the-start-portfolio-landscape-x2',
											'return'   => true,
											'ratio'    => 'fw-ratio-16-9'
										);
										$image = start_image( $thumbnail, $args );
										?>
										<li class="fw-project-list-item">
											<div class="fw-block-image-parent fw-block-image-frame">
												<a class="fw-block-image-child fw-ratio-container fw-ratio-16-9"
												   href="<?php echo esc_url( $thumbnail['url'] ); ?>"
												   data-rel="prettyPhoto[<?php echo esc_attr( $post->ID ); ?>]">
													<?php echo do_shortcode( $image['img'] ); ?>
													<div class="fw-block-image-overlay">
														<div class="fw-itable">
															<div class="fw-icell">
																<i class="fw-icon-zoom"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							</div><!--project-details-->
						</div><!--fw-col-inner-->
					</div><!--fw-col-sm-12-->
				</div><!--/.fw-row-->
			<?php endif; ?>

			<?php start_content_after(); ?>
		</div><!-- /.fw-container -->
	</section>
<?php get_footer(); ?>