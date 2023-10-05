<?php
use CodeByPanduro\Theme\Setup;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/theme.php';

function setup_theme() {
    theme()
        ->headlessSetup();
}

add_action('after_setup_theme', 'setup_theme');
