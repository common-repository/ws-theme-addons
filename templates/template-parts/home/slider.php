<?php
/**
 * Homepage Slider Content.
 */
if ( ! is_front_page() || is_home() ) {
    return;
}

$enabled = travel_log_get_theme_option( 'home_slider_enable' );

if ( ! is_customize_preview() && false === $enabled && ! is_home() ) {

    return;

}

echo '<div id="travel-log-front-page-slider-wrap" class="travel-log-show-partial-edit-shortcut">';

travel_log_front_page_slider_content();

echo '</div>';
