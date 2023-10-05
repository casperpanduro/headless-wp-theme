<?php
namespace CodeByPanduro\PostType;

interface PostTypeInterface {

    /**
     * @param string $name
     */
    // return self
    public function __construct(string $name);

    public function singularName(string $singularName);

    public function slug(string $slug);

    public function supports(array $supports);

    public function register();
}
