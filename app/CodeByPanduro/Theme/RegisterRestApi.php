<?php

namespace CodeByPanduro\Theme;
use CodeByPanduro\RestApi\Menu;

/**
 * Register custom rest api endpoints
 * @return RegisterRestApi
 */
class RegisterRestApi {
    /**
     * Register custom rest api endpoints
     * @return void
     */
    public static function menu(): void {
        Menu::register();
    }
}
