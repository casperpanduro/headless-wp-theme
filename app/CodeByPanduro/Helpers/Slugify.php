<?php
namespace CodeByPanduro\Helpers;

class Slugify {
    public static function make($string) {
        // Remove special characters and spaces
        $string = preg_replace('/[^\p{L}\p{N}\s-]/u', '', $string);

        // Replace spaces with dashes
        $string = preg_replace('/\s+/', '-', $string);

        // Convert to lowercase
        $string = mb_strtolower($string, 'UTF-8');

        // Remove consecutive dashes
        $string = preg_replace('/-+/', '-', $string);

        // Trim dashes from the beginning and end
        return trim($string, '-');
    }

    public static function makeWithPrefix($string, $prefix) {
        return $prefix . '-' . self::make($string);
    }

    public static function withUnderscore($string) {
        return str_replace('-', '_', self::make($string));
    }
}
