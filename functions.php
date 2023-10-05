<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/theme.php';

add_action('after_setup_theme', function() {
    theme()
        ->headlessSetup();
});

// register custom post types
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

