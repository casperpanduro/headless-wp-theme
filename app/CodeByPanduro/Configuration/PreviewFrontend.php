<?php
namespace CodeByPanduro\Configuration;

class PreviewFrontend {
    public static function previewFrontend() {
        // if clicked preview button in wp admin, then redirect to frontend preview
         if (isset($_GET['preview'])) {
            // redirect to wp admin url
            if(SetupFrontendUrl::get()) {
                wp_redirect(SetupFrontendUrl::get() . '/?p=' . $_GET['p'] . '&preview=true');
            } else {
                wp_redirect(admin_url());
            }
            exit();
        }
    }
}
