<?php
namespace CodeByPanduro\Theme;

use CodeByPanduro\Configuration\DisableComments;
use CodeByPanduro\Configuration\DisableThemeFileEditor;
use CodeByPanduro\Configuration\RedirectFrontend;
use CodeByPanduro\Configuration\NavMenu;

/**
 * Setup
 *
 * @return void
 */
class Setup {

    public function headlessSetup() {
        $this
            ->disableComments()
            ->disableThemeFileEditor()
            ->superUser()
            ->redirectFrontend();

        return $this;
    }

    public function disableComments() {
        new DisableComments();

        return $this;
    }

    public function disableThemeFileEditor() {
        new DisableThemeFileEditor();

        return $this;
    }

    /**
     * Applies a super-user above the admin role, that can do everything.
     * @return $this
     */
    public function superUser() {
        // todo - make this configurable

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
