<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/theme.php';

/**
 * Setup theme
 * Add your own functions to wp-content/themes/wp-headless-theme/app/CodeByPanduro/Theme/Setup.php
 */
add_action('after_setup_theme', function() {
    theme()
        ->headlessSetup()
        ->addMenu('main', 'Main Menu');
});

/**
 * Register custom post types
 */
add_action('init', function() {
    /**
     * This is an example of how to register a custom post type.
     */
    /**
    post_type()
        ->add('book')
        ->register();
     **/
});

/**
 * Register custom rest api endpoints
 */
add_action('rest_api_init', function () {
    rest_api()->menu();
});

