<?php
namespace CodeByPanduro\Theme;

use CodeByPanduro\Configuration\CustomUserRole;
use CodeByPanduro\Configuration\DisableComments;
use CodeByPanduro\Configuration\DisableThemeFileEditor;
use CodeByPanduro\Configuration\HeadlessAdmin;
use CodeByPanduro\Configuration\RedirectFrontend;
use CodeByPanduro\Configuration\NavMenu;
use CodeByPanduro\Configuration\UserRole;

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
            ->headlessAdminUser()
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
    public function headlessAdminUser() {
        new HeadlessAdmin();

        return $this;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function removeUserRoles($roles = []) {
        UserRole::removeArray($roles);

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
