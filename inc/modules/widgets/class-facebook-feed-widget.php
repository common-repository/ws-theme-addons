<?php
/**
 * Facebook Widget / Images
 *
 * @package WS Theme Addons
 */

if ( ! class_exists( 'WS_Theme_Addons_Facebook_Widget' ) ) :
	/**
	 * Instragram Widget Main class.
	 *
	 */
	class WS_Theme_Addons_Facebook_Widget extends WP_Widget {

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
				'title'    => __( 'Facebook Photos', 'ws-theme-addons' ),
				'page_id' => '',
				'num_fb_feed'   => 10,
				'display_profile_header'   => 1,
			);

			$ws_theme_addons = array(
				'classname'   => 'ws_theme_addons widget_facebook',
				'description' => __( 'Display Your Instagram Photos in Widget Locations', 'ws-theme-addons' ),
			);

			$ws_theme_addons_custom_control_facebook = array(
				'id_base' => 'ws-theme-addons-custom-facebook',
			);

			parent::__construct(
				'ws-theme-addons-custom-facebook', // Base ID
				__( 'WS Facebook Widget', 'ws-theme-addons' ), // Name.
				$ws_theme_addons,
				$ws_theme_addons_custom_control_facebook
			);

			add_action( 'wp_enqueue_scripts', array( $this, 'scripts_enqueue' ) );
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
				<label for="<?php echo esc_attr( $this->get_field_id( 'page_id' ) ); ?>"><?php esc_html_e( 'Facebook Page ID', 'ws-theme-addons' ); ?>:</label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'page_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'page_id' ) ); ?>" value="<?php echo esc_html( $instance['page_id'] ); ?>" class="widefat" />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'num_fb_feed' ) ); ?>"><?php esc_html_e( 'Number of Posts to Fetch', 'ws-theme-addons' ); ?>:</label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'num_fb_feed' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_fb_feed' ) ); ?>" value="<?php echo esc_attr( $instance['num_fb_feed'] ); ?>" class="widefat" />
			</p>

			<p>
				<input class="checkbox" type="checkbox" <?php checked( $instance['display_profile_header'] ) ?> id="<?php echo esc_attr( $this->get_field_id( 'display_profile_header' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_profile_header' ) ); ?>" />
				<label for="<?php echo esc_attr( $this->get_field_id('display_profile_header' ) ); ?>"><?php _e( 'Check to display Page Info header in widget', 'ws-theme-addons' ); ?></label><br />
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
			$instance['page_id'] = esc_html( $new_instance['page_id'] );
			$instance['num_fb_feed']   = absint( $new_instance['num_fb_feed'] );
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

			$ws_theme_addons_saved_settings = get_option( 'ws_theme_addons_admin_settings' );

			$fb_access_token = $ws_theme_addons_saved_settings['facebook']['consumer_key'];

			$limit = @$instance['num_fb_feed'];

			$p_id = absint($instance['page_id']);
            
				$access_token   = $fb_access_token;
				
				$profile = $this->get_fb_page_profile( $p_id, $access_token );
            
				$fb_posts = $this->get_feed_posts( $p_id, $access_token , $limit );
				
				?>

				<section id="ws-theme-addons-custom-facebook-*" class="widget ws_theme_addons_widget ws_theme_addons_facebook widget_facebook clearfix">
				<h2 class="widget-title"><?php echo esc_html( $widget_title );?></h2>
				<div class="widget-wrap">
					
					<div class="facebook-feed-wrapper clearfix">
					
					<?php if ( 1 == $instance['display_profile_header'] ) : ?>
						<div class="facebook-feed-wrapper-header facebook-top-header clearfix">
							<?php if ( isset($profile['picture'] ) ) : ?>
								<div class="facebook-header-left">
									<span class="facebook-feed-profile-image">
										<img src="<?php echo esc_url( 'http://graph.facebook.com/'.$p_id.'/picture?type=large' ); ?>" width="80" height="80" alt="" >
									</span>
								</div>
							<?php endif; ?>
							<div class="facebook-header-middle">
							
							<?php if ( isset($profile['link'] ) ) : ?>

								<a target="_blank" href="<?php echo esc_url($profile['link']); ?>" class="js-tooltip" target="_blank" title="Verified account">
									<span class="facebookAuthor-decoratedName">
										<strong><?php echo esc_html( $profile['name'] ); ?></strong>
									</span>
									<?php if( 'blue_verified' === $profile['verification_status']  ) : ?>
										<span class="Icon Icon-fb-verified">
											<span class="dashicons dashicons-yes">
											</span>
										</span>
									<?php endif; ?>
								</a>
									
								<a target="_blank" href="<?php echo esc_url($profile['link']); ?>" class="ProfileHeaderCard-screenname">
									<span class="facebookAuthor-screenName Identity-screenName">@<?php echo esc_html( $profile['username'] )?></span>
								</a>
							
							<?php endif; ?>
								
								<div class="ProfileHeaderCard-bio u-dir">

								<?php if ( isset( $profile['phone'] ) ) : ?>
									
									<p><span class="fb-icons phone-icon"></span>  <span><a href="tel:<?php echo esc_attr( $profile['phone'] ) ?>" target="_blank" class="fb-target-links"><?php echo esc_html( $profile['phone'] ) ?></a></span></p>
								
								<?php endif; ?>

								<?php if ( isset( $profile['website'] ) ) : ?>
									
									<p><span class="fb-icons globe-icon"></span> <span><a href="<?php echo esc_url( $profile['website'] ) ?>" target="_blank" class="fb-target-links"><?php echo esc_html( $profile['website'] ) ?></a></span></p>
								
								<?php endif; ?>

								<?php if ( isset( $profile['category'] ) ) : ?>
									
									<p><span class="fb-icons type-icon"></span> <span><a href="<?php echo esc_url( $profile['link'] ); ?>" class="fb-target-links" target="_blank"><?php echo esc_html( $profile['category'] ) ?></a></span></p>
								
								<?php endif; ?>
								
								</div>
								
							</div>
							<?php if ( isset($profile['link'] ) ) : ?>
								<div class="facebook-feed-bottom clearfix">
									<span class="facebook-likes facebook-feed-bottom-icons">
										<a target="_blank" href="<?php echo esc_url( $profile['link'] ) ?>" class="facebook-like-icon"><span class="dashicons dashicons-thumbs-up"></span></a>
									</span>
									<span class="facebook-followers facebook-feed-bottom-icons">
										<a target="_blank" href="<?php echo esc_url( $profile['link'] ) ?>" class="facebook-follow-icon"><span class="dashicons dashicons-rss"></span></a>
									</span>
									<span class="facebook-share facebook-feed-bottom-icons">
										<a target="_blank" href="<?php echo esc_url( $profile['link'] ) ?>" class="facebook-share-icon"><span class="dashicons dashicons-share-alt2"></span></a>
									</span>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; 
					
					if ( isset( $fb_posts['data'] ) ) :
				
				?>
				   <ul class="full-width">
						
						<?php foreach ( $fb_posts['data'] as $key => $post )  : ?>
						
						<li>
						   <div class="col-half">
								<div class="col-half-header clearfix">
							   		<a href="<?php echo esc_url($profile['link']); ?>" target="_blank" class="fb-user-icon">
							   			<span class="fb-pp">
							   				<img width="32" height="32" src="<?php echo esc_url( $profile['picture']['data']['url'] ); ?>" title="">
							   			</span>
							   		</a>
								   <a href="<?php echo esc_url($profile['link']); ?>" target="_blank" class="fb-user-name">
									   	<span class="fb-name ">
									   		<strong><?php echo esc_html( $profile['name'] ); ?></strong>
									   	</span>
									   	 <span class="fb-posted-date">
									   		<time><?php echo esc_html( self::timeAgo($post['created_time'] ) ); ?></time>
									   	</span>
								   </a>
								  
								   <br />
								<?php if( isset( $post['message'] ) ) : ?>
								   	<span class="caption clearfix"><?php echo esc_html($post['message']); ?></span>
								<?php endif; ?>
								</div>
								<?php if ( isset( $post['full_picture'] ) ) : ?>
									<div class="col-half-content clearfix">
										<div class="facecbook-feed-img">
											<a href="<?php echo esc_url($post['link']); ?>" target="_blank"><img src="<?php echo esc_url($post['full_picture']); ?>" title=""></a>
										</div>
									</div>
								<?php endif; ?>
								<div class="col-half-footer clearfix">
									<div class="col-half-footer-info">
									<?php if ( isset( $post['reactions'] ) ) : ?>
										<span class="fb-react">
											<a href="<?php echo esc_url($post['link']); ?>" target="_blank">
											<i class="react-1"></i>
											<i class="react-2"></i>
											<i class="react-3"></i>
											</a> <?php echo self::simplifiedNumber($post['reactions']['summary']['total_count']); ?>

										</span>
									<?php endif; ?>
										<a href="<?php echo esc_url($post['link']); ?>" target="_blank">

										<?php if ( isset( $post['shares'] ) ) : ?>

											<span class="fb-share-num fb-footer-right"><?php echo self::simplifiedNumber($post['shares']['count']); ?><?php esc_html_e(' Shares', 'ws-theme-addons'); ?></span>

										<?php endif; ?>
										<?php if ( isset( $post['comments'] ) ) : ?>

											<span class="fb-comment-num fb-footer-right"><?php echo self::simplifiedNumber($post['comments']['summary']['total_count']); ?><?php esc_html_e(' Comments', 'ws-theme-addons'); ?></span>
										
										<?php endif; ?>
										
										</a>
									</div>
									<div class="facebook-bottom">
										
											<a href="<?php echo esc_url($post['link']); ?>" target="_blank">	
												<div class="facebook-bottom-icons" title="Like"><span class="fb-like"></span></div>
											</a>
											<a href="<?php echo esc_url($post['link']); ?>" target="_blank">
												<div class="facebook-bottom-icons" title="Comment"><span class="fb-comment"></span></div>
											</a>
											<a href="<?php echo esc_url($post['link']); ?>" target="_blank">
												<div class="facebook-bottom-icons" title="Share"><span class="fb-share"></span></div>
											</a>
										</a>
									</div>
								</div>
							</div>
						</li>
						
					<?php endforeach; ?>	
					</ul>
				<?php endif; ?>
				</div>
			</section>
<?php
		}

		public function get_feed_posts( $page_id, $access_token, $limit ) {

			if( empty( $limit ) ) {

				$limit = 20;
			}
	
			if ( $limit > 100 ) {
		
				$limit = 100; //Set maximum limit of posts in request
		
			}
				$link     = 'https://graph.facebook.com/' . $page_id . '/feed?fields=id,name,created_time,full_picture,link,reactions.limit(0).summary(total_count),comments.limit(0).summary(true),likes.limit(0).summary(true),shares,message&limit=' . $limit . '&access_token=' . $access_token;
		
				$response = wp_remote_retrieve_body( wp_remote_get( $link ) );
		
				$response = json_decode( $response, true );
		
				if ( isset( $response['error'] ) ) {
		
					//Error message
	
					return $response['error'];
		
				} else {
		
					//return data to use it
		
					return $response;
		
				}
		
		}

		public function get_fb_page_profile(  $page_id, $access_token  ){

			$temp_data = get_transient( 'fb_data_profile' . $page_id );
		
				//data expired.
	
				$link     = 'https://graph.facebook.com/' . $page_id . '/?fields=name,username,verification_status,link,phone,website,category,picture,id,bio&access_token=' . $access_token;
		
				$response = wp_remote_retrieve_body( wp_remote_get( $link ) );
		
				$response = json_decode( $response, true );
		
				if ( isset( $response['error'] ) ) {
		
					//Error message
	
					return $response['error'];
		
				} else {
		
					//return data to use it
		
					return $response;
		
				}

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

		/**
		 * Enqueue Widget Required Scripts.
		 *
		 * @return void
		 */
		public function scripts_enqueue(){

			wp_enqueue_script( 'ws-addon-fb-sdk-js', 'https://connect.facebook.net/en_US/sdk.js', array('jquery'), '', true );
		}
	}

endif;

if ( ! function_exists( 'ws_theme_addons_register_facebook_widget' ) ) :
	/**
	 * Registers the widget
	 *
	 * @since 1.0.0
	 */
	function ws_theme_addons_register_facebook_widget() {
		register_widget( 'WS_Theme_Addons_Facebook_Widget' );
	}

endif;

add_action( 'widgets_init', 'ws_theme_addons_register_facebook_widget' );

