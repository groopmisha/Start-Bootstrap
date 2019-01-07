<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

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
<blockquote class="fw-quote <?php echo esc_attr( $atts['text_align'] ); ?> <?php echo esc_attr( $atts['class'] ); ?>">
	<span class="fw-symbols-quote">"</span>

	<div class="fw-quote-text">
		<?php echo do_shortcode( wpautop( $atts['text'] ) ); ?>
	</div>
	<?php if ( $atts['author'] != '' ) : ?>
		<small class="fw-quote-author">
			<span>
				<?php if ( $atts['author_link'] != '' ) :
					$a_class = '';
					if ( strpos( $atts['author_link'], "#" ) !== false && strlen( $atts['author_link'] ) > 1 ) {
						$a_class = 'anchor';
					}
					?>
					<a class="scroll-to <?php echo esc_attr( $a_class ); ?>"
					   href="<?php echo esc_url( $atts['author_link'] ); ?>"><?php echo wp_kses( start_translate( esc_attr( $atts['author'] ) ), start_allowed_html() ); ?></a>
				<?php else : ?>
					<span><?php echo wp_kses( start_translate( esc_attr( $atts['author'] ) ), start_allowed_html() ); ?></span>
				<?php endif; ?>
			</span>
		</small>
	<?php endif; ?>

</blockquote>