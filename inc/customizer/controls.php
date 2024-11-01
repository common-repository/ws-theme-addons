<?php
/**
 * Customizer Additional Controls.
 * @package WS_Theme_Addons
 */
/**
 * Customize Control for managing section.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Travel_Log_Section_Manager_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'section-manager';

	/**
	 * Arguments.
	 *
	 * @access public
	 * @var array
	 */
	public $args = array();

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 */
	public function enqueue() {

		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		wp_enqueue_script( 'travel-log-customize-controls', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . '/assets/admin/js/customize-controls' . $min . '.js', array( 'jquery', 'customize-controls', 'jquery-ui-core', 'jquery-ui-sortable' ) );
		wp_enqueue_style( 'travel-log-customize-controls', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . '/assets/admin/css/customize-controls' . $min . '.css' );

	}

	/**
	 * Render content.
	 *
	 * @since 1.0.0
	 */
	private function get_sections_list() {

		$value = $this->value();
		$items = explode( ',', $value );

		$output = array();
		if ( ! empty( $items ) ) {
			foreach ( $items as $item ) {
				if ( isset( $this->args['sections'][ $item ] ) ) {
					$output[ $item ]['label']  = $this->args['sections'][ $item ]['label'];
					$output[ $item ]['status'] = 1;
				}
			}
		}
		foreach ( $this->args['sections'] as $k => $v ) {
			if ( ! isset( $output[ $k ] ) ) {
				$output[ $k ]['label']  = $v['label'];
				$output[ $k ]['status'] = 0;
			}
		}
		return $output;

	}

	/**
	 * Render content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {

		if ( ! isset( $this->args['sections'] ) || empty( $this->args['sections'] ) ) {
			return;
		}

		$sections = $this->get_sections_list();
        ?>

        <?php if ( ! empty( $this->label ) ) : ?>
			<h3><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span></h3>
        <?php endif; ?>
        <?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
        <?php endif; ?>
        <ul class="section-list">
	        <?php foreach ( $sections as $key => $section ) : ?>
	        	<li>
	        		<i class="dashicons dashicons-move"></i>
	        		<span><?php echo esc_html( $section['label'] ); ?></span>
	        		<input type="checkbox" class="section-item-checkbox" value="<?php echo esc_attr( $key ); ?>" <?php checked( $section['status'], 1 ); ?> />
	        	</li>
	        <?php endforeach; ?>
        </ul>
    	<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>" />
        <?php
	}

}
