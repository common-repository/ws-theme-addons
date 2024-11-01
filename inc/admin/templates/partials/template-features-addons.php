<?php
/**
 * Admin Features and Addons.
 *
 * @package WS Theme Addons
 */

?>

<div class="wrap">

<div class="col ws-centered">

	<div class="ws-settings-section">

		<h1 class="ws-theme-tab-title" ><?php echo esc_html( 'Widgets and Layout Options', 'ws-theme-addons' ); ?></h1>

		<div class="ws-theme-addon-setting clearfix">

			<div class="ws-theme-addons-setting-label-wrap">
				<label class="ws-theme-addon-setting-label" for="checkbox-enable-insta"><?php esc_html_e( 'Enable Instagram Widget', 'ws-theme-addons' ); ?></label><br>
				<span class="info-block" ><i><?php echo esc_html( 'A new Instagram Feed Widget will be available in widgets page that can be placed in widgets areas in your theme.', 'ws-theme-addons' ); ?></i></span>
			</div>
			
			<label for="checkbox-enable-insta" class="switch">
				<input class="wta-has-sub" id="checkbox-enable-insta" name="ws_theme_addons_settings[instagram_enable]" type="checkbox" <?php if ( isset( $ws_theme_addons_saved_settings['instagram_enable'] ) ) { echo 'checked' ; } ?>>
				<span class="slider round"></span>
			</label>

			<div class="instagram-sub-options sub-options clearfix">
				<label for="instagram-consumer-key" class=""><strong><i><?php esc_html_e( 'Instagram App Access Token', 'ws-theme-addons' ); ?></i></strong>
				<span class="info-block" ><i><?php echo esc_html( '(Optional)', 'ws-theme-addons' ); ?></i></span><br><br>
				<span class="info-block" ><b><?php echo esc_html( 'Generate & Copy Your Instagram Access Token : ', 'ws-theme-addons' ) . '<a target="_blank" href="' . esc_url('https://instagram.pixelunion.net') . '">' . esc_html( 'Click Here', 'ws-theme-addons' ) . '</a>'; ?></b></span>
				</label>
				<input id="instagram-consumer-key" name="ws_theme_addons_settings[instagram][insta_access_token]" type="text" value="<?php echo ! empty( $ws_theme_addons_saved_settings['instagram']['insta_access_token'] ) ? $ws_theme_addons_saved_settings['instagram']['insta_access_token'] : ''; ?>">
			</div>
		
		</div>

		<div class="ws-theme-addon-setting clearfix">

			<div class="ws-theme-addons-setting-label-wrap">
				<label class="ws-theme-addon-setting-label" for="checkbox-enable-fb-widget"><?php esc_html_e( 'Enable Facebook Page Feed Widget', 'ws-theme-addons' ); ?></label><br>
				<span class="info-block" ><i><?php echo esc_html( 'A new Facebook Feed Widget will be available in widgets page that can be placed in widgets areas in your theme.', 'ws-theme-addons' ); ?></i></span>
			</div>
			
			<label for="checkbox-enable-fb-widget" class="switch">
				<input  class="wta-has-sub" id="checkbox-enable-fb-widget" name="ws_theme_addons_settings[fb_widget_enable]" type="checkbox" <?php if ( isset( $ws_theme_addons_saved_settings['fb_widget_enable'] ) ) { echo 'checked' ; } ?>>
				<span class="slider round"></span>
			</label>

			<div class="facebook-sub-options sub-options clearfix">
				<label for="facebook-consumer-key" class=""><strong><i><?php esc_html_e( 'Facebook App Access Token', 'ws-theme-addons' ); ?></i></strong>
				</label>
				<input id="facebook-consumer-key" name="ws_theme_addons_settings[facebook][consumer_key]" type="text" value="<?php echo ! empty( $ws_theme_addons_saved_settings['facebook']['consumer_key'] ) ? $ws_theme_addons_saved_settings['facebook']['consumer_key'] : ''; ?>">
			</div>
		
		</div>

		<div class="ws-theme-addon-setting clearfix">

			<div class="ws-theme-addons-setting-label-wrap">
				<label class="ws-theme-addon-setting-label" for="checkbox-enable-twitter-widget"><?php esc_html_e( 'Enable Twitter Feed Widget', 'ws-theme-addons' ); ?></label><br>
				<span class="info-block" ><i><?php echo esc_html( 'A new Twitter Feed Widget will be available in widgets page that can be placed in widgets areas in your theme.', 'ws-theme-addons' ); ?></i></span>
			</div>
			
			<label for="checkbox-enable-twitter-widget" class="switch">
				<input class="wta-has-sub" id="checkbox-enable-twitter-widget" name="ws_theme_addons_settings[twitter_widget_enable]" type="checkbox" <?php if ( isset( $ws_theme_addons_saved_settings['twitter_widget_enable'] ) ) { echo 'checked' ; } ?>>
				<span class="slider round"></span>
			</label>
				<div class="twitter-sub-options sub-options clearfix">
						<label for="twitter-consumer-key" class=""><strong><i><?php esc_html_e( 'Twitter App Consumer key', 'ws-theme-addons' ); ?></i></strong>
						</label>
						<input id="twitter-consumer-key" name="ws_theme_addons_settings[twitter][consumer_key]" type="text" value="<?php echo ! empty( $ws_theme_addons_saved_settings['twitter']['consumer_key'] ) ? $ws_theme_addons_saved_settings['twitter']['consumer_key'] : ''; ?>">

						<label for="twitter-consumer-secret" class=""><strong><i><?php esc_html_e( 'Twitter App Consumer Secret', 'ws-theme-addons' ); ?></i></strong>
						</label>
						<input id="twitter-consumer-secret" name="ws_theme_addons_settings[twitter][consumer_secret]" type="text" value="<?php echo ! empty( $ws_theme_addons_saved_settings['twitter']['consumer_secret'] ) ? $ws_theme_addons_saved_settings['twitter']['consumer_secret'] : '';  ?>">

						<label for="twitter-access-token" class=""><strong><i><?php esc_html_e( 'Twitter App Access Token', 'ws-theme-addons' ); ?></i></strong>
						</label>
						<input id="twitter-access-token" name="ws_theme_addons_settings[twitter][access_token]" type="text" value="<?php echo ! empty( $ws_theme_addons_saved_settings['twitter']['access_token'] ) ? $ws_theme_addons_saved_settings['twitter']['access_token'] : '';  ?>">

						<label for="twitter-access-token-secret" class=""><strong><i><?php esc_html_e( 'Twitter App Access Token Secret', 'ws-theme-addons' ); ?></i></strong>
						</label>
						<input id="twitter-access-token-secret" name="ws_theme_addons_settings[twitter][access_token_secret]" type="text" value="<?php  echo ! empty( $ws_theme_addons_saved_settings['twitter']['access_token_secret'] ) ? $ws_theme_addons_saved_settings['twitter']['access_token_secret'] : ''; ?>">
						
				</div>
		
		</div>

	</div>

	<hr>
	<div class="ws-theme-addons-save-wrap">
		<div>
			<input type="submit" name="ws_theme_addons_save_settings_submit" value="<?php esc_html_e( 'Save Changes', 'ws-theme-addons' ); ?>" class="button button-primary"/>
		</div>
	</div>

</div><!-- .two-col -->
</div>

<?php
