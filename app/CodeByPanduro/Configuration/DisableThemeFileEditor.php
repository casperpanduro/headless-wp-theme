<?php
namespace CodeByPanduro\Configuration;

class DisableThemeFileEditor {
    public function __construct() {

        define( 'DISALLOW_FILE_EDIT', true );
    }
}
