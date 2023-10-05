<?php
namespace CodeByPanduro\Configuration;

class CustomPostType {
    public static function register($post_type, $name, $singularName, $slug, $supports = ['title', 'editor', 'thumbnail']) {
        register_post_type($post_type, [
            'labels' => [
                'name' => __($name, 'wp-headless'),
                'singular_name' => __($singularName, 'wp-headless'),
            ],
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => $supports,
            'rewrite' => [
                'slug' => $slug,
                'with_front' => false,
            ],
        ]);
    }
}
