<?php
namespace CodeByPanduro\Theme;

use CodeByPanduro\Configuration\CustomUserRole;
use CodeByPanduro\Configuration\DisableComments;
use CodeByPanduro\Configuration\DisableThemeFileEditor;
use CodeByPanduro\Configuration\HeadlessAdmin;
use CodeByPanduro\Configuration\RedirectFrontend;
use CodeByPanduro\Configuration\NavMenu;
use CodeByPanduro\Configuration\UserRoleManager;

/**
 * Setup theme
 * This class is used to configure the theme and add custom functionality
 * @return void
 */
class Setup {

    /**
     * Boot the headless theme setup
     * @return Setup
     */
    public function headlessSetup(): Setup {
        $this
            ->disableComments()
            ->disableThemeFileEditor()
            ->headlessAdminUser()
            ->redirectFrontend();

        return $this;
    }

    /**
     * Disable comments completely
     * @return Setup
     */
    public function disableComments(): Setup {
        new DisableComments();

        return $this;
    }

    /**
     * Disable the theme file editor
     * @return Setup
     */
    public function disableThemeFileEditor(): Setup {
        new DisableThemeFileEditor();

        return $this;
    }

    /**
     * Applies a headless admin user
     * @return $this
     */
    public function headlessAdminUser(): Setup {
        new HeadlessAdmin();

        return $this;
    }

    /**
     * Remove user certain roles
     * @param array $roles
     * @return $this
     */
    public function removeUserRoles(array $roles = []): Setup {
        UserRoleManager::removeRoles($roles);

        return $this;
    }

    /**
     * Redirect frontend to headless frontend
     * @return $this
     */
    public function redirectFrontend(): Setup {
        new RedirectFrontend();
        return $this;
    }

    /**
     * Add a new menu
     * @param $name
     * @param $title
     * @return $this
     */
    public function addMenu($name, $title): Setup {
        NavMenu::register($name, $title);

        return $this;
    }
}
