jQuery(document).ready(function ($) {
    "use strict";

    var page_template = jQuery('#page_template');

    // on click visual page editor button set page template "visual page"
    jQuery('#wp-content-media-buttons').on('click', '.button-primary', function () {
        page_template.val('visual-builder-template.php');
    });

    // on click default editor button set page template "default template"
    jQuery('#post-body').on('click', '.page-builder-hide-button', function(){
        page_template.val('default');
    });

    // on change page template hide header image option
    page_template.on('change', function () {
        if ( page_template.val() == 'default' ) {
            jQuery('.page-builder-hide-button').trigger('click');
        }
        else if( page_template.val() == 'visual-builder-template.php' ) {
            jQuery('#wp-content-media-buttons .button-primary').trigger('click');
        }
    });
});


jQuery(document).on('click', '.notice-dismiss', function () {
    // Read the "data-notice" information to track which notice
    // is being dismissed and send it via AJAX
    var type = jQuery(this).closest('.tf-custom-notice').data('notice');
    // Make an AJAX call
    // Since WP 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    jQuery.ajax(ajaxurl,
        {
            type: 'POST',
            data: {
                action: 'dismissed_demo_notice',
                type: type,
            }
        });
});

