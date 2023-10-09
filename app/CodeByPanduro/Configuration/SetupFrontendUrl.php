<?php
namespace CodeByPanduro\Configuration;

/**
 * Setup frontend url
 */
class SetupFrontendUrl {

    /**
     * Returns frontend url, depending on if preview or not
     * @return string
     */
    public static function get(): string
    {
        // if constant is defined, use that
        if(isset($_GET['preview'])) {
            return self::preview();
        } else {
            return self::frontend();
        }
    }

    /**
     * Get frontend url
     * @return string
     */
    public static function frontend(): string
    {
        if(defined('WP_FRONTEND_URL')) {
            return WP_FRONTEND_URL;
        } else {
            return 'http://localhost:3000';
        }
    }

    /**
     * Get preview url
     * @return string
     */
    public static function preview(): string
    {
        return (new self)::frontend() . '/?preview_nonce=' . $_GET['preview_nonce'] . '&preview=true'. '&preview_id='.$_GET['preview_id'];
    }
}
