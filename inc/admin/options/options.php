<?php
/**
 * Load embedded Redux Framework
 */

if ( ! class_exists( 'ReduxFramework' ) ) {
	require_once sprintf( '%s/inc/frameworks/redux/framework.php', WS_THEME_ADDONS_ABSPATH );
}

if ( ! class_exists( 'Redux' ) ) {
	return;
}

/**
 * Redux params
 */

$opt_name = 'gridlove_settings';

$args = array(
	'opt_name'             => $opt_name,
	'display_name'         => wp_kses( sprintf( __( 'Gridlove Options%sTheme Documentation%s', 'ws-theme-addons' ), '<a href="http://mekshq.com/documentation/gridlove" target="_blank">', '</a>' ), wp_kses_allowed_html( 'post' )),
	'menu_type'            => 'menu',
	'allow_sub_menu'       => true,
	'menu_title'           => esc_html__( 'Theme Options', 'ws-theme-addons' ),
	'page_title'           => esc_html__( 'Gridlove Options', 'ws-theme-addons' ),
	'google_api_key'       => '',
	'google_update_weekly' => false,
	'async_typography'     => true,
	'admin_bar'            => true,
	'admin_bar_icon'       => 'dashicons-admin-generic',
	'admin_bar_priority'   => '100',
	'global_variable'      => '',
	'dev_mode'             => false,
	'update_notice'        => false,
	'customizer'           => false,
	'allow_tracking' => false,
	'ajax_save' => false,
	'page_priority'        => '27.11',
	'page_parent'          => 'themes.php',
	'page_permissions'     => 'manage_options',
	'menu_icon'            => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1OTUuMyA4NDEuOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTk1LjMgODQxLjk7IiB4bWw6c3BhY2U9InByZXNlcnZlIj48ZyBpZD0iTGF5ZXJfMiI+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzlGQTRBOTsiIHBvaW50cz0iNTcwLjcsMzY5LjIgNDAzLjIsMjAxLjcgMzE5LjQsMjg1LjUgNDQyLjIsNDUwLjcgMTkyLjEsMjAxLjcgMjQuNiwzNjkuMiAyOTcuNSw2NDIuMiAyOTcuNiw2NDEuOSAyOTcuOCw2NDIuMiAiLz48L2c+PC9zdmc+',
	'last_tab'             => '',
	'page_icon'            => 'icon-themes',
	'page_slug'            => 'gridlove_options',
	'save_defaults'        => true,
	'default_show'         => false,
	'default_mark'         => '',
	'show_import_export'   => true,
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'output'               => false,
	'output_tag'           => true,
	'database'             => '',
	'system_info'          => false
);

$GLOBALS['redux_notice_check'] = 1;

/* Footer social icons */

$args['share_icons'][] = array(
	'url'   => 'https://www.facebook.com/mekshq',
	'title' => 'Like us on Facebook',
	'icon'  => 'el-icon-facebook'
);

$args['share_icons'][] = array(
	'url'   => 'http://twitter.com/mekshq',
	'title' => 'Follow us on Twitter',
	'icon'  => 'el-icon-twitter'
);

$args['intro_text'] = '';
$args['footer_text'] = '';


/**
 * Initialize Redux
 */

Redux::setArgs( $opt_name , $args );


/**
 * Include redux option fields (settings)
 */

include_once sprintf( '%s/inc/admin/options/options-fields.php', WS_THEME_ADDONS_ABSPATH );


/**
 * Append custom css to redux framework admin panel
 *
 * @return void
 * @since  1.0
 */

if ( !function_exists( 'gridlove_redux_custom_css' ) ):
	function gridlove_redux_custom_css() {
		wp_register_style( 'gridlove-redux-custom', get_template_directory_uri().'/assets/css/admin/options.css', array( 'redux-admin-css' ), GRIDLOVE_THEME_VERSION, 'all' );
		wp_enqueue_style( 'gridlove-redux-custom' );
	}
endif;

// add_action( 'redux/page/gridlove_settings/enqueue', 'gridlove_redux_custom_css' );


/**
 * Remove redux framework admin page
 *
 * @return void
 * @since  1.0
 */

if ( !function_exists( 'gridlove_remove_redux_page' ) ):
	function gridlove_remove_redux_page() {
		remove_submenu_page( 'tools.php', 'redux-about' );
	}
endif;

// add_action( 'admin_menu', 'gridlove_remove_redux_page', 99 );


/**
 * Add our Sidebar generator custom field to redux
 *
 * @since  1.0
 */

if ( !function_exists( 'gridlove_sidgen_field_path' ) ):
function gridlove_sidgen_field_path($field) {
	return get_template_directory() . '/core/admin/options-custom-fields/sidgen/field_sidgen.php';
}
endif;

// add_filter( "redux/gridlove_settings/field/class/sidgen", "gridlove_sidgen_field_path" );
?>