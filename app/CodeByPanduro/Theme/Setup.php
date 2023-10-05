<?php
namespace CodeByPanduro\Theme;

use CodeByPanduro\Configuration\DisableComments;
use CodeByPanduro\Configuration\DisablePosts;
use CodeByPanduro\Configuration\RedirectFrontend;

/**
 * Setup
 *
 * @return void
 */
class Setup {

    public function headlessSetup() {
        $this->disableComments();
        $this->redirectFrontend();
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

    /**
     * @return $this
     */
    public function helloWorld() {
        echo 'Hello World!';

        return $this;
    }
}
