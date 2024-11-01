<?php
/**
 * Home page Widgets Content
 */
if ( ! is_active_sidebar( 'front-page-before-footer' ) ) {
    return;
}
echo '<div class="travel-log-front-page-full-width-widget clearfix">';
    echo '<div class="before-footer-wrap">';
    dynamic_sidebar( 'front-page-before-footer' );
    echo '</div>';
echo '</div>';
