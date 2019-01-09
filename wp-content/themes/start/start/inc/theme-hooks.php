<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

//START BOOTSTRAP HOOKS

if ( ! function_exists( 'start_logo1' ) ):
	/**
	 * Display theme logo
	 *
	 * @param bool $wrap - flag to check if logo must be wrapped
	 */
	function start_logo1( $wrap = false ) {
		$logo_settings['logo']['selected_value']   = 'image';
		$logo_settings['logo']['text']['title']    = get_bloginfo( 'name' );
		$logo_settings['logo']['text']['subtitle'] = '';
		//get logo settings from customizer
		if ( defined( 'FW' ) ) {
			$logo_settings = fw_get_db_customizer_option( 'logo_settings' );
		}
		?>
		<!-- <div class="wrap-logo"> -->
			<?php if ( $wrap ): ?>
			<!-- <div class="container"> -->
				<?php endif; ?>

				<!--If logo is a image-->
				<?php if ( $logo_settings['logo']['selected_value'] == 'image' ) :
					$image_logo = isset( $logo_settings['logo']['image']['image_logo'] ) ? $logo_settings['logo']['image']['image_logo'] : array();
					if ( empty( $image_logo ) ) {
						$image_logo['url'] = get_template_directory_uri() . '/assets/img/unyson/logo.png';
					}
					if ( ! empty( $image_logo ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fw-site-logo">
							<img src="<?php echo esc_url( $image_logo['url'] ); ?>" alt="site logo"/>
						</a>
					<?php endif;
				//If logo is a title
				else :
					if ( $logo_settings['logo']['text']['title'] != '' ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand page-scroll">
							
              <?php echo esc_html( $logo_settings['logo']['text']['title'] ); ?>
							
							<?php if ( $logo_settings['logo']['text']['subtitle'] != '' ) : ?>
								<span class="site-description"
									itemprop="description"><?php echo esc_html( $logo_settings['logo']['text']['subtitle'] ); ?>
								</span>
							<?php endif; ?>
						</a>
					<?php endif;
				endif; ?>

				<?php if ( $wrap ): ?>
			<!-- </div> -->
		<?php endif; ?>
		<!-- </div> -->
	<?php }
endif;


if ( ! function_exists( 'start_footer2' ) ) :
	/**
	 * Display start theme footer
	 */
	function start_footer2() {
		//get footer settings
		$footer_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'footer_settings' ) : array();
		//check if is enabled footer widgets
		$show_footer_widgets = isset( $footer_settings['show_footer_widgets']['selected_value'] ) ? $footer_settings['show_footer_widgets']['selected_value'] : 'yes';
		//get footer copyright position
		$copyright_position = isset( $footer_settings['copyright_position'] ) ? $footer_settings['copyright_position'] : 'fw-copyright-center';
		//check if footer socials are enabled
		$footer_socials = isset( $footer_settings['footer_socials']['selected_value'] ) ? $footer_settings['footer_socials']['selected_value'] : 'no';
		//get footer copyright
		$website_url = 'https://themefuse.com/';
		$title   = isset( $footer_settings['title'] ) ? $footer_settings['title'] : '';
		$text   = isset( $footer_settings['text'] ) ? $footer_settings['text'] : 'Some text';
		$copyright   = isset( $footer_settings['copyright'] ) ? $footer_settings['copyright'] : 'Copyright &copy;2017 <a href="' . $website_url . '" rel="follow">ThemeFuse</a>. All Rights Reserved';
		$phone   = isset( $footer_settings['phone'] ) ? $footer_settings['phone'] : '123-456-6789';
		$email   = isset( $footer_settings['email'] ) ? $footer_settings['email'] : 'feedback@startbootstrap.com';
		?>
		<!--show footer widgets template-->
		<?php if ( $show_footer_widgets == 'yes' ) :
			get_template_part( 'templates/footers/footer-widgets' );
		endif; ?>

		<!--show footer copyright and socials-->
		<section id="contact" <?php echo esc_attr( $copyright_position ); ?>">

			<div class="container">

				<?php if ( $footer_socials == 'yes' ) {
					echo wp_kses( start_get_socials( 'fw-footer-social' ), start_allowed_html() );
				} ?>

				<div class="row">

					<div class="col-lg-8 col-lg-offset-2 text-center">
						<h2 class="section-heading"><?php echo do_shortcode( $title ); ?></h2>
						<hr class="primary">
						<p><?php echo do_shortcode( $text ); ?></p>
					</div>

					<div class="col-lg-4 col-lg-offset-2 text-center">
					  <i class="fa fa-phone fa-3x sr-contact"></i>
						<p><?php echo do_shortcode( $phone ); ?></p>
					</div>

					<div class="col-lg-4 text-center">
						<i class="fa fa-envelope-o fa-3x sr-contact"></i>
						<p><a href="mailto:<?php echo do_shortcode( $email );?>"><?php echo do_shortcode( $email ); ?></a></p>
					</div>

				</div>

			</div>

		</section>
	<?php }
endif;









