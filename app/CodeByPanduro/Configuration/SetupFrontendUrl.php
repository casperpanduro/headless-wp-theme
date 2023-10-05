<?php
namespace CodeByPanduro\Configuration;

class SetupFrontendUrl {
    public static function get() {
        // if constant is defined, use that
        if(defined('WP_FRONTEND_URL')) {
            return WP_FRONTEND_URL;
        } else {
            return 'http://localhost:3000';
        }
    }
}
