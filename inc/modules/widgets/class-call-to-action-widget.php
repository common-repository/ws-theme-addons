<?php
/**
 * Call To Action Widget
 *
 * @package WS Theme Addons
 */

if ( ! class_exists( 'WS_Theme_Addons_Call_To_Action_Widget' ) ) :
	/**
	 * Call To Action Widget Main class.
	 *
	 */
	class WS_Theme_Addons_Call_To_Action_Widget extends WP_Widget {

		/**
		 * Holds widget settings defaults, populated in constructor.
		 *
		 * @var array
		 */
		protected $defaults;

		/**
		 * Constructor. Set the default widget options and create widget.
		 *
		 */
		function __construct() {
			$this->defaults = array(
                'title'    => '',
                'cta_content' => '',
                'cta_button_text' => '',
				'cta_button_url' => '',
				'cta_bg_image_url' => '',
				'parallyx_bg_enable' => '',
			);

			$ws_theme_addons_call_to_action = array(
				'classname'   => 'ws_theme_addons_call_to_action widget_call_to_action clearfix',
				'description' => __( 'Call to action widget for custom content / link', 'ws-theme-addons' ),
			);

			$ws_theme_addons_custom_control_call_to_action = array(
				'id_base' => 'ws-theme-addons-custom-call-to-action',
			);

			parent::__construct(
				'ws-theme-addons-custom-call-to-action', // Base ID
				__( 'WS Call to Action', 'ws-theme-addons' ), // Name.
				$ws_theme_addons_call_to_action,
				$ws_theme_addons_custom_control_call_to_action
			);
		}
		/**
		 * Widget Form Function.
		 *
		 * @param array $instance Instance.
		 * @return void
		 */
		function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, $this->defaults );

			$cta_bg_image_url = $instance['cta_bg_image_url'];

			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'CTA Title Text', 'ws-theme-addons' ); ?>:</label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
			</p>

            <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cta_content' ) ); ?>"><?php esc_html_e( 'CTA Content Text', 'ws-theme-addons' ); ?>:</label>
				<textarea class="widefat" rows="10" id="<?php echo esc_attr( $this->get_field_id( 'cta_content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cta_content' ) ); ?>"><?php echo esc_attr( $instance['cta_content'] ); ?></textarea>
			</p>

            <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cta_button_text' ) ); ?>"><?php esc_html_e( 'CTA Button Text', 'ws-theme-addons' ); ?>:</label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'cta_button_text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cta_button_text' ) ); ?>" value="<?php echo esc_attr( $instance['cta_button_text'] ); ?>" class="widefat" />
			</p>

            <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cta_button_url' ) ); ?>"><?php esc_html_e( 'CTA Button URL', 'ws-theme-addons' ); ?>:</label><br>
                <span><i><strong><?php esc_html_e('Note: ', 'ws-theme-addons'); ?></strong><?php esc_html_e( 'Leave the URL field blank to disable button', 'ws-theme-addons' ); ?></i></span>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'cta_button_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cta_button_url' ) ); ?>" value="<?php echo esc_attr( $instance['cta_button_url'] ); ?>" class="widefat" />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cta_bg_image_url' ) ); ?>"><?php _e( 'Image URL', 'ws-theme-addons' ); ?></label>:<br />
					
					<input type="url" class="image-url widefat" name="<?php echo esc_attr( $this->get_field_name( 'cta_bg_image_url' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'cta_bg_image_url' ) ); ?>" value="<?php echo esc_url( $cta_bg_image_url ); ?>" /><br />
					
					<input type="button" class="select-img button button-primary" value="<?php _e( 'Upload', 'ws-theme-addons' ); ?>" data-uploader_title="<?php _e( 'Select Image', 'ws-theme-addons' ); ?>" data-uploader_button_text="<?php _e( 'Choose Image', 'ws-theme-addons' ); ?>" style="margin-top:5px;" />

		      	<?php
		        $bg_img_url = '';
		        if (! empty( $cta_bg_image_url ) ){
		          $bg_img_url = $cta_bg_image_url;
		        }
		        $wrap_style = '';
		        if ( empty( $bg_img_url ) ) {
		          $wrap_style = 'style=display:none;';
		        }
		      	?>
		      	<div class="cta-bg-img-preview-wrap"<?php echo esc_attr( $wrap_style ); ?>>
		        	<img src="<?php echo esc_url( $bg_img_url ); ?>" alt="<?php _e('Preview', 'ws-theme-addons'); ?>" style="max-width: 100%;"  />
		      	</div>

	    	</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'parallyx_bg_enable' ) ); ?>"><?php esc_html_e( 'Enable Parallyx Background', 'ws-theme-addons' ); ?>:</label><br>
                <span><i><strong><?php esc_html_e('Note: ', 'ws-theme-addons'); ?></strong><?php esc_html_e( 'Enable Parallax Background for CTA Section', 'ws-theme-addons' ); ?></i></span>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'parallyx_bg_enable' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'parallyx_bg_enable' ) ); ?>" <?php checked( $instance['parallyx_bg_enable'] ) ?>  />
			</p>
        
        <?php 

		}
		/**
		 * Update Widget
		 *
		 * @param array $new_instance New instance.
		 * @param array $old_instance Old Instance.
		 * @return array $instance Modified Instance.
		 */
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

            $instance['title']    = sanitize_text_field( $new_instance['title'] );
            
            $instance['cta_content']    = wp_kses_post( $new_instance['cta_content'] );

            $instance['cta_button_text']    = sanitize_text_field( $new_instance['cta_button_text'] );

			$instance['cta_button_url']    = esc_url_raw( $new_instance['cta_button_url'] );
			
			$instance['cta_bg_image_url'] = esc_url_raw( $new_instance['cta_bg_image_url'] );

			$instance['parallyx_bg_enable']   = ! empty( $new_instance['parallyx_bg_enable'] ) ? 1 : 0;

			return $instance;
		}
		/**
		 * Widget Render
		 *
		 * @param array $args Arguments Array.
		 * @param array $instance WidgetInstance.
		 * @return void
		 */
		function widget( $args, $instance ) {
			// Merge with defaults.
            $instance = wp_parse_args( (array) $instance, $this->defaults );
            
			$title = @$instance['title'];
			
			//Bail if no title is set.
			if ( empty( $title ) ) {

				return;

			}

            $cta_content = @$instance['cta_content'];

            $btn_url = @$instance['cta_button_url'];

			$btn_text = ! empty( $instance['cta_button_text'] ) ? $instance['cta_button_text'] : __( 'View Details', 'ws-theme-addons' ) ;
			
			$cta_bg_image_url = @$instance['cta_bg_image_url'];

			$cta_bg = '';

			if ($cta_bg_image_url ) {

				$cta_bg = 'background-image: url(' . esc_url( $cta_bg_image_url ) . ')' ;

			}

			$attachmet_style = 'background-attachment:scroll';

			if ( 1 == $instance['parallyx_bg_enable'] ) {

				$attachmet_style = 'background-attachment:fixed';

			}

            echo $args['before_widget'];

            ?>
                <section id="highlight-tag" class="highlight-tag" style="<?php echo esc_attr( $cta_bg ); ?>;<?php echo esc_attr( $attachmet_style ); ?>">
                    <div class="theme-overlay"></div>
                        <div class="container-box">
                            <div class="row-area">
                                <div class="highlight-wrapper clearfix">
                                    <div class="col-two-third">
                                    <?php if ( $title ) : ?>
                                        <h2><?php echo esc_html( $title ); ?></h2>
                                    <?php endif; ?>
                                    <?php if( $cta_content ) : ?>
                                        <p><?php echo wp_kses_post( $cta_content ); ?></p>
                                    <?php endif; ?>
                                    </div>
                                <?php if( $btn_url ) : ?>
                                    <div class="col-one-third">
                                        <a id="cta-button" href="<?php echo esc_url( $btn_url ); ?>" class="highlight-book theme-btn"><?php echo esc_html( $btn_text ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
			echo $args['after_widget'];
		}
	}
endif;

/**
 * Enqueue admin scripts for Image Widget
 * @uses  admin_enqueue_scripts hook
 */
function ws_theme_addons_cta_widget_scripts( $hook ) {

	if( 'widgets.php' !== $hook )
		return;
  
	wp_enqueue_media();

	wp_enqueue_script( 'ws-cta-image-uploader-script', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . 'inc/modules/widgets/uploader-script.js' );
  
  }
  add_action( 'admin_enqueue_scripts', 'ws_theme_addons_cta_widget_scripts' );

if ( ! function_exists( 'ws_theme_addons_register_call_to_action_widget' ) ) :
	/**
	 * Registers the widget
	 *
	 * @since 1.0.0
	 */
	function ws_theme_addons_register_call_to_action_widget() {
		register_widget( 'WS_Theme_Addons_Call_To_Action_Widget' );
	}

endif;

add_action( 'widgets_init', 'ws_theme_addons_register_call_to_action_widget' );

function ws_theme_addons_default_uploader_image_size () {

    return 'full'; 
}

add_filter( 'pre_option_image_default_size', 'ws_theme_addons_default_uploader_image_size' );
