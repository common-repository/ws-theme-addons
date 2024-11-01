<?php
/**
 * Weather Widget
 *
 * @package WS Theme Addons
 */

if ( ! class_exists( 'WS_Theme_Addons_Weather_Widget' ) ) :
	/**
	 * Weather Widget Main class.
	 *
	 */
	class WS_Theme_Addons_Weather_Widget extends WP_Widget {

		/**
		 * Holds widget settings defaults, populated in constructor.
		 *
		 * @var array
		 */
		protected $defaults;

		/**
		 * Constructor. Set the default widget options and create widget.
		 *
		 */
		function __construct() {
			$this->defaults = array(
                'title'    => '',
                'location' => '',
			);

			$ws_theme_addons_weather_widget = array(
				'classname'   => 'ws_theme_addons_weather_widget widget_weather_widget clearfix',
				'description' => __( 'Weather Details Widget', 'ws-theme-addons' ),
			);

			$ws_theme_addons_custom_control_weather_widget = array(
				'id_base' => 'ws-theme-addons-custom-weather-widget',
			);

			parent::__construct(
				'ws-theme-addons-custom-weather-widget', // Base ID
				__( 'WS Weather Widget', 'ws-theme-addons' ), // Name.
				$ws_theme_addons_weather_widget,
				$ws_theme_addons_custom_control_weather_widget
            );

            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_public_scripts' ) );
		}
		/**
		 * Widget Form Function.
		 *
		 * @param array $instance Instance.
		 * @return void
		 */
		function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, $this->defaults );

			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title', 'ws-theme-addons' ); ?>:</label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
			</p>

            <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'location' ) ); ?>"><?php esc_html_e( 'City', 'ws-theme-addons' ); ?>:</label>
				<input  placeholder="<?php esc_html_e( 'Enter Your City..', 'ws-theme-addons' ) ?>" type="text" id="<?php echo esc_attr( $this->get_field_id( 'location' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'location' ) ); ?>" value="<?php echo esc_attr( $instance['location'] ); ?>" class="widefat" />
			</p>
        
        <?php 

		}
		/**
		 * Update Widget
		 *
		 * @param array $new_instance New instance.
		 * @param array $old_instance Old Instance.
		 * @return array $instance Modified Instance.
		 */
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

            $instance['title']    = sanitize_text_field( $new_instance['title'] );
            
            $instance['location']    = sanitize_text_field( $new_instance['location'] );


			return $instance;
		}
		/**
		 * Widget Render
		 *
		 * @param array $args Arguments Array.
		 * @param array $instance WidgetInstance.
		 * @return void
		 */
		function widget( $args, $instance ) {
			// Merge with defaults.
            $instance = wp_parse_args( (array) $instance, $this->defaults );
            
            $title = @$instance['title'];

			$location = @$instance['location'];

			$rand = rand();

			if ( empty( $location ) ) : ?>

				<div class="weather" id="weather-<?php echo $rand; ?>"><span class="weather-no-locale"><strong><?php esc_html_e( 'Location Not Set', 'ws-theme-addons' ); ?></strong></span></div>

			<?php 

				return;

			endif;
			
			echo $args['before_widget'];
					   
				echo $args['before_title']; 
				   
				   echo esc_html( $title );

				echo $args['after_title'];
		 
			?>
			   	<!-- Docs at http://http://simpleweatherjs.com -->
				<div class="weather" id="weather-<?php echo $rand; ?>"></div>
					<div class="input-group input-group-sm">
						<input class="form-control" id="cityName-<?php echo $rand; ?>" type="text" placeholder="Enter a City">
						<span class="input-group-btn">
						<button class="btn btn-default" id="sub-<?php echo $rand; ?>"><?php esc_html_e('Search', 'ws-theme-addons'); ?></button></span>
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
			echo $args['after_widget'];
        }

        /**
         * Public Scripts 
         */
        function enqueue_public_scripts(){

			wp_enqueue_script( 'simple-weather-js','//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js', array('jquery'), '', true );

           wp_enqueue_style( 'ws-weather-widget-public-css', plugin_dir_url( WS_THEME_ADDONS_PLUGIN_FILE ) . 'inc/modules/widgets/weather-widget/assets/public.css' );

        }

	}
endif;

if ( ! function_exists( 'ws_theme_addons_register_weather_widget' ) ) :
	/**
	 * Registers the widget
	 *
	 * @since 1.0.0
	 */
	function ws_theme_addons_register_weather_widget() {
		register_widget( 'WS_Theme_Addons_Weather_Widget' );
	}

endif;

add_action( 'widgets_init', 'ws_theme_addons_register_weather_widget' );
