<?php
/**
 * Itinerary Search Template.
 */
if ( ! is_front_page() || is_home() ) {
    return;
}

if ( ! class_exists( 'WP_Travel' ) ) {
    return;
}

    $section_title = travel_log_get_theme_option( 'itinerary_search_title' );
    $section_sub_title = travel_log_get_theme_option( 'itinerary_search_sub_title' );
?>
<div id="travel-log-front-page-itinerary-search-wrap" class="travel-log-show-partial-edit-shortcut">
    <section id="section-itinerary-search" class="section-itinerary-search">
        <div class="container">
        <?php if ( ! empty( $section_title ) || ! empty( $section_sub_title ) ) : ?>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title"><?php echo esc_html( $section_title ); ?></h2>
                        <div class="title-tagline">
                            <p><?php echo esc_html( $section_sub_title ); ?></p>
                        </div>
                </div>
            </div>
        <?php endif; ?>
            <div class="row">
                <div class="col-sm-12">
                    <?php wp_travel_search_form(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
