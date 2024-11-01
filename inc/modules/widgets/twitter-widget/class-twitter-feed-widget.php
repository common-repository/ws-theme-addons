<?php
/**
 * Facebook Widget / Images
 *
 * @package WS Theme Addons
 */

if ( ! class_exists( 'WS_Theme_Addons_Twitter_Widget' ) ) :
	/**
	 * Instragram Widget Main class.
	 *
	 */
	class WS_Theme_Addons_Twitter_Widget extends WP_Widget {

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

            $this->includes();

			$this->defaults = array(
				'title'    => __( 'Twitter Feed', 'ws-theme-addons' ),
				'username' => '',
				'num_tweets' => 10,
				'display_profile_header' => 1,
			);

			$ws_theme_addons = array(
				'classname'   => 'ws_theme_addons widget_twitter',
				'description' => __( 'Display Your Twitter Feeds in Widget Locations', 'ws-theme-addons' ),
			);

			$ws_theme_addons_custom_control_facebook = array(
				'id_base' => 'ws-theme-addons-custom-twitter',
			);

			parent::__construct(
				'ws-theme-addons-custom-twitter', // Base ID
				__( 'WS Twitter Widget', 'ws-theme-addons' ), // Name.
				$ws_theme_addons,
				$ws_theme_addons_custom_control_facebook
			);
		}
		/**
		 * Widget Form Function.
		 *
		 * @param array $instance Instance.
		 * @return void
		 */
		function form( $instance ) {

			$instance = wp_parse_args( (array) $instance, $this->defaults );

			$ws_theme_addons_saved_settings = get_option( 'ws_theme_addons_admin_settings' );
			
				$twitter_creds = $ws_theme_addons_saved_settings['twitter'];

				if( empty( $twitter_creds ) ) {

					echo "No Credentials available";

					return;
				}
				
				$app = array(
					'consumer_key'        => $twitter_creds['consumer_key'],
					'consumer_secret'     => $twitter_creds['consumer_secret'],
					'access_token'        => $twitter_creds['access_token'],
					'access_token_secret' => $twitter_creds['access_token_secret'],
				);
	
					// initiate your app
					$TwitterWP = TwitterWP::start( $app );
	
					$user = esc_html( $instance['username'] );

				if( ! empty( $user ) ) :
	
					// bail here if the user doesn't exist
					if ( ! $TwitterWP->user_exists( $user ) ) {
						
						echo "Invalid Username";
					
					}
				
				endif;
			
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title', 'ws-theme-addons' ); ?>:</label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>"><?php esc_html_e( 'Twitter Handle ( without "@" )', 'ws-theme-addons' ); ?>:</label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'username' ) ); ?>" value="<?php echo esc_attr( $instance['username'] ); ?>" class="widefat" />
			</p>


			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'num_tweets' ) ); ?>"><?php esc_html_e( 'Number of Tweets', 'ws-theme-addons' ); ?>:</label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'num_tweets' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_tweets' ) ); ?>" value="<?php echo esc_attr( $instance['num_tweets'] ); ?>" class="widefat" />
			</p>

			<p>
				<input class="checkbox" type="checkbox" <?php checked( $instance['display_profile_header'] ) ?> id="<?php echo esc_attr( $this->get_field_id( 'display_profile_header' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_profile_header' ) ); ?>" />
				<label for="<?php echo esc_attr( $this->get_field_id('display_profile_header' ) ); ?>"><?php _e( 'Check to display Profile Info in widget', 'ws-theme-addons' ); ?></label><br />
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
			$instance['username'] = sanitize_text_field( $new_instance['username'] );
			$instance['num_tweets'] = absint( $new_instance['num_tweets'] );
			$instance['display_profile_header']   = isset( $new_instance['display_profile_header'] ) ? 1 : 0;
			

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

			$widget_title = @$instance['title'];

			$username = @$instance['username'];

			$number_of_tweets = ! empty( $instance['num_tweets'] ) ? absint( $instance['num_tweets'] ) : 10 ;

			$ws_theme_addons_saved_settings = get_option( 'ws_theme_addons_admin_settings' );

			$twitter_creds = $ws_theme_addons_saved_settings['twitter'];
            
            $app = array(
                'consumer_key'        => $twitter_creds['consumer_key'],
                'consumer_secret'     => $twitter_creds['consumer_secret'],
                'access_token'        => $twitter_creds['access_token'],
				'access_token_secret' => $twitter_creds['access_token_secret'],
			);

				// initiate App
				$TwitterWP = TwitterWP::start( $app );

				$user = esc_html( $username );

				// bail here if the user doesn't exist
				if( empty( $user ) || ! $TwitterWP->user_exists( $user ) ) {

					return;
				
				}
				
				$tweets = $TwitterWP->get_tweets( $user, $number_of_tweets );
				
				// Check for errors in response.
				if ( is_wp_error( $tweets ) || ! isset( $tweets[0]->user ) ) {

					return; 
				}

			$user = $tweets[0]->user;

			$user_profile_link = 'https://twitter.com/' . urlencode( $user->screen_name );

			$profile_image = 'https://twitter.com/'. urlencode( $user->screen_name ).'/profile_image?size=original';

			?> 
            <section id="ws-theme-addons-custom-twiter-*" class="widget ws_theme_addons_widget ws_theme_addons_Twitter widget_Twitter clearfix">
				<h2 class="widget-title"><?php echo esc_html( $widget_title ); ?></h2>
				
				<div class="widget-wrap">
				
				<?php if ( isset( $instance['display_profile_header'] ) && 1 == $instance['display_profile_header']  ) { ?>
					<div class="twetter-feed-wrapper">
						
						<div class="twitter-feed-wrapper-header twitter-top-header clearfix">
							<div class="twitter-header-left">
								<span class="twitter-feed-profile-image">
									<img src="<?php echo( esc_url( $profile_image ) ) ?>" width="80" height="80" alt="" >
								</span>
							</div>
							<div class="twitter-header-middle">
								<a target="_blank" href="<?php echo esc_url($user_profile_link); ?>" class="js-tooltip" target="_blank" title="Verified account">
									<span class="TweetAuthor-decoratedName"><strong><?php echo( esc_html( $user->name ) ) ?></strong></span>
								<?php if ( $user->verified == 1 ) :  ?>
									<span class="Icon Icon--verified"></span></a>
								<?php endif; ?>
									
								<a target="_blank" href="<?php echo esc_url($user_profile_link); ?>" class="ProfileHeaderCard-screenname">
									<span class="TweetAuthor-screenName Identity-screenName">@<?php echo( esc_html( $user->screen_name ) ) ?></span>
								</a>
								<a class="user-popover-link twitter-follow-button" class="twitter-follow-button" target="_blank" href="https://twitter.com/intent/follow?screen_name=<?php echo( esc_html( $user->screen_name ) ) ?>" data-size="large">
										<span class="dashicons dashicons-businessman"></span>
										<span class="dashicons dashicons-plus"></span> 
								</a>
								<p class="ProfileHeaderCard-bio u-dir"><?php echo self::format_tweet( $user->description ) ?></p>
								<a target="_blank" class="ProfileHeaderCard-url twitter-link-text" href="<?php echo esc_url($user_profile_link); ?>"><?php echo esc_url($user_profile_link); ?></a>
							</div>
						</div>
						<div class="twitter-feed-bottom clearfix">
							<span class="twitter-no-of-tweets">
							<?php echo esc_html__('Tweets', 'ws-theme-addons'); ?><a target="_blank" href="<?php echo esc_url($user_profile_link); ?>/tweets" class="twitter-link-text"><?php echo( esc_html( self::simplifiedNumber( $user->statuses_count ) ) ) ?></a>
							</span>
							<span class="twitter-no-of-followers">
								<?php echo esc_html__('Followers', 'ws-theme-addons'); ?><a target="_blank" href="<?php echo esc_url($user_profile_link); ?>/followers" class="twitter-link-text"><?php echo( esc_html( self::simplifiedNumber( $user->followers_count ) ) ) ?></a>
							</span>
							<span class="twitter-no-of-followinf">
							<?php echo esc_html__('Following', 'ws-theme-addons'); ?><a target="_blank" href="<?php echo esc_url($user_profile_link); ?>/following" class="twitter-link-text"><?php echo( esc_html( self::simplifiedNumber( $user->friends_count ) ) ) ?></a>
							</span>
						</div>
							
						
					</div>
				<?php } ?>
				    <ul class="full-width">
						<?php foreach ( $tweets as $tweet ) : ?>
                    <?php
						$user_url = 'http://twitter.com/' . urlencode( $tweet->user->screen_name );

						$tweet_url = 'https://twitter.com/i/web/status/'. urlencode( $tweet->id );

						$tweet_reply_url = 'https://twitter.com/intent/tweet?in_reply_to=' . urlencode( $tweet->id );

						$retweet_url = 'https://twitter.com/intent/retweet?tweet_id=' . urlencode( $tweet->id );

						$like_tweet_url = 'https://twitter.com/intent/like?tweet_id=' . urlencode( $tweet->id );
						
                    ?>
                    <li>
                    	<div class="col-half ws-widget__comment">
                    		<div class="twitter-feed-wrapper-header clearfix">
                    			<div class="twitter-header-left">
								<span class="twitter-feed-profile-image">
									<img src="<?php echo esc_url($tweet->user->profile_image_url_https);?>" width="40" height="40">
								</span>
                    		</div>	
						   	<div class="col-half-header twitter-header-middle-tweets clearfix">
						   		
								<span class="twitter-name ws-wigdet__comment__author"><strong><a href="<?php echo esc_url( $user_url ) ?>" target="_blank"><?php echo self::format_tweet( $tweet->user->name )  // WPCS: XSS OK. ?></a></strong><a href="<?php echo esc_url( $user_url ) ?>" target="_blank"><?php echo esc_html( '@', 'ws-theme-addons' ) . ( $tweet->user->screen_name ) // WPCS: XSS OK. ?></a></span><span class="twitter-posted-date"><a target="_blank" href="<?php echo esc_url( $tweet_url ) ?>"><?php echo esc_html( self::timeAgo($tweet->created_at) ) ?></a></span>

								<div class="col-half-content clearfix">
									<p class="ws-widget__comment__content">
										<span class="caption">
										<?php echo self::format_tweet( $tweet->text ); ?></span>
									</p>
									
								</div>
						  
						   	</div>
								 
								
						</div>
						<div class="twitter-feed-bottom clearfix">
							
								<a class="user-popover-link" href="<?php echo esc_url( $tweet_reply_url ); ?>" target="_blank">
									<span class="twitter-comment" title="Reply"></span>
								</a>
								<a class="user-popover-link" href="<?php echo esc_url( $retweet_url ); ?>" target="_blank">
									<span class="twitter-retweets" title="Retweet"></span>
								</a>
								<a class="user-popover-link" href="<?php echo esc_url( $like_tweet_url ); ?>" target="_blank">
									<span class="twitter-likes" title="Like"></span>
								</a>
						</div>
                       
                    </li>
                <?php endforeach ?>
			</ul>
		</div>
	</section>			
    
        <?php 
        }
        /**
         * Widget Required files includes
         *
         * @return void
         */
        function includes() {

            if ( ! class_exists( 'TwitterWP' ) ) {

                require_once plugin_dir_path( __FILE__ ) . '/inc/TwitterWP.php';
            
            }

		}
		/**
		 * Small helper to format tweet.
		 *
		 * @param  string $text
		 * @return string
		 */
		public static function format_tweet( $text ) {
			$text = make_clickable( $text );
			$text = preg_replace( '/@(\w+)/i', '<a target="_blank" href="' . esc_url( 'https://twitter.com' ) . '/$1">$0</a>', $text );

			return apply_filters( 'ws_format_tweet', $text );
		}
		/**
		 * 1            1       1
		 * 100          100     100
		 * 1000         1k      1k
		 * 1200         1.2k    1.2k
		 * 1289         1.3k    1.29k
		 * 12340        12k     12.3k
		 * 123456       123k    123k
		 * 1234567      1.2m    1.23m
		 * 12345678     12m     12.3m
		 * 
		 * @param int $number
		 * @param type $precision 
		 */
		public static function simplifiedNumber($number, $precision = 2){
			$suffixes = array('k', 'M');
			$suffix = '';
			while($number >= 1000 && count($suffixes)){
				$suffix = array_shift($suffixes);
				$number /= 1000;    // 1.289 | 12.345 | 123.456
			}
			$num = $number;
			while ($precision){
				$num /= 10;
				$precision--;
				if($num < 1){
					break;
				}
			}
			
			$number = round($number, $precision);
			
			return $number.$suffix;
		}
		public static function timeAgo($datetime){
			$datetime = new DateTime( $datetime );
			$datetime1=new DateTime("now");
			$diff=date_diff($datetime1, $datetime);
			$timemsg='';
			if($diff->y > 0){
				$timemsg = $diff->y .' year'. ($diff->y > 1?"s":'');
		
			}
			else if($diff->m > 0){
			 $timemsg = $diff->m . ' month'. ($diff->m > 1?"s":'');
			}
			else if($diff->d > 0){
			 $timemsg = $diff->d .' day'. ($diff->d > 1?"s":'');
			}
			else if($diff->h > 0){
			 $timemsg = $diff->h .' hour'.($diff->h > 1 ? "s":'');
			}
			else if($diff->i > 0){
			 $timemsg = $diff->i .' minute'. ($diff->i > 1?"s":'');
			}
			else if($diff->s > 0){
			 $timemsg = $diff->s .' second'. ($diff->s > 1?"s":'');
			}
		
		$timemsg = $timemsg.' ago';
		return $timemsg;
		}
	}
endif;

if ( ! function_exists( 'ws_theme_addons_register_twitter_widget' ) ) :
	/**
	 * Registers the widget
	 *
	 * @since 1.0.0
	 */
	function ws_theme_addons_register_twitter_widget() {
		register_widget( 'WS_Theme_Addons_Twitter_Widget' );
	}

endif;

add_action( 'widgets_init', 'ws_theme_addons_register_twitter_widget' );

