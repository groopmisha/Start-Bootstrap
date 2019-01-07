<?php
$header_settings       = defined( 'FW' ) ? fw_get_db_customizer_option( 'header_settings' ) : array();
$enable_header_top_bar = isset( $header_settings['enable_header_top_bar']['selected_value'] ) ? $header_settings['enable_header_top_bar']['selected_value'] : 'no';
$top_bar_text          = isset( $header_settings['enable_header_top_bar']['yes']['header_text'] ) ? $header_settings['enable_header_top_bar']['yes']['header_text'] : '';
$enable_header_socials = isset( $header_settings['enable_header_top_bar']['yes']['enable_header_socials']['selected_value'] ) ? $header_settings['enable_header_top_bar']['yes']['enable_header_socials']['selected_value'] : 'yes';
$enable_search         = isset( $header_settings['enable_search']['selected_value'] ) ? $header_settings['enable_search']['selected_value'] : 'no';
$search_type           = isset( $header_settings['enable_search']['yes']['search_type']['selected'] ) ? $header_settings['enable_search']['yes']['search_type']['selected'] : '';
$search_position       = isset( $header_settings['enable_search']['yes']['search_position'] ) ? $header_settings['enable_search']['yes']['search_position'] : 'top_bar';
$placeholder_text      = isset( $header_settings['enable_search']['yes']['search_type'][ $search_type ]['search_advanced_styling']['placeholder_text'] ) ? $header_settings['enable_search']['yes']['search_type'][ $search_type ]['search_advanced_styling']['placeholder_text'] : '';
?>

	<header class="fw-header creative-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">

		<?php start_header_top(); ?>

		<?php if ( $enable_header_top_bar == 'yes' ) {
			start_top_bar( array( 
				'top_bar_text'          => $top_bar_text,
				'enable_header_socials' => $enable_header_socials,
				'enable_search'         => $enable_search,
				'search_type'           => $search_type,
				'placeholder_text'      => $placeholder_text,
				'search_position'       => $search_position
			) );
		} ?>

		
    <!-- #site-navigation -->
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"
				role="navigation">

			<div class="container-fluid">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span> <?php esc_html_e( 'Menu', 'start' ); ?> <i class="fa fa-bars"></i>
					</button>

					<?php start_logo1( true ); ?>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php start_nav_menu( 'header-menu' ); ?>

        
				<?php if ( $enable_search == 'yes' && $search_position == 'menu_bar' ) : ?>
					<div class="fw-search <?php echo esc_attr( $search_type ); ?>">
						<?php if ( $search_type == 'fw-input-search' ) : ?>
							<div class="fw-wrap-search-form">
								<?php get_template_part( 'searchform' ); ?>
							</div>
						<?php endif; ?>
						<a href="#" class="fw-search-icon"><i class="fa fa-search"></i></a>
					</div>
				<?php endif; ?>

			</div>

		</nav><!-- #site-navigation -->
		
		<!-- Search block -->
		<?php if ( $enable_search == 'yes' && $search_type == 'fw-mini-search' ) : ?>
			<div class="fw-wrap-search-form fw-form-search-full">
				<?php get_template_part( 'searchform' ); ?>
			</div>
		<?php endif; ?>

		<div class="header-content">
			<div class="header-content-inner">
					<h1 id="homeHeading">Your Favorite Source of Free Bootstrap Themes</h1>
					<hr>
					<p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
					<a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
			</div>
    </div>

		<?php start_header_bottom(); ?>

	</header>








