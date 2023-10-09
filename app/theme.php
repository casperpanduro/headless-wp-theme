<?php

use CodeByPanduro\Theme\RegisterPostTypes;
use CodeByPanduro\Theme\RegisterRestApi;
use CodeByPanduro\Theme\Setup;

/**
 * Theme configuration
 * @return Setup
 */
function theme() {
    return new Setup();
}

/**
 * Register custom post types
 * @return RegisterPostTypes
 */
function post_type() {
    return new RegisterPostTypes();
}

/**
 * Register custom rest api endpoints
 * @return RegisterRestApi
 */
function rest_api() {
    return new RegisterRestApi();
}

