<?php
namespace CodeByPanduro\Theme;
use CodeByPanduro\PostType\PostType;

/**
 * Register custom post types
 */
class RegisterPostTypes {
    /**
     * Add custom post type
     * @param string $name
     * @return PostType
     */
    public function add(string $name): PostType {
        return (new PostType($name));
    }
}
