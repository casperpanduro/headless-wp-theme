<?php
use CodeByPanduro\Theme\Setup;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/CodeByPanduro/theme.php';

theme()
    ->disableComments()
    ->redirectFrontend();
