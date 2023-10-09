<?php
use CodeByPanduro\Theme\Setup;

function theme() {
    return new Setup();
}

function post_type() {
    return new \CodeByPanduro\Theme\RegisterPostTypes();
}

function rest_api() {
    return new \CodeByPanduro\Theme\RegisterRestApi();
}

