<?php
namespace CodeByPanduro\Configuration;

use CodeByPanduro\Helpers\Slugify;

class NavMenu {
    public static function register($name, $title) {
        register_nav_menus([
            Slugify::make($name) => __($title, 'wp-headless-theme'),
        ]);
    }
}
