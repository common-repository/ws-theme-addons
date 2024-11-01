<?php
/**
 * For Declaration and Callbacks of Shortcodes.
 *
 * @package WS Theme Addons
 */

/**
 * WS Theme Addons Shortcodes class.
 */
class WS_Theme_Addons_Shortcodes_Init {

	/**
	 * Constructor.
	 */
	function __construct() {
        
        add_shortcode( 'year', array( $this, 'year_shortcode_callback' ) );
        add_shortcode( 'site_name', array( $this, 'site_name_callback' ) );
        add_shortcode( 'site_url', array( $this, 'site_url_callback' ) );
        add_shortcode( 'ws_weather', array( $this, 'ws_weather_callback' ) );
        
    }
    
    public function year_shortcode_callback(){

		return date('Y');

    }

    public function site_name_callback(){

        return get_bloginfo('name');

    }

    public function site_url_callback(){

        return esc_url( home_url('/') );

    }

    public function ws_weather_callback( $atts ){

		ob_start();

        $rand = rand();

        $atts = shortcode_atts(
            array(
                'location' => '',
            ), $atts, 'ws_weather' );

        $location = $atts['location'];

        if ( empty( $location ) ) : ?>

            <div class="weather" id="weather-<?php echo $rand; ?>"><span class="weather-no-locale"><strong><?php esc_html_e( 'Location Not Set', 'ws-theme-addons' ); ?></strong></span></div>

            <?php 

            return;

        endif;


        ?>
			<div class="weather-block">
				<div class="weather" id="weather-<?php echo $rand; ?>"></div>
					<div class="input-group input-group-sm">
						<input class="form-control" id="cityName-<?php echo $rand; ?>" type="text" placeholder="Enter a City">
						<span class="input-group-btn">
						<button class="btn btn-default" id="sub-<?php echo $rand; ?>"><?php esc_html_e('Search', 'ws-theme-addons'); ?></button></span>
					</div>
			</div>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						/* Does your browser support geolocation? */
						if ("geolocation" in navigator) {
							$('.js-geolocation').show();
						} else {
							$('.js-geolocation').hide();
						}
						
										
						/* Where in the world are you? */
						$('.js-geolocation').on('click', function() {
							navigator.geolocation.getCurrentPosition(function(position) {
								loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
							});
						});
					
						/* 
						 * Test Locations
						 * Austin lat/long: 30.2676,-97.74298
						 * Austin WOEID: 2357536
						 */

						 //search by city name
						    navigator.geolocation.getCurrentPosition(function(position) {
						        loadWeather(position.coords.latitude+','+position.coords.longitude);
						    });
							 $('#sub-<?php echo $rand; ?>').on('click', function(){
						        var cityVal = $('#cityName-<?php echo $rand; ?>').val();
						        loadWeather(cityVal);
						        $('#cityName').val('');
						    });
						$(document).ready(function() {
							loadWeather('<?php echo $location; ?>', ''); //@params location, woeid
						});
					
						function loadWeather(location, woeid) {
							$.simpleWeather({
								location: location,
								woeid: woeid,
								unit: 'c',
								success: function(weather) {
									html = '<div>' + weather.city + ', ' + weather.country + '</div>';

									html += '<h2><i class="icon-' + weather.code + '"></i> ' + weather.temp + '&deg;' + weather.units.temp + '</h2><h4>' + weather.alt.temp + '&deg;' + weather.alt.unit + '</h4><h4>' + weather.forecast[0].text  + '</h4>';

									html += '<span class="max min-max">Max: '  + weather.forecast[0].high + '&deg;c </span><span class="min min-max">Min: '  + weather.forecast[0].low + '&deg;c</li></span>';
									html+='<div class="column-for-weather">';
									 for(var i=1;i<4;i++) {
								        html += '<span><i class="icon-' + weather.forecast[i].code + '"></i><br>' +weather.forecast[i].day+'<br /> '+weather.forecast[i].high+ ' / '+weather.forecast[i].low+ '&deg;c</span>';
								      }
									html+='</div>';
					
									$("#weather-<?php echo $rand; ?>").html(html);

									var url = "<?php echo plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . "/assets/public/img/weather-img/"?>" + weather.code +".jpg";

									$("#weather-<?php echo $rand; ?>").css( 'background-image', 'url('+weather.image+')' );
								
								},
								error: function(error) {
									$("#weather-<?php echo $rand; ?>").html('<p>' + error + '</p>');
								}
							});
						}
					
					});
				</script>
		<?php
	
	$data = ob_get_clean();

	return $data;
		
    }

	
}

new WS_Theme_Addons_Shortcodes_Init();
