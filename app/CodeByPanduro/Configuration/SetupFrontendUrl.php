<?php
namespace CodeByPanduro\Configuration;

class SetupFrontendUrl {
    public static function get() {
        // if constant is defined, use that
        if(isset($_GET['preview'])) {
            return self::preview();
        } else {
            return self::frontend();
        }
    }

    public static function frontend() {
        if(defined('WP_FRONTEND_URL')) {
            return WP_FRONTEND_URL;
        } else {
            return 'http://localhost:3000';
        }
    }

    public static function preview() {
        return (new self)::frontend() . '/?preview_nonce=' . $_GET['preview_nonce'] . '&preview=true'. '&preview_id='.$_GET['preview_id'];
    }
}
