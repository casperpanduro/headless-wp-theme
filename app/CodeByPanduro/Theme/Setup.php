<?php
namespace CodeByPanduro\Theme;

use CodeByPanduro\Configuration\DisableComments;
use CodeByPanduro\Configuration\PreviewFrontend;
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
        new PreviewFrontend();

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
