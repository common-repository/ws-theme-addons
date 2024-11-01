<?php
/**
 * Footer Credits Module.
 * @package WS_Theme_Addons
 * 
 */
/**
 * Copyright Customization.
 */
function ws_theme_addons_copyright_modification(){

    //Settings.
    $ws_theme_addons_saved_settings = get_option( 'ws_theme_addons_admin_settings' );

    if( isset( $ws_theme_addons_saved_settings['footer_copyright_text'] ) ) {

        //remove theme defined copyright block.
        remove_action('travel_log_footer_copyright', 'travel_log_footer_copyright_content' );

        //Add premium Copyright Text Block.
        add_action( 'travel_log_footer_copyright', 'travel_log_premium_footer_copyright_content', 30 );

    }
    // else {
    //     add_filter( 'ws_footer_credits_enable', 'travel_log_show_powered_by_content' );
    // }

}

function travel_log_show_powered_by_content( $enable_powered_by ) {
	return false;
}

add_action('after_setup_theme', 'ws_theme_addons_copyright_modification');

/**
 * Add Custom Copyright Text.
 * 
 * @return void
 */
function travel_log_premium_footer_copyright_content(){

    //Settings.
    $ws_theme_addons_saved_settings = get_option( 'ws_theme_addons_admin_settings' );

    if( ! empty( $ws_theme_addons_saved_settings['footer_copyright_text'] ) ) {

        ?>

            <div class="travel-copyright">

              <p><?php  echo do_shortcode( wp_kses_post( $ws_theme_addons_saved_settings['footer_copyright_text'] ) ); ?></p>
            
            </div>

        <?php

    } 

}