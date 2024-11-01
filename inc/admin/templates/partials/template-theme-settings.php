<?php
/**
 * Theme Options / Settings
 *
 * @package WS_Theme_Addons
 */
$footer_copyright_txt = __( '&copy; All Rights Reserved.', 'ws-theme-addons' );
if ( function_exists( 'travel_log_get_theme_option' ) ) {
	$footer_copyright_txt = travel_log_get_theme_option( 'footer_copyright_txt' );
}

?>
<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.4/quill.js"></script>
<div class="wrap">

	<div class="col ws-centered">

		<div class="ws-settings-section">

			<h1 class="ws-theme-tab-title" ><?php echo esc_html( 'Footer Options', 'ws-theme-addons' ); ?></h1>

			<div class="ws-theme-setting clearfix">

				<div class="ws-theme-setting-label-wrap">
					<label class="ws-theme-setting-label" for="footer-copyright-text"><?php esc_html_e( 'Footer Copyright Text', 'ws-theme-addons' ); ?></label><br>
					<span class="info-block" ><i><?php echo esc_html( 'You can customize theme footer copyright info as per your requirements.', 'ws-theme-addons' ); ?></i></span>
				</div>
				
				<div id="toolbar">
				<span class="ql-formats">
					<!-- Add buttons as you would before -->
					<button title="<?php esc_html_e( 'Bold', 'ws-theme-addons' ); ?>" class="ql-bold"></button>
					<button title="<?php esc_html_e( 'Make Text Itallic', 'ws-theme-addons' ); ?>" class="ql-italic"></button>
					<button title="<?php esc_html_e( 'Insert Link', 'ws-theme-addons' ); ?>" class="ql-link"></button>
				</span>

				<span class="ql-formats">

					<!-- But you can also add your own -->
					<button title="<?php esc_html_e( 'Add Copyright icon', 'ws-theme-addons' ); ?>" id="btn-copyright">&#169;</button>
					<button title="<?php esc_html_e( 'Add current Year', 'ws-theme-addons' ); ?>" id="btn-year"><?php esc_html_e( 'Year', 'ws-theme-addons' ); ?></button>
					<button title="<?php esc_html_e( 'Insert Site Name', 'ws-theme-addons' ); ?>" id="btn-sitename"><?php esc_html_e( 'Site Name', 'ws-theme-addons' ); ?></button>
					<button title="<?php esc_html_e( 'Insert Site URL', 'ws-theme-addons' ); ?>" id="btn-siteurl"><?php esc_html_e( 'Site URL', 'ws-theme-addons' ); ?></button>

				</span>
				</div>
				<input name="ws_theme_addons_settings[footer_copyright_text]" id="ws-theme-addons-footer-copyright" type="hidden">
					<?php 
						$footer_copyright = isset( $ws_theme_addons_saved_settings['footer_copyright_text'] ) ? 
						$ws_theme_addons_saved_settings['footer_copyright_text'] :
						 $footer_copyright_txt . '<p>Proudly powered by <a href="https://wordpress.org/">WordPress</a><span class="sep"> | </span>Travel Log by <a href="https://wensolutions.com/" rel="designer">WEN Solutions</a>.</p>';
					?>
					<div id="ws-footer-copyright">
						<?php echo $footer_copyright; ?>
					</div>
			
			</div>
		</div>
		<hr>
		<div class="ws-theme-addons-save-wrap">
		  <div>
			<input type="submit" name="ws_theme_addons_save_settings_submit" value="<?php esc_html_e( 'Save Changes', 'ws-theme-addons' ); ?>" class="button button-primary"/>
		  </div>
		</div>
	</div>

</div>

<!-- Initialize Quill ws-footer-copyright -->
<script>
  var quill = new Quill('#ws-footer-copyright', {
	modules: {
	  toolbar: '#toolbar'
	},
	theme: 'snow',
	placeholder: '<?php echo esc_html( $footer_copyright_txt ); ?>'
  });
  
  //Copyright Button Callback.
  var customButton = document.querySelector('#btn-copyright');
  customButton.addEventListener('click', function(e) {
	e.preventDefault();
	var range = quill.getSelection();
	if (range) {
	  quill.insertText(range.index, "©");
	}
  });

  //year Button Callback.
  var customButton = document.querySelector('#btn-year');
  customButton.addEventListener('click', function(e) {
	e.preventDefault();
	var range = quill.getSelection();
	if (range) {
	  quill.insertText(range.index, "[year]");
	}
  });

  //year Button Callback.
  var customButton = document.querySelector('#btn-sitename');
  customButton.addEventListener('click', function(e) {
	e.preventDefault();
	var range = quill.getSelection();
	if (range) {
	  quill.insertText(range.index, "[site_name]");
	}
  });

  //year Button Callback.
  var customButton = document.querySelector('#btn-siteurl');
  customButton.addEventListener('click', function(e) {
	e.preventDefault();
	var range = quill.getSelection();
	if (range) {
	  quill.insertText(range.index, "[site_url]");
	}
  });

</script>
