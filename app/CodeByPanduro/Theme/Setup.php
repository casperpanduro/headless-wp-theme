<?php
namespace CodeByPanduro\Theme;

use CodeByPanduro\Configuration\DisableComments;
use CodeByPanduro\Configuration\RedirectFrontend;
use CodeByPanduro\Configuration\NavMenu;

/**
 * Setup
 *
 * @return void
 */
class Setup {

    public function headlessSetup() {
        $this->disableComments();
        $this->redirectFrontend();

        return $this;
    }

    public function disableComments() {
        new DisableComments();

        return $this;
    }

    /**
     * @return $this
     */
    public function redirectFrontend() {
        new RedirectFrontend();
        return $this;
    }

    public function addMenu($name, $title) {
        NavMenu::register($name, $title);

        return $this;
    }

    /**
     * @return $this
     */
    public function helloWorld() {
        echo 'Hello World!';

        return $this;
    }
}
