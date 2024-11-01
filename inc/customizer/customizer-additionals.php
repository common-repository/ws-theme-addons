<?php
/** 
 * Customizer Additionals for Travel Log.
 * @package WS_Theme_Addons
*/
/**
 * Customizer Options.
 */
if ( ! function_exists( 'travel_log_get_home_sections_options' ) ) :

    /**
     * Returns home sections options.
     *
     * @since 1.0.0
     *
     * @return array Options array.
     */
    function travel_log_get_home_sections_options() {
    
        $choices = array(
            'slider' => array(
                'label'    => __( 'Slider', 'ws-theme-addons' ),
                'template' => 'template-parts/home/slider',
                ),
            'itinerary-search' => array(
                'label'    => __( 'Itinerary Search Section', 'ws-theme-addons' ),
                'template' => 'template-parts/home/itinerary-search',
                ),
            'posts-filter' => array(
                'label'    => __( 'Post Filter Section', 'ws-theme-addons' ),
                'template' => 'template-parts/home/posts-filter',
                ),
            'call-to-action' => array(
                'label'    => __( 'Call To Action', 'ws-theme-addons' ),
                'template' => 'template-parts/home/call-to-action',
                ),
            'recommended-posts' => array(
                'label'    => __( 'Recommended Posts', 'ws-theme-addons' ),
                'template' => 'template-parts/home/recommended-posts',
                ),
            'testimonials' => array(
                'label'    => __( 'Testimonials', 'ws-theme-addons' ),
                'template' => 'template-parts/home/testimonials',
                ),
            'latest-posts' => array(
                'label'    => __( 'Latest Posts', 'ws-theme-addons' ),
                'template' => 'template-parts/home/latest-posts',
                ),
            'front-page-widgets' => array(
                'label'    => __( 'Front Page Widgets', 'ws-theme-addons' ),
                'template' => 'template-parts/home/front-page-widgets',
                ),
            );
        $output = apply_filters( 'travel_log_filter_home_sections_options', $choices );
        return $output;
    
    }
    
endif;
/**
 * Additional Customizer Functions
 * @param obj wp_customize_object
 * @return void
 */
function ws_theme_addons_travel_log_customizer_additionals( $wp_customize ) {

    include sprintf( '%s/inc/customizer/controls.php', WS_THEME_ADDONS_ABSPATH );

    // Manage Sections.
    $wp_customize->add_section( 'travel_log_homepage_manage_home_sections' , array(
        'title'       => esc_html__( 'Manage Sections', 'ws-theme-addons' ),
        'priority'    => 20,
        'panel'       => 'travel_log_homepage_panel',
    ) );

    // Setting homepage_sections.
    $wp_customize->add_setting( 'travel_log_options[homepage_sections]',
        array(
            'default'           => 'slider,itinerary-search,posts-filter,call-to-action,recommended-posts,testimonials,latest-posts,front-page-widgets',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        new Travel_Log_Section_Manager_Control(
            $wp_customize,
            'travel_log_options[homepage_sections]',
            array(
                'label'    => esc_html__( 'Reorder/Toggle Homepage Sections', 'ws-theme-addons' ),
                'section'  => 'travel_log_homepage_manage_home_sections',
                'settings' => 'travel_log_options[homepage_sections]',
                'priority' => 1,
                'args'     => array(
                    'sections' => travel_log_get_home_sections_options(),
                ),
            )
        )
    );

    // Remove the Old Toggle controls from the theme.
    $wp_customize->remove_control('travel_log_options[home_slider_enable]');
    $wp_customize->remove_control('travel_log_options[home_itinerary_search_enable]');
    $wp_customize->remove_control('travel_log_homepage_post_filter_enable');
    $wp_customize->remove_control('travel_log_homepage_call_to_action_enable');
    $wp_customize->remove_control('travel_log_options[recommended_posts_enable]');
    $wp_customize->remove_control('travel_log_homepage_testimonials_enable');
    $wp_customize->remove_control('travel_log_homepage_latest_post_enable');

}
add_action( 'customize_register', 'ws_theme_addons_travel_log_customizer_additionals', 999 );
