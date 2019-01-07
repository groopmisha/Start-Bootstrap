<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var string $submit_button_text
 * @var string $form_id
 */

$btn = fw_ext_contact_forms_get_option( $form_id, 'button_options' );
?>
<div class="fw-row">
	<?php if ( ! empty( $btn ) ) :
		$style = 'fw-btn-1';
		?>
		<div class="fw-col-sm-12 field-submit">
			<button type="submit" class="fw-btn-post-read-more-blog fw-btn fw-btn-1 fw-btn-md">
				<span>
                    <?php echo wp_kses( start_translate( esc_attr( $btn['label'] ) ), start_allowed_html() ); ?>
				</span>
			</button>
		</div>
	<?php else: ?>
		<div class="fw-col-sm-12 field-submit">
			<button type="submit"
					class="fw-btn fw-btn-1 fw-btn-md"><?php echo esc_attr( $submit_button_text ) ?></button>
		</div>
	<?php endif; ?>
</div>