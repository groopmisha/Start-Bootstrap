<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var  FW_Option_Type_TF_Typography $tf_typography
 * @var  string $id
 * @var  array $option
 * @var  array $data
 * @var  array $fonts
 * @var array $defaults
 */
{
	$wrapper_attr = $option['attr'];

	unset(
		$wrapper_attr['value'],
		$wrapper_attr['name']
	);
}

global $wp_customize;

{
	$option['value'] = array_merge( $defaults['value'], (array) $option['value'] );
	$data['value']   = array_merge( $option['value'], is_array( $data['value'] ) ? $data['value'] : array() );
	$google_font     = $tf_typography->get_google_font( $data['value']['family'] );
}

$components = ( isset( $option['components'] ) && is_array( $option['components'] ) ) ? array_merge( $defaults['components'], $option['components'] ) : $defaults['components'];
?>
<div <?php echo fw_attr_to_html( $wrapper_attr ) ?>>

	<?php if ( $components['family'] ) : ?>
		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-family fw-border-box-sizing fw-col-sm-5">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Font face', 'start' ) . '</span>
													</div>
												</div><div class="fw-clearfix-div"></div>' : ''; ?>
			<select data-type="family" data-value="<?php echo esc_attr( $data['value']['family'] ); ?>"
					name="<?php echo esc_attr( $option['attr']['name'] ) ?>[family]"
					class="fw-option-tf-typography-option-family-input">
			</select>
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Font face', 'start' ) . '</div>'; ?>
		</div>

		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-style fw-border-box-sizing fw-col-sm-3"
			 style="display: <?php echo ( $google_font ) ? 'none' : 'inline-block'; ?>;">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Style', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<select data-type="style" name="<?php echo esc_attr( $option['attr']['name'] ) ?>[style]"
					class="fw-option-tf-typography-option-style-input">
				<?php foreach (
					array(
						'normal'  => esc_html__( 'Normal', 'start' ),
						'italic'  => esc_html__( 'Italic', 'start' ),
						'oblique' => esc_html__( 'Oblique', 'start' )
					)
					as $key => $style
				): ?>
					<option value="<?php echo esc_attr( $key ) ?>"
					        <?php if ( $data['value']['style'] === $key ): ?>selected="selected"<?php endif; ?>><?php echo wp_kses( $style, start_allowed_html() ) ?></option>
				<?php endforeach; ?>
			</select>
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Style', 'start' ) . '</div>'; ?>
		</div>

		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-weight fw-border-box-sizing fw-col-sm-3"
			 style="display: <?php echo ( $google_font ) ? 'none' : 'inline-block'; ?>;">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Weight', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<select data-type="weight" name="<?php echo esc_attr( $option['attr']['name'] ) ?>[weight]"
					class="fw-option-tf-typography-option-weight-input">
				<?php foreach (
					array(
						100 => 100,
						200 => 200,
						300 => 300,
						400 => 400,
						500 => 500,
						600 => 600,
						700 => 700,
						800 => 800,
						900 => 900
					)
					as $key => $style
				): ?>
					<option value="<?php echo esc_attr( $key ) ?>"
					        <?php if ( $data['value']['weight'] == $key ): ?>selected="selected"<?php endif; ?>><?php echo wp_kses( $style, start_allowed_html() ) ?></option>
				<?php endforeach; ?>
			</select>
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Weight', 'start' ) . '</div>'; ?>
		</div>

		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-subset fw-border-box-sizing fw-col-sm-2"
			 style="display: <?php echo ( $google_font ) ? 'inline-block' : 'none'; ?>;">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Script', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<select data-type="subset" name="<?php echo esc_attr( $option['attr']['name'] ) ?>[subset]"
					class="fw-option-tf-typography-option-subset">
				<?php if ( $google_font ) {
					foreach ( $google_font->subsets as $subset ) { ?>
						<option value="<?php echo esc_attr( $subset ) ?>"
						        <?php if ( $data['value']['subset'] === $subset ): ?>selected="selected"<?php endif; ?>><?php echo wp_kses( $subset, start_allowed_html() ); ?></option>
					<?php }
				}
				?>
			</select>
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Script', 'start' ) . '</div>'; ?>
		</div>

		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-variation fw-border-box-sizing fw-col-sm-2"
			 style="display: <?php echo ( $google_font ) ? 'inline-block' : 'none'; ?>;">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Style', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<select data-type="variation" name="<?php echo esc_attr( $option['attr']['name'] ) ?>[variation]"
					class="fw-option-tf-typography-option-variation">
				<?php if ( $google_font ) {
					foreach ( $google_font->variants as $variant ) { ?>
						<option value="<?php echo esc_attr( $variant ) ?>"
						        <?php if ( $data['value']['variation'] === $variant ): ?>selected="selected"<?php endif; ?>><?php echo wp_kses( $variant, start_allowed_html() ); ?></option>
					<?php }
				}
				?>
			</select>
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Style', 'start' ) . '</div>'; ?>
		</div>
	<?php endif; ?>

	<?php if ( $components['size'] ) : ?>
		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-size fw-border-box-sizing fw-col-sm-2">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Size', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<input data-type="size" name="<?php echo esc_attr( $option['attr']['name'] ) ?>[size]"
				   class="fw-option-tf-typography-option-size-input" type="text"
				   value="<?php echo esc_attr( $data['value']['size'] ); ?>">
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Size', 'start' ) . '</div>'; ?>
		</div>
	<?php endif; ?>

	<?php if ( $components['line-height'] ) : ?>
		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-line-height fw-border-box-sizing fw-col-sm-2">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Line height', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<input data-type="line-height" name="<?php echo esc_attr( $option['attr']['name'] ) ?>[line-height]"
				   value="<?php echo esc_attr( $data['value']['line-height'] ); ?>"
				   class="fw-option-tf-typography-option-line-height-input" type="text">
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Line height', 'start' ) . '</div>'; ?>
		</div>
	<?php endif; ?>

	<?php if ( $components['letter-spacing'] ) : ?>
		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-letter-spacing fw-border-box-sizing fw-col-sm-2">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Letter spacing', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>
			<input data-type="letter-spacing"
				   name="<?php echo esc_attr( esc_attr( $option['attr']['name'] ) ) ?>[letter-spacing]"
				   value="<?php echo esc_attr( $data['value']['letter-spacing'] ); ?>"
				   class="fw-option-tf-typography-option-letter-spacing-input" type="text">
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Letter spacing', 'start' ) . '</div>'; ?>
		</div>
	<?php endif; ?>

	<?php if ( $components['color-palette'] ) : ?>
		<div class="fw-option-tf-typography-option fw-option-tf-typography-option-color-palette fw-border-box-sizing fw-col-sm-2"
			 data-type="color-palette">
			<?php echo isset( $wp_customize ) ? '<div class="fw-backend-option-desc fw-col-xs-12">
													<div class="fw-inner">
														<span class="description customize-control-description">' . esc_html__( 'Color', 'start' ) . '</span>
													</div>
												</div>' : ''; ?>

			<?php

			echo fw()->backend->option_type( 'color-palette' )->render(
				'color-palette',
				array(
					'label'   => false,
					'desc'    => false,
					'type'    => 'color-palette',
					'choices' => apply_filters( 'fw_tf_typography_color_palette_choices', fw_get_db_settings_option( 'color_settings' ) ),
					'value'   => wp_kses( $option['value']['color-palette'], start_allowed_html() )
				),
				array(
					'value'       => wp_kses( $data['value']['color-palette'], start_allowed_html() ),
					'id_prefix'   => esc_attr('fw-option-' . $id . '-tf-typography-option-'),
					'name_prefix' => esc_attr($data['name_prefix'] . '[' . $id . ']'),
				)
			)
			?>
			<?php echo isset( $wp_customize ) ? '' : '<div class="fw-inner">' . esc_html__( 'Color', 'start' ) . '</div>'; ?>
		</div>
	<?php endif; ?>
</div>
