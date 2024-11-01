<?php
/**
 * Load Widgets Module in the plugin.
 *
 * @package WS Theme Addons
 */

/**
 * WS Theme Addons Widgets Module init class.
 */
class WS_Theme_Addons_Widgets_Module {

	/**
	 * Constructor.
	 */
	function __construct() {

		$this->includes();

		add_action( 'wp_enqueue_scripts', array( $this, 'widget_scripts' ) );
	}
	/**
	 * Widgets includes.
	 *
	 * @return void
	 */
	public function includes() {

		if ( self::is_module_active( $module_name = 'facebook' ) ) {
			include sprintf( '%s/inc/modules/widgets/class-facebook-feed-widget.php', WS_THEME_ADDONS_ABSPATH );
		}
		if ( self::is_module_active( $module_name = 'instagram' ) ) {
			include sprintf( '%s/inc/modules/widgets/class-instagram-widget.php', WS_THEME_ADDONS_ABSPATH );
		}
		if ( self::is_module_active( $module_name = 'twitter' ) ) {
			include sprintf( '%s/inc/modules/widgets/twitter-widget/class-twitter-feed-widget.php', WS_THEME_ADDONS_ABSPATH );
		}

		//Call to action Widget
		include sprintf( '%s/inc/modules/widgets/class-call-to-action-widget.php', WS_THEME_ADDONS_ABSPATH );

		//Weather Widget
		include sprintf( '%s/inc/modules/widgets/weather-widget/class-weather-widget.php', WS_THEME_ADDONS_ABSPATH );

	}

	/**
	 * Widget Styles 
	 */
	public static function widget_scripts(){

		if ( self::is_module_active( $module_name = 'facebook' ) || self::is_module_active( $module_name = 'twitter' ) || self::is_module_active( $module_name = 'instagram' ) ) {
			
			wp_enqueue_style( 'ws-instagram-styles', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . 'assets/public/css/instagram-widget-css.css' );
		
		}

	}
	/**
	 * Active Module Checks.
	 *
	 * @param string $module_name Name of the module to check.
	 * @return bool true if module is active in settings.
	 */
	public static function is_module_active( $module_name ) {

		$ws_theme_addons_saved_settings = get_option( 'ws_theme_addons_admin_settings' );

		switch ( $module_name ) {

			case 'instagram':

				if ( isset( $ws_theme_addons_saved_settings['instagram_enable'] ) ) {
					return true;
				}
				return false;

			break;

			case 'twitter':

				if ( isset( $ws_theme_addons_saved_settings['twitter_widget_enable'] ) ) {
					return true;
				}
				return false;

			break;

			case 'facebook':

				if ( isset( $ws_theme_addons_saved_settings['fb_widget_enable'] ) ) {
					return true;
				}
				return false;

			break;

			default :

			return false;
		}

	}


}

new WS_Theme_Addons_Widgets_Module();
