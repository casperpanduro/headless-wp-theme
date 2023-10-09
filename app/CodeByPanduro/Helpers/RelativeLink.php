<?php
namespace CodeByPanduro\Helpers;

/**
 * Get relative link
 * Useful for getting relative links for the frontend
 */
class RelativeLink {

    /**
     * Get relative link
     * @param string $link
     * @return string
     */
    public static function get(string $link): string {
        $homeUrl = get_home_url();
        return str_replace($homeUrl, '', $link);
    }
}
