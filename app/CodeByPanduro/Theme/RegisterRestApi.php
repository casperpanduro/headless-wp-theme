<?php

namespace CodeByPanduro\Theme;
use CodeByPanduro\RestApi\Menu;
use CodeByPanduro\RestApi\Settings;

/**
 * Register custom rest api endpoints
 * @return RegisterRestApi
 */
class RegisterRestApi {
    /**
     * Register menu endpoints
     * @return void
     */
    public static function menu(): void {
        Menu::register();
    }

    /**
     * Register settings endpoints
     * @return void
     */
    public static function settings(): void
    {
        Settings::register();
    }
}
