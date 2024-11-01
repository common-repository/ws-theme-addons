<?php
/**
 * Plugin Name: WS Theme Addons
 * Plugin URI: http://www.wensolutions.com/plugins/ws-theme-addons
 * Description: Provides Additional Features and functionalities for themes.
 * Version:           2.0.0
 * Author: WEN Solutions
 * Author URI: http://wensolutions.com
 * Requires at least: 4.4
 * Requires PHP: 5.6.2
 * Tested up to: 6.0
 *
 * Text Domain: ws-theme-addons
 * Domain Path: /i18n/languages/
 *
 * @package WS Theme Addons
 * @category Core
 * @author WenSolutions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'WS_Theme_Addons' ) ) :

	/**
	 * Main WS_Theme_Addons Class (singleton).
	 *
	 * @since 1.0.0
	 */
	final class WS_Theme_Addons {

		/**
		 * WS Theme Addon version.
		 *
		 * @var string
		 */
		public $version = '2.0.0';
		/**
		 * The single instance of the class.
		 *
		 * @var WS Theme Addons
		 * @since 0.0.1
		 */
		protected static $_instance = null;

		/**
		 * Main WS_Theme_Addons Instance.
		 * Ensures only one instance of WS_Theme_Addons is loaded or can be loaded.
		 *
		 * @since 0.0.1
		 * @static
		 * @see WS_Theme_Addons()
		 * @return WS_Theme_Addons - Main instance.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		/**
		 * WS_Theme_Addons Constructor.
		 */
		public function __construct() {
			$this->define_constants();
			$this->includes();
			$this->init_hooks();
			$this->init_modules();
		}

		/**
		 * Define WC Constants.
		 */
		private function define_constants() {
			$this->define( 'WS_THEME_ADDONS_PLUGIN_FILE', __FILE__ );
			$this->define( 'WS_THEME_ADDONS_ABSPATH', dirname( __FILE__ ) . '/' );
			$this->define( 'WS_THEME_ADDONS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
			$this->define( 'WS_THEME_ADDONS_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
			$this->define( 'WS_THEME_ADDONS_TEMPLATE_PATH', 'ws-theme-addons/' );
			$this->define( 'WS_THEME_ADDONS_VERSION', $this->version );
		}

		/**
		 * Hook into actions and filters.
		 *
		 * @since 0.0.1
		 * @return void
		 */
		private function init_hooks() {
			register_activation_hook( __FILE__, array( $this, 'ws_theme_addons_activation' ) );

			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ), 20 );

			add_filter( 'travel_log_front_page_sections_filter', array( $this, 'travel_log_child_front_page_sortable_sections' ) );

			add_action( 'travel_log_home_page_sortable_sections', array( $this, 'travel_log_add_front_page_home_sections' ) );

		}
		/**
		 * Load Plugin Modules.
		 *
		 * @since 0.0.1
		 * @return void
		 */
		private function init_modules() {
			// Widgets Module.
			include sprintf( '%s/inc/modules/widgets/class-widgets-module-init.php', WS_THEME_ADDONS_ABSPATH );

			// Footer Credits.
			include sprintf( '%s/inc/modules/footer-credits.php', WS_THEME_ADDONS_ABSPATH );
		}
		/**
		 * Define Constants function.
		 *
		 * @param string $name name of the constant.
		 * @param string $value constant value.
		 * @return void
		 */
		private function define( $name, $value ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		/**
		 * Include required core files used in admin and on the frontend.
		 *
		 * @return void
		 */
		public function includes() {

			include sprintf( '%s/inc/class-install.php', WS_THEME_ADDONS_ABSPATH );
			include sprintf( '%s/inc/class-admin-settings.php', WS_THEME_ADDONS_ABSPATH );
			include sprintf( '%s/inc/class-save-admin-settings.php', WS_THEME_ADDONS_ABSPATH );
			include sprintf( '%s/inc/class-ws-theme-addons-demo-import.php', WS_THEME_ADDONS_ABSPATH );
			include sprintf( '%s/inc/functions-demo-importer.php', WS_THEME_ADDONS_ABSPATH );

			include sprintf( '%s/inc/class-ws-theme-addons-shortcodes.php', WS_THEME_ADDONS_ABSPATH );
			include sprintf( '%s/inc/customizer/customizer-additionals.php', WS_THEME_ADDONS_ABSPATH );
		}
		/**
		 * Enqueue assets.
		 *
		 * @return void
		 */
		public function enqueue_assets() {
			wp_enqueue_script( 'ws-theme-addons-scripts', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . 'assets/public/js/ws-theme-addons-js.js', array( 'jquery' ), '', true );

			wp_enqueue_style( 'ws-theme-addons-public-css', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . 'assets/public/css/ws-theme-addons-public.css' );

			// wp_enqueue_style( 'ws-theme-addons-template-css', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . 'assets/public/css/template.css' );
		}

		/**
		 * WS Theme Addons Activation.
		 */
		public function ws_theme_addons_activation() {

		}

		public function travel_log_child_front_page_sortable_sections() {

			return 'travel_log_home_page_sortable_sections';

		}
		/**
		 * Returns active homepage sections.
		 *
		 * @since 1.0.0
		 *
		 * @return array Active sections.
		 */
		public function travel_log_get_active_homepage_sections() {

			$output = array();

			$homepage_sections = travel_log_get_theme_option( 'homepage_sections' );

			if ( empty( $homepage_sections ) ) {
				$homepage_sections = 'slider,itinerary-search,posts-filter,call-to-action,recommended-posts,testimonials,latest-posts,front-page-widgets';
			}

			if ( ! empty( $homepage_sections ) ) {
				$exploded         = explode( ',', $homepage_sections );
				$default_sections = travel_log_get_home_sections_options();
				if ( ! empty( $exploded ) && is_array( $exploded ) ) {
					foreach ( $exploded as $key ) {
						if ( isset( $default_sections[ $key ] ) ) {
							$output[ $key ] = $default_sections[ $key ];
						}
					}
				}
			}

			return $output;

		}

		/**
		 * Add Front Page widget sections.
		 *
		 * @since 1.0.0
		 */
		public function travel_log_add_front_page_home_sections() {

			$section_status = apply_filters( 'travel_log_filter_front_page_home_sections_status', true );

			if ( true !== $section_status ) {
				return;
			}

			$active_sections = $this->travel_log_get_active_homepage_sections();

			if ( ! empty( $active_sections ) ) {
				foreach ( $active_sections as $section ) {
					load_template( sprintf( '%s/templates/' . $section['template'] . '.php', WS_THEME_ADDONS_ABSPATH ) );
				}
			}

		}

	}

endif;

/**
 * Main instance of WS Theme Addons.
 *
 * Returns the main instance of WS_Theme_Addons to prevent the need to use globals.
 *
 * @since  0.0.1
 * @return ws_theme_addons
 */
function ws_theme_addons() {
	return WS_Theme_Addons::instance();
}

// Start WS Theme Addons.
ws_theme_addons();
