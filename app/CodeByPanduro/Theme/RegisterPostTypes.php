<?php
namespace CodeByPanduro\Theme;
class RegisterPostTypes {
    public function add($name) {
        return (new \CodeByPanduro\PostType\PostType($name));
    }
}
