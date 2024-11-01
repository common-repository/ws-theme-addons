<?php
/**
 * Posts Filter Section Content
 */
if ( ! is_front_page() || is_home() ) {
    return;
}

echo '<div id="travel-log-front-page-post-filter-wrap" class="travel-log-show-partial-edit-shortcut">';
travel_log_front_page_post_filter_content();
echo '</div>';
