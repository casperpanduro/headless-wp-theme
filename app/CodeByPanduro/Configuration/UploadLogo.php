<?php
namespace CodeByPanduro\Configuration;

/**
 * Enable logo upload
 */
class UploadLogo {
    public static function register(): void {
        add_theme_support('custom-logo');
    }
}
