<?php
namespace CodeByPanduro\Configuration;

class AllowSvgUpload {
    public static function register(): void {
        add_filter('upload_mimes', function ($mimes) {
            $mimes['svg'] = 'image/svg+xml';
            return $mimes;
        });
    }
}
