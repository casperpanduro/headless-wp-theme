<?php

namespace CodeByPanduro\Theme;
use CodeByPanduro\RestApi\Menu;

class RegisterRestApi {
    public static function menu(): void {
        Menu::register();
    }
}
