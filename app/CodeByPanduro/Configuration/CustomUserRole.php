<?php
namespace CodeByPanduro\Configuration;

use CodeByPanduro\Helpers\Slugify;

class CustomUserRole {
    public $capabilities = [];
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public static function make($name) {
        return new self($name);
    }

    public function addCapabilities($capabilities) {
        $this->capabilities = array_merge($this->capabilities, $capabilities);

        return $this;
    }

    public function addCapability($capability) {
        $this->capabilities[] = $capability;

        return $this;
    }


    public function add() {
        remove_role(Slugify::withUnderscore($this->name));

        if (get_role(Slugify::withUnderscore($this->name))) {
            return;
        }

        add_role(
            Slugify::withUnderscore($this->name),
            __($this->name, 'wp-headless-theme'),
            $this->capabilities
        );
    }

}
