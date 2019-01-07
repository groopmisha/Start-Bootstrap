<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id                                       = uniqid( 'testimonials-' );
$play                                     = 'true';
$h_title                                  = 'h3';
$atts['show_in_slider']['selected_value'] = 'yes';

// for desktop
if ( isset( $atts['responsive']['desktop_display']['selected'] ) && $atts['responsive']['desktop_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-desktop-hide-element';
}

// for tablet landscape
if ( isset( $atts['responsive']['tablet_landscape_display']['selected'] ) && $atts['responsive']['tablet_landscape_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-landscape-hide-element';
}

// for tablet portrait
if ( isset( $atts['responsive']['tablet_display']['selected'] ) && $atts['responsive']['tablet_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-hide-element';
}

// for display on smartphone
if ( isset( $atts['responsive']['smartphone_display']['selected'] ) && $atts['responsive']['smartphone_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-mobile-hide-element';
}
?>
	<div class="fw-testimonials fw-testimonials-1 <?php echo esc_attr( $atts['class'] ); ?>">
		<?php if ( $atts['title'] != '' ) : ?>
		<<?php echo esc_attr( $h_title ); ?>
		class="fw-testimonials-title"><?php echo wp_kses( start_translate( esc_attr( $atts['title'] ) ), start_allowed_html() ); ?></<?php echo esc_attr( $h_title ); ?>>
<?php endif; ?>

	<div class="fw-testimonials-list" id="<?php echo esc_attr( $id ); ?>">
		<?php $counter = 1;
		foreach ( $atts['testimonials'] as $testimonial ) : $counter ++; ?>
			<div class="fw-testimonials-item clearfix">
				<div class="fw-testimonials-text">
					<?php echo do_shortcode( start_translate( esc_textarea( $testimonial['content'] ) ) ); ?>
				</div>
				<div class="fw-testimonials-meta">
					<?php if ( ! empty( $testimonial['author_avatar'] ) ) :
						$testimonial['author_avatar'] = wp_get_attachment_image_src( $testimonial['author_avatar']['attachment_id'], 'thumbnail' );
						$testimonial['author_avatar'] = $testimonial['author_avatar'][0];
						?>
						<div class="fw-testimonials-avatar">
							<img src="<?php echo esc_url( $testimonial['author_avatar'] ); ?>"
								 alt="<?php echo esc_attr( start_translate( $testimonial['author_name'] ) ); ?>"/>
						</div>
					<?php endif; ?>

					<div class="fw-testimonials-author">
						<span class="author-name"><?php echo wp_kses( start_translate( esc_attr( $testimonial['author_name'] ) ), start_allowed_html() ); ?></span>
						<?php if ( $testimonial['author_job'] != '' ) : ?>
							<em class="author-job"><?php echo wp_kses( start_translate( esc_attr( $testimonial['author_job'] ) ), start_allowed_html() ); ?></em>
						<?php endif; ?>
						<?php if ( $testimonial['site_name'] != '' ) : ?>
							<span class="fw-testimonials-url">
								<a target="_blank"
								   href="<?php echo esc_url( $testimonial['site_url'] ); ?>"><?php echo esc_attr( $testimonial['site_name'] ); ?></a>
							</span>
						<?php endif; ?>
					</div>

				</div>
			</div>
		<?php endforeach ?>
	</div>

<?php if ( $atts['show_in_slider']['selected_value'] == 'yes' ) : ?>
	<div class="fw-testimonials-arrows">
		<a class="prev" id="<?php echo esc_attr( $id ); ?>-prev" href="#"><i class="fa"></i></a>
		<a class="next" id="<?php echo esc_attr( $id ); ?>-next" href="#"><i class="fa"></i></a>
	</div>
<?php endif; ?>

	<div class="fw-testimonials-pagination" id="<?php echo esc_attr( $id ); ?>-controls"></div>
	</div>
<?php if ( $atts['show_in_slider']['selected_value'] == 'yes' ) : ?>
	<script>
        jQuery(document).ready(function () {
            function testimonialsInit() {
                jQuery('#<?php echo esc_js( $id ) ?>').carouFredSel({
                    swipe: {
                        onTouch: true
                    },
                    next: "#<?php echo esc_js( $id ); ?>-next",
                    prev: "#<?php echo esc_js( $id ); ?>-prev",
                    pagination: "#<?php echo esc_js( $id ); ?>-controls",
                    responsive: true,
                    infinite: false,
                    items: 1,
                    auto: {
                        play: <?php echo esc_js( $play ); ?>,
                        timeoutDuration: 5000
                    },
                    scroll: {
                        items: 1,
                        fx: "fade",
                        easing: "linear",
                        pauseOnHover: true,
                        duration: 300
                    },
                    onCreate: function () {
                        $(this).parents(".fw-testimonials").removeClass("hide-slider");
                    }
                });
            }

            testimonialsInit();
            jQuery(window).resize(testimonialsInit);
        });
	</script>
<?php endif;