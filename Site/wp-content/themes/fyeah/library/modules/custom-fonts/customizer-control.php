<?php
/**
 * Custom Fonts: Custom Control.
 * Slightly modified radio option.
**/
class Tamatebako_Custom_Fonts_Customize extends WP_Customize_Control {

	/**
	 * Render Content
	 */
	public function render_content() {

		if ( empty( $this->choices ) )
			return;

		$name = '_customize-radio-' . $this->id;

		if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description ; ?></span>
		<?php endif;

		foreach ( $this->choices as $value => $label ) :
			?>
			<label>
				<input type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?> />
				<span style="font-size:20px;line-height:35px;font-family:<?php echo esc_attr( tamatebako_get_font_family( $value ) );?>;"><?php echo esc_html( $label ); ?></span><br/>
			</label>
			<?php
		endforeach;
	}
}
