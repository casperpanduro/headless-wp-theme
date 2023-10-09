<?php
namespace CodeByPanduro\Helpers;

class RelativeLink {
    public static function get(string $link) {
        $homeUrl = get_home_url();
        return str_replace($homeUrl, '', $link);
    }
}
