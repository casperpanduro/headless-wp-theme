<?php
namespace CodeByPanduro\RestApi;

use WP_REST_Response;

/**
 * Register endpoint for settings in WordPress
 */
class Settings implements RestApiInterface {

    /**
     * Register settings endpoint
     * @return void
     */
    public static function register(): void
    {
        register_rest_route('wp/v2', '/settings', [
            'methods' => 'GET',
            'callback' => [(new self), 'getSettings']
        ]);
    }

    /**
     * Format settings
     * @return WP_REST_Response
     */
    public function getSettings(): WP_REST_Response {
        return new WP_REST_Response([
            'siteName' => get_bloginfo('name'),
            'siteDescription' => get_bloginfo('description'),
            'adminUrl' => admin_url(),
            'siteLogo' => get_custom_logo(),
            'siteIcon' => get_site_icon_url(),
            'frontPageType' => get_option('show_on_front'),
            'frontPage' => (int) get_option('page_on_front'),
            'config' => array(
                'siteLanguage' => get_bloginfo('language'),
                'timeZone' => get_option('timezone_string'),
                'date' => get_option('date_format'),
                'time' => get_option('time_format'),
            )
        ], 200);
    }
}
