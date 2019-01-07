<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $item
 * @var array $attr
 */

$options = $item['options'];

?>
<div class="<?php echo esc_attr( fw_ext_builder_get_item_width( 'form-builder', $item['width'] . '/frontend_class' ) ); ?>">
	<div class="field-textarea">
		<?php if ( fw_htmlspecialchars( $item['options']['label'] ) != '' ) : ?>
			<label for="<?php echo esc_attr( $attr['id'] ) ?>"><?php echo wp_kses( fw_htmlspecialchars( $item['options']['label'] ), start_allowed_html() ); ?>
				<?php if ( $options['required'] ): ?><sup>*</sup><?php endif; ?>
			</label>
		<?php endif; ?>
		<textarea <?php echo fw_attr_to_html( $attr ) ?>><?php echo wp_kses( fw_htmlspecialchars( $value ), start_allowed_html() ); ?></textarea>
		<?php if ( $options['info'] ): ?>
			<p><em><?php echo esc_html( $options['info'] ); ?></em></p>
		<?php endif; ?>
	</div>
</div>