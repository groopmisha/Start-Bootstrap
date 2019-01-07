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