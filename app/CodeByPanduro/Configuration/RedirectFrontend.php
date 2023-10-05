<?php
namespace CodeByPanduro\Configuration;

/**
 * RedirectFrontend
 *
 * @return void
 */
class RedirectFrontend {
    public function __construct() {
        add_action('template_redirect', [$this, 'redirectFrontend']);
    }

    public function redirectFrontend() {
        // because it is a headless theme, we don't want to show the frontend
        if (!is_admin()) {
            // redirect to wp admin url
            if(SetupFrontendUrl::get()) {
                wp_redirect(SetupFrontendUrl::get());

            } else {
                wp_redirect(admin_url());
            }
            exit();
        }
    }
}
