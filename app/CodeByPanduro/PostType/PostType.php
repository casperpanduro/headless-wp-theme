<?php
namespace CodeByPanduro\PostType;

use CodeByPanduro\Configuration\CustomPostType;
use CodeByPanduro\Helpers\SentenceCase;
use CodeByPanduro\Helpers\Slugify;

class PostType implements PostTypeInterface {
    public string $postType;
    public string $name;
    public string|null $singularName;
    public array $supports = [];
    public string|null $slug;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->postType = $name;
        $this->name();
        $this->slug();
        $this->singularName();
        $this->supports = [];
        return $this;
    }

    /**
     * @return void
     */
    public function register()
    {
        CustomPostType::register($this->postType, $this->name, $this->singularName, $this->slug, $this->supports);
    }

    /**
     * @return PostType
     */
    public function singularName(null|string $singularName = null)
    {
        $this->singularName = $singularName;

        if(!$singularName) {
            $this->singularName = $this->name;
        }
        return $this;
    }

    public function slug(string $slug = null): static
    {
        if(!$slug) {
            $this->slug = $this->postType;
        } else {
            $this->slug = $slug;
        }
        return $this;
    }

    /**
     * @param array $supports
     * @return $this
     */
    public function supports(array $supports = []): static
    {
        $this->supports = $supports;
        return $this;
    }

    private function name(string $name = null): static
    {
        if(!$name) {
            $this->name = SentenceCase::convert($this->postType);
        } else {
            $this->name = $name;
        }
        return $this;
    }
}
