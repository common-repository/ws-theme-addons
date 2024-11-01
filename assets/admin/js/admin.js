/**
 * Admin JS codes.
 * 
 * @package WS Theme Addons.
 * 
 */

jQuery(document).ready(function($) {

    $("#ws-theme-addons-tabs").tabs({
            activate: function(event, ui) {
                var active = $('#tabs').tabs('option', 'active');

            }
        }

    );

});

jQuery(function($) {

    // Enable on selected forms
    $('form#ws-theme-addons-settings-form-id').areYouSure();

});

//Show / Hide specific settings  :

jQuery(document).ready(function($) {
    if ($('#checkbox-enable-insta').is(':checked')) {
        $('.instagram-sub-options').show();
    } else {
        $('.instagram-sub-options').hide();
    }
    if ($('#checkbox-enable-fb-widget').is(':checked')) {
         $('.facebook-sub-options').show();
    } else {
        $('.facebook-sub-options').hide();
    }
    if ($('#checkbox-enable-twitter-widget').is(':checked')) {
         $('.twitter-sub-options').show();
    } else {
        $('.twitter-sub-options').hide();
    }
});

jQuery('.wta-has-sub').change(function($) { //on change do stuff
    jQuery(this).parent('.switch').siblings('.sub-options').slideToggle(500, 'linear');
});

jQuery(document).on('click', '.ws-close-save-settings-notice', function(event) {

    event.preventDefault();

    jQuery(this).parent('#ws-theme-addons-settings_updated').hide();

});

/**
 * Importer Action AJAX CALLS.
 */

jQuery(function($) {
    jQuery(document).on('click', '.ws-theme-demo-import-submit', function(event) {
        event.preventDefault();
        var url = ws_theme_addons_admin.url;
        swal({
                title: "Are you sure?",
                text: "Importing demo will import posts, pages and media files.It will clear all of your Theme Settings, Widgets and Nav menu Options",
                icon: "warning",
                buttons: true,
                dangerMode: false,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: url,
                        data: { 'action': 'ws-theme-addons-demo-import-action' }, // form data
                        type: 'POST', // POST
                        beforeSend: function(xhr) {

                            $('.ws-theme-demo-import-submit').hide();
                            $('#bod').show();
                            $('#bod-text').show();

                        },
                        success: function(data, status) {
                            // $('.ws-theme-demo-import-submit').text('Import Demo');
                            $('#bod').hide();
                            $('#bod-text').hide();
                            $('#response').html('<span class="success">Import Successful !! </span><a target="_blank"class="button button-primary"href="' + data.data["previewUrl"] + '">Visit Site</a>')
                        },
                        error: function(xhr, status, error) {
                            alert(status);
                        }
                    });
                } else {
                    swal("Demo Import Cancelled !");
                    return false;
                }
            });
    });

    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Populate hidden form on submit
        if (quill.getText().trim().length !== 0) {
            var copyright = document.querySelector('#ws-theme-addons-footer-copyright');
            var justHtml = quill.root.innerHTML;
            copyright.value = justHtml;
        }

    };

});