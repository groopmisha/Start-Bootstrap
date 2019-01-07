<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>
<?php
/**
 * Slider view template
 *
 */
$count          = 0;
$easy_slider_id = uniqid( 'easy-slider-' ); //slider uniq id
$interval       = $data['settings']['extra']['slides_interval']; //slides interval
$play           = 'true';
if ( $interval == '0' || $interval == '' ) {
	$play     = 'false';
	$interval = '0';
}

$args = array(
	'img_attr' => array( 'class' => 'attachment-post-thumbnail' ),
	'size'     => 'the-start-blog-full',
	'return'   => true,
	'ratio'    => 'fw-ratio-16-9'
);

$unique_class = '';
if ( isset( $data['settings']['extra']['unique_id'] ) ) {
	$unique_class = 'tf-sh-' . $data['settings']['extra']['unique_id'];
}
?>
<?php if ( isset( $data['slides'] ) ) : ?>
	<div class="fw-easy-slider <?php echo esc_attr( $unique_class ); ?>">
		<ul class="fw-easy-slider-container clearfix" id="<?php echo esc_attr( $easy_slider_id ); ?>">
			<?php foreach ( $data['slides'] as $id => $slide ): $count ++; ?>
				<?php
				$image = start_image( $slide['attachment_id'], $args ); //get slider image
				$link  = '#';
				if ( isset( $slide['extra']['link'] ) ) {
					$link = $slide['extra']['link'];
				}
				?>
				<li data-easy-slider="<?php echo esc_attr( $count ); ?>" class="fw-easy-slider-item">
					<div class="fw-block-image-parent">
						<a href="<?php echo esc_url( $link ); ?>"
						   class="fw-block-image-child fw-ratio-container fw-ratio-16-9"><?php echo do_shortcode( $image['img'] ); ?></a>
					</div>
					<?php if ( ! empty( $slide['title'] ) ) : ?>
						<a href="<?php echo esc_url( $link ); ?>"
						   class="fw-easy-slider-title"><?php echo wp_kses( $slide['title'], start_allowed_html() ); ?></a>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>

		<!-- Easy Slider Caption -->
		<div class="fw-easy-slider-caption">
			<div class="fw-easy-slider-caption-inner">
				<div class="fw-easy-slider-title-clone" id="<?php echo esc_attr( $easy_slider_id ); ?>-title"></div>

				<a class="fw-easy-slider-prev" id="<?php echo esc_attr( $easy_slider_id ); ?>-prev" href="#"><i
							class="fw-easy-slider-icon-left"></i></a>
				<a class="fw-easy-slider-next" id="<?php echo esc_attr( $easy_slider_id ); ?>-next" href="#"><i
							class="fw-easy-slider-icon-right"></i></a>
			</div>
		</div>

		<!-- Easy Slider Control -->
		<div class="fw-easy-slider-pagination" id="<?php echo esc_attr( $easy_slider_id ); ?>-controls"></div>

		<!-- Easy Slider Progressbar -->
		<div class="fw-easy-slider-progress">
			<div class="fw-easy-slider-timer" id="<?php echo esc_attr( $easy_slider_id ); ?>-timer"></div>
		</div>
	</div>
	<script>
        //slider js
        jQuery(document).ready(function ($) {

            var easySlider = $('#<?php echo esc_attr( $easy_slider_id ); ?>');
            var easySliderWrap = '.fw-easy-slider';

            function slideTitle(item) {
                var title = item.children(".fw-easy-slider-title").clone();
                $('#<?php echo esc_js( $easy_slider_id ); ?>-title ').html(title);
            }

            easySlider.carouFredSel({
                swipe: {
                    onTouch: true
                },
                next: "#<?php echo esc_js( $easy_slider_id ); ?>-next",
                prev: "#<?php echo esc_js( $easy_slider_id ); ?>-prev",
                pagination: "#<?php echo esc_js( $easy_slider_id ); ?>-controls",
                infinite: true,
                responsive: true,
                width: '100%',
                height: 'variable',
                items: {
                    visible: 1,
                    height: 'variable'
                },
                auto: {
                    play: <?php echo esc_js( $play ); ?>,
                    timeoutDuration: <?php echo esc_js( $interval ); ?>,
                    pauseOnHover: false,
                    progress: {
                        bar: '#<?php echo esc_js( $easy_slider_id ); ?>-timer',
                        interval: 1
                    }
                },
                scroll: {
                    items: 1,
                    fx: "crossfade",
                    onBefore: function (data) {
                        slideTitle(data.items.visible);
                    }
                },
                onCreate: function (data) {
                    $(this).parents(easySliderWrap).removeClass("hide-elements");
                    slideTitle(data.items);
                }
            });
        });
	</script>
<?php endif; ?>